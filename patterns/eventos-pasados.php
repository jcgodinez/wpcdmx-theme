<?php
/**
 * Title: Eventos pasados (lista)
 * Slug: wpcdmx-theme/eventos-pasados
 * Categories: wpcdmx-eventos
 * Description: Eventos pasados de GatherPress en filas con fecha de color y paginación. Sin eventos, muestra el historial reciente de Meetup.
 *
 * @package wpcdmx-theme
 */

?>
<!-- wp:group {"align":"full","anchor":"pasados","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div id="pasados" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Eventos pasados', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":22,"query":{"perPage":10,"pages":0,"offset":0,"postType":"gatherpress_event","gatherpress_event_query":"past","order":"desc","orderBy":"datetime","inherit":false},"namespace":"gatherpress-event-query","className":"gatherpress-event-query"} -->
<div class="wp-block-query gatherpress-event-query">
<!-- wp:post-template {"className":"wpcdmx-colores","style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:group {"className":"wpcdmx-fila-evento","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group wpcdmx-fila-evento">
<!-- wp:group {"className":"wpcdmx-fecha","layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-fecha"><?php echo wpcdmx_event_date_tile_blocks( false ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static block markup. ?></div>
<!-- /wp:group -->
<!-- wp:group {"className":"wpcdmx-fila-evento__contenido","style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-fila-evento__contenido">
<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|grafito"}}}}} /-->
<!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"j \\d\\e F \\d\\e Y","showTimezone":"no","fontSize":"small","textColor":"tinta-suave"} /-->
</div>
<!-- /wp:group -->
<!-- wp:read-more {"content":"<?php esc_attr_e( 'Ver el evento', 'wpcdmx-theme' ); ?>","style":{"typography":{"fontWeight":"500"}}} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":"<?php esc_attr_e( 'Más recientes', 'wpcdmx-theme' ); ?>"} /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next {"label":"<?php esc_attr_e( 'Anteriores', 'wpcdmx-theme' ); ?>"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:group {"className":"wpcdmx-colores","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-colores">
<?php echo wpcdmx_meetup_history_blocks( 'rows', 4 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped inside. ?>
</div>
<!-- /wp:group -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( wpcdmx_link( 'meetup' ) ); ?>"><?php esc_html_e( 'Ver más eventos en Meetup', 'wpcdmx-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500"}}} -->
<p class="has-text-align-center" style="font-weight:500"><a href="<?php echo esc_url( wpcdmx_link( 'gallery' ) ); ?>"><?php esc_html_e( 'Ver fotos de meetups anteriores', 'wpcdmx-theme' ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
