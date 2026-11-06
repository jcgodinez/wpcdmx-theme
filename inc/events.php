<?php
/**
 * Events: GatherPress integration helpers.
 *
 * Event lists are core Query blocks in GatherPress's event-query variation
 * (namespace `gatherpress-event-query`). When GatherPress is not active, or has
 * no events, each query shows its "no results" content: a short message with
 * a link to the Meetup group.
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
