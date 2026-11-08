<?php
/**
 * Event recordings: a YouTube URL stored on each GatherPress event.
 *
 * The URL lives in the `wpcdmx_video_url` post meta, not in the event content,
 * so it survives a re-import from Meetup (the importer replaces the content).
 * Editors can fill it from the Custom Fields panel or through the REST API.
 *
 * @package wpcdmx-theme
 */

defined( 'ABSPATH' ) || exit;

add_action( 'init', 'wpcdmx_register_video_meta', 20 );
/**
 * Register the recording URL meta on GatherPress events.
 *
 * Runs after GatherPress registers its post type (init, default priority).
 *
 * @return void
 */
function wpcdmx_register_video_meta() {
	if ( ! post_type_exists( 'gatherpress_event' ) ) {
		return;
	}

	register_post_meta(
		'gatherpress_event',
		'wpcdmx_video_url',
		array(
			'type'              => 'string',
			'description'       => __( 'Enlace de YouTube con la grabación del evento.', 'wpcdmx-theme' ),
			'single'            => true,
			'show_in_rest'      => true,
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'auth_callback'     => static function ( $allowed, $meta_key, $post_id ) {
				return current_user_can( 'edit_post', $post_id );
			},
		)
	);
}

/**
 * Extract the video ID from a YouTube URL.
 *
 * Accepts youtu.be/ID, youtube.com/watch?v=ID, /embed/ID, /live/ID and /shorts/ID.
 *
 * @param string $url YouTube URL.
 * @return string Video ID, or '' when the URL is not a YouTube video.
 */
function wpcdmx_youtube_id( $url ) {
	$pattern = '~(?:youtu\.be/|youtube(?:-nocookie)?\.com/(?:watch\?(?:.*&)?v=|embed/|live/|shorts/))([A-Za-z0-9_-]{11})~';

	return preg_match( $pattern, (string) $url, $m ) ? $m[1] : '';
}

/**
 * Recording URL of the current event, or '' when it has none.
 *
 * @param int|null $post_id Event ID. Defaults to the current post.
 * @return string
 */
function wpcdmx_event_video_url( $post_id = null ) {
	$post_id = $post_id ? $post_id : get_the_ID();

	return $post_id ? (string) get_post_meta( $post_id, 'wpcdmx_video_url', true ) : '';
}

add_action( 'init', 'wpcdmx_register_video_blocks' );
/**
 * Register two server-rendered blocks for recordings.
 *
 * They read the event ID from block context (postId), so they also work inside
 * Query Loops, where shortcodes would only see the main query's post.
 *
 * @return void
 */
function wpcdmx_register_video_blocks() {
	register_block_type(
		'wpcdmx/video',
		array(
			'title'           => __( 'Grabación del evento', 'wpcdmx-theme' ),
			'category'        => 'embed',
			'uses_context'    => array( 'postId' ),
			'render_callback' => 'wpcdmx_render_video_block',
		)
	);
	register_block_type(
		'wpcdmx/video-etiqueta',
		array(
			'title'           => __( 'Etiqueta de video', 'wpcdmx-theme' ),
			'category'        => 'embed',
			'uses_context'    => array( 'postId' ),
			'render_callback' => 'wpcdmx_render_video_badge_block',
		)
	);
}

/**
 * Event ID for a video block: block context first, then the current post.
 *
 * @param WP_Block|null $block Block instance.
 * @return int
 */
function wpcdmx_video_block_post_id( $block ) {
	if ( $block instanceof WP_Block && ! empty( $block->context['postId'] ) ) {
		return (int) $block->context['postId'];
	}

	return (int) get_the_ID();
}

/**
 * Render wpcdmx/video: the event recording, embedded. Nothing without one.
 *
 * @param array         $attributes Block attributes (unused).
 * @param string        $content    Block content (unused).
 * @param WP_Block|null $block      Block instance.
 * @return string
 */
function wpcdmx_render_video_block( $attributes, $content, $block = null ) {
	$post_id = wpcdmx_video_block_post_id( $block );
	$id      = wpcdmx_youtube_id( wpcdmx_event_video_url( $post_id ) );
	if ( '' === $id ) {
		return '';
	}

	/* translators: %s: event title. */
	$title = sprintf( __( 'Grabación: %s', 'wpcdmx-theme' ), get_the_title( $post_id ) );

	return sprintf(
		'<section class="wpcdmx-video" aria-labelledby="wpcdmx-video-titulo"><h2 id="wpcdmx-video-titulo" class="wp-block-heading">%1$s</h2><div class="wpcdmx-video__marco"><iframe src="%2$s" title="%3$s" loading="lazy" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div><p class="wpcdmx-video__enlace"><a href="%4$s">%5$s</a></p></section>',
		esc_html__( 'Grabación', 'wpcdmx-theme' ),
		esc_url( 'https://www.youtube-nocookie.com/embed/' . $id ),
		esc_attr( $title ),
		esc_url( 'https://www.youtube.com/watch?v=' . $id ),
		esc_html__( 'Ver en YouTube', 'wpcdmx-theme' )
	);
}

/**
 * Render wpcdmx/video-etiqueta: small "Video" label for event lists.
 *
 * @param array         $attributes Block attributes (unused).
 * @param string        $content    Block content (unused).
 * @param WP_Block|null $block      Block instance.
 * @return string
 */
function wpcdmx_render_video_badge_block( $attributes, $content, $block = null ) {
	if ( '' === wpcdmx_youtube_id( wpcdmx_event_video_url( wpcdmx_video_block_post_id( $block ) ) ) ) {
		return '';
	}

	return '<span class="wpcdmx-etiqueta-video"><svg aria-hidden="true" focusable="false" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>' . esc_html__( 'Video', 'wpcdmx-theme' ) . '</span>';
}
