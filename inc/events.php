<?php
/**
 * Events: GatherPress integration helpers.
 *
 * Event lists are core Query blocks in GatherPress's event-query variation
 * (namespace `gatherpress-event-query`). When GatherPress is not active, or has
 * no events, each query shows its "no results" content: a short message with
 * a link to the community group on events.wordpress.org.
 *
 * @package wpcdmx-theme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Inner blocks of an event date tile for the current event in a query loop.
 *
 * Uses the GatherPress event-date block with custom formats, so it renders
 * the event's own start date (not the post date).
 *
 * @param bool $with_year Whether to add the year after the month.
 * @return string Serialized blocks.
 */
function wpcdmx_event_date_tile_blocks( $with_year = true ) {
	$mes_formato = $with_year ? 'M Y' : 'M';
	return '<!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"j","showTimezone":"no","className":"wpcdmx-fecha-num"} /-->'
		. '<!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"' . $mes_formato . '","showTimezone":"no","className":"wpcdmx-fecha-txt"} /-->';
}

add_filter( 'query_loop_block_query_vars', 'wpcdmx_guard_event_queries', 10, 2 );
/**
 * Without GatherPress, WordPress swaps the unknown `gatherpress_event` post type
 * for regular posts. Return nothing instead, so the query shows its fallback.
 *
 * @param array    $query_vars Query vars built from the block.
 * @param WP_Block $block      Query block (post template) instance.
 * @return array
 */
function wpcdmx_guard_event_queries( $query_vars, $block ) {
	$post_type = isset( $block->context['query']['postType'] ) ? $block->context['query']['postType'] : '';

	if ( 'gatherpress_event' === $post_type && ! post_type_exists( 'gatherpress_event' ) ) {
		$query_vars['post__in'] = array( 0 );
	}

	return $query_vars;
}

add_action( 'template_redirect', 'wpcdmx_redirect_old_event_urls', 1 );
/**
 * Send old event URLs (/eventos/slug/) to the current ones (/evento/slug/).
 *
 * The GatherPress base changed from "eventos" to "evento" because /eventos/ is
 * now the Events page. Links shared before the change would otherwise end in
 * a 404. Runs only on 404s, so it never touches a page that exists.
 *
 * @return void
 */
function wpcdmx_redirect_old_event_urls() {
	if ( ! is_404() || ! post_type_exists( 'gatherpress_event' ) ) {
		return;
	}

	$old_base = 'eventos';
	$type     = get_post_type_object( 'gatherpress_event' );
	$new_base = ( $type && ! empty( $type->rewrite['slug'] ) ) ? trim( $type->rewrite['slug'], '/' ) : '';
	if ( '' === $new_base || $old_base === $new_base ) {
		return;
	}

	$request   = isset( $_SERVER['REQUEST_URI'] ) ? wp_unslash( $_SERVER['REQUEST_URI'] ) : ''; // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- only matched against a pattern below.
	$path      = (string) wp_parse_url( $request, PHP_URL_PATH );
	$home_path = (string) wp_parse_url( home_url( '/' ), PHP_URL_PATH );
	$path      = trim( substr( $path, strlen( rtrim( $home_path, '/' ) ) ), '/' );

	if ( ! preg_match( '#^' . preg_quote( $old_base, '#' ) . '/([^/]+)$#', $path, $matches ) ) {
		return;
	}

	$event = get_page_by_path( sanitize_title( rawurldecode( $matches[1] ) ), OBJECT, 'gatherpress_event' );
	if ( ! $event instanceof WP_Post || 'publish' !== $event->post_status ) {
		return;
	}

	wp_safe_redirect( get_permalink( $event ), 301, 'WordPress CDMX' );
	exit;
}
