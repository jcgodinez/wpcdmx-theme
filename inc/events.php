<?php
/**
 * Events: GatherPress integration helpers and the Meetup history fallback.
 *
 * Event lists are core Query blocks in GatherPress's event-query variation
 * (namespace `gatherpress-event-query`). When GatherPress is not active, or has
 * no events yet, each query shows its "no results" content: the recent Meetup
 * history below, so the site never looks empty.
 *
 * @package wpcdmx-theme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Recent meetups taken from meetup.com/wordpress-mexico, newest first.
 *
 * Shown only until GatherPress has past events. Edit or extend through the
 * `wpcdmx_meetup_history` filter.
 *
 * @return array<int, array<string, string>>
 */
function wpcdmx_meetup_history() {
	$history = array(
		array(
			'dia'     => '24',
			'mes'     => 'oct',
			'anio'    => '2026',
			'titulo'  => '¿WordPress ha muerto? Autopsia en tiempos de IA',
			'detalle' => 'Con Alejandra Valdés, de Meneo Web · Av. Juárez 20, Centro · 35 asistentes',
			'url'     => 'https://www.meetup.com/wordpress-mexico/events/316848340/',
		),
		array(
			'dia'     => '26',
			'mes'     => 'sep',
			'anio'    => '2026',
			'titulo'  => 'De sitio vulnerable a seguro, la guía que realmente importa',
			'detalle' => 'Con Tino Barrera · Av. Juárez 20, Centro · 20 asistentes',
			'url'     => 'https://www.meetup.com/wordpress-mexico/events/316533468/',
		),
		array(
			'dia'     => '29',
			'mes'     => 'ago',
			'anio'    => '2026',
			'titulo'  => 'WordPress Day CDMX 2026',
			'detalle' => 'Canaco Ciudad de México, Paseo de la Reforma 42 · 50 asistentes',
			'url'     => 'https://www.meetup.com/wordpress-mexico/events/315622746/',
		),
		array(
			'dia'     => '15',
			'mes'     => 'ago',
			'anio'    => '2026',
			'titulo'  => 'Rumbo al WordPress Day CDMX: Gestiona 100 webs como si fueran una',
			'detalle' => 'En línea · 20 asistentes',
			'url'     => 'https://www.meetup.com/wordpress-mexico/events/316066943/',
		),
	);

	return apply_filters( 'wpcdmx_meetup_history', $history );
}

/**
 * Block markup for the Meetup history as cards (home) or rows (events page).
 *
 * @param string $layout 'cards' or 'rows'.
 * @param int    $limit  How many meetups to show.
 * @return string Serialized blocks.
 */
function wpcdmx_meetup_history_blocks( $layout = 'cards', $limit = 3 ) {
	$items = array_slice( wpcdmx_meetup_history(), 0, $limit );
	$out   = '';

	foreach ( $items as $item ) {
		$titulo  = esc_html( $item['titulo'] );
		$detalle = esc_html( $item['detalle'] );
		$url     = esc_url( $item['url'] );
		$dia     = esc_html( $item['dia'] );
		$mes     = esc_html( $item['mes'] );
		$anio    = esc_html( $item['anio'] );
		$enlace  = esc_html__( 'Ver en Meetup', 'wpcdmx-theme' );

		if ( 'rows' === $layout ) {
			$out .= <<<HTML
<!-- wp:group {"className":"wpcdmx-fila-evento","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group wpcdmx-fila-evento">
<!-- wp:group {"className":"wpcdmx-fecha","layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-fecha"><!-- wp:paragraph {"className":"wpcdmx-fecha-num"} -->
<p class="wpcdmx-fecha-num">{$dia}</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"wpcdmx-fecha-txt"} -->
<p class="wpcdmx-fecha-txt">{$mes}<span class="wpcdmx-fecha-anio"> {$anio}</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"wpcdmx-fila-evento__contenido","style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-fila-evento__contenido"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">{$titulo}</h3>
<!-- /wp:heading --><!-- wp:paragraph {"textColor":"tinta-suave","fontSize":"small"} -->
<p class="has-tinta-suave-color has-text-color has-small-font-size">{$detalle}</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500"><a href="{$url}">{$enlace}</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

HTML;
		} else {
			$out .= <<<HTML
<!-- wp:group {"className":"wpcdmx-card wpcdmx-reciente","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"blanco","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group wpcdmx-card wpcdmx-reciente has-blanco-background-color has-background">
<!-- wp:group {"className":"wpcdmx-fecha","layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-fecha"><!-- wp:paragraph {"className":"wpcdmx-fecha-num"} -->
<p class="wpcdmx-fecha-num">{$dia}</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"wpcdmx-fecha-txt"} -->
<p class="wpcdmx-fecha-txt">{$mes} {$anio}</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"12px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">{$titulo}</h3>
<!-- /wp:heading --><!-- wp:paragraph {"textColor":"tinta-suave","fontSize":"small"} -->
<p class="has-tinta-suave-color has-text-color has-small-font-size">{$detalle}</p>
<!-- /wp:paragraph --><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500"><a href="{$url}">{$enlace}</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

HTML;
		}
	}

	return $out;
}

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
