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
			'description'       => __( 'Enlace de YouTube con la grabación del evento: un video o una lista de reproducción.', 'wpcdmx-theme' ),
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
 * Extract the playlist ID (the `list` parameter) from a YouTube URL.
 *
 * @param string $url YouTube URL.
 * @return string Playlist ID, or ''.
 */
function wpcdmx_youtube_playlist_id( $url ) {
	if ( ! preg_match( '~youtu(?:\.be|be(?:-nocookie)?\.com)/~', (string) $url ) ) {
		return '';
	}

	return preg_match( '~[?&]list=([A-Za-z0-9_-]+)~', (string) $url, $m ) ? $m[1] : '';
}

/**
 * Embed and watch URLs for a YouTube video or playlist link.
 *
 * A playlist link (youtube.com/playlist?list=...) embeds the whole list. A video
 * link that also carries a list starts at that video inside the list.
 *
 * @param string $url YouTube URL.
 * @return array{embed: string, watch: string, playlist: bool}|null Null when not YouTube.
 */
function wpcdmx_youtube_embed( $url ) {
	$video = wpcdmx_youtube_id( $url );
	$list  = wpcdmx_youtube_playlist_id( $url );

	if ( '' !== $video ) {
		$embed = 'https://www.youtube-nocookie.com/embed/' . $video;
		$watch = 'https://www.youtube.com/watch?v=' . $video;
		if ( '' !== $list ) {
			$embed .= '?list=' . $list;
			$watch .= '&list=' . $list;
		}
		return array( 'embed' => $embed, 'watch' => $watch, 'playlist' => '' !== $list );
	}

	if ( '' !== $list ) {
		return array(
			'embed'    => 'https://www.youtube-nocookie.com/embed/videoseries?list=' . $list,
			'watch'    => 'https://www.youtube.com/playlist?list=' . $list,
			'playlist' => true,
		);
	}

	return null;
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
	$video   = wpcdmx_youtube_embed( wpcdmx_event_video_url( $post_id ) );
	if ( null === $video ) {
		return '';
	}

	/* translators: %s: event title. */
	$title = sprintf( __( 'Grabación: %s', 'wpcdmx-theme' ), get_the_title( $post_id ) );

	return sprintf(
		'<section class="wpcdmx-video" aria-labelledby="wpcdmx-video-titulo"><h2 id="wpcdmx-video-titulo" class="wp-block-heading">%1$s</h2><div class="wpcdmx-video__marco"><iframe src="%2$s" title="%3$s" loading="lazy" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div><p class="wpcdmx-video__enlace"><a href="%4$s">%5$s</a></p></section>',
		$video['playlist'] ? esc_html__( 'Grabaciones', 'wpcdmx-theme' ) : esc_html__( 'Grabación', 'wpcdmx-theme' ),
		esc_url( $video['embed'] ),
		esc_attr( $title ),
		esc_url( $video['watch'] ),
		$video['playlist'] ? esc_html__( 'Ver la lista en YouTube', 'wpcdmx-theme' ) : esc_html__( 'Ver en YouTube', 'wpcdmx-theme' )
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
	$video = wpcdmx_youtube_embed( wpcdmx_event_video_url( wpcdmx_video_block_post_id( $block ) ) );
	if ( null === $video ) {
		return '';
	}

	$label = $video['playlist'] ? __( 'Videos', 'wpcdmx-theme' ) : __( 'Video', 'wpcdmx-theme' );

	return '<span class="wpcdmx-etiqueta-video"><svg aria-hidden="true" focusable="false" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>' . esc_html( $label ) . '</span>';
}

add_action( 'add_meta_boxes_gatherpress_event', 'wpcdmx_add_video_meta_box' );
/**
 * Add a "Grabación (YouTube)" box to the event editor sidebar.
 *
 * @return void
 */
function wpcdmx_add_video_meta_box() {
	add_meta_box(
		'wpcdmx-video',
		__( 'Grabación (YouTube)', 'wpcdmx-theme' ),
		'wpcdmx_render_video_meta_box',
		'gatherpress_event',
		'side',
		'default'
	);
}

/**
 * Print the recording URL field.
 *
 * @param WP_Post $post Event being edited.
 * @return void
 */
function wpcdmx_render_video_meta_box( $post ) {
	wp_nonce_field( 'wpcdmx_video_save', 'wpcdmx_video_nonce' );
	printf(
		'<p><label for="wpcdmx-video-url">%1$s</label></p><p><input type="url" id="wpcdmx-video-url" name="wpcdmx_video_url" value="%2$s" class="widefat" placeholder="https://youtu.be/..." /></p><p class="description">%3$s</p>',
		esc_html__( 'Enlace del video o de la lista de reproducción', 'wpcdmx-theme' ),
		esc_attr( wpcdmx_event_video_url( $post->ID ) ),
		esc_html__( 'Pega el enlace de YouTube y guarda el evento. Déjalo vacío si no hay grabación.', 'wpcdmx-theme' )
	);
}

add_action( 'save_post_gatherpress_event', 'wpcdmx_save_video_meta_box' );
/**
 * Save the recording URL from the meta box.
 *
 * The block editor submits meta boxes after its own REST save, so this value wins.
 *
 * @param int $post_id Event ID.
 * @return void
 */
function wpcdmx_save_video_meta_box( $post_id ) {
	if (
		! isset( $_POST['wpcdmx_video_nonce'], $_POST['wpcdmx_video_url'] )
		|| ! wp_verify_nonce( sanitize_key( wp_unslash( $_POST['wpcdmx_video_nonce'] ) ), 'wpcdmx_video_save' )
		|| ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		|| ! current_user_can( 'edit_post', $post_id )
	) {
		return;
	}

	$url = esc_url_raw( trim( wp_unslash( $_POST['wpcdmx_video_url'] ) ) );

	if ( '' === $url ) {
		delete_post_meta( $post_id, 'wpcdmx_video_url' );
	} else {
		update_post_meta( $post_id, 'wpcdmx_video_url', $url );
	}
}
