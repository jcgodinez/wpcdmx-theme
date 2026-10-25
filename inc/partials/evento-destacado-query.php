<?php
/**
 * Shared markup: query for the next upcoming GatherPress event, as a featured card.
 * Included by other patterns; not a pattern itself (no header).
 *
 * @package wpcdmx-theme
 */

defined( 'ABSPATH' ) || exit;

$wpcdmx_per_page = isset( $wpcdmx_per_page ) ? (int) $wpcdmx_per_page : 1;
$wpcdmx_query_id = isset( $wpcdmx_query_id ) ? (int) $wpcdmx_query_id : 11;
?>
<!-- wp:query {"queryId":<?php echo (int) $wpcdmx_query_id; ?>,"query":{"perPage":<?php echo (int) $wpcdmx_per_page; ?>,"pages":1,"offset":0,"postType":"gatherpress_event","gatherpress_event_query":"upcoming","include_unfinished":1,"order":"asc","orderBy":"datetime","inherit":false},"namespace":"gatherpress-event-query","className":"gatherpress-event-query"} -->
<div class="wp-block-query gatherpress-event-query">
<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<!-- wp:group {"className":"wpcdmx-evento-destacado","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"stretch"}} -->
<div class="wp-block-group wpcdmx-evento-destacado">
<!-- wp:group {"className":"wpcdmx-evento-destacado__fecha wpcdmx-rayos","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"4px"}},"backgroundColor":"rojo","textColor":"blanco","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group wpcdmx-evento-destacado__fecha wpcdmx-rayos has-blanco-color has-rojo-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"l","showTimezone":"no","fontSize":"large","style":{"typography":{"fontWeight":"500"}}} /-->
<!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"j","showTimezone":"no","className":"wpcdmx-fecha-dia"} /-->
<!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"F","showTimezone":"no","className":"wpcdmx-fecha-mes"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wpcdmx-evento-destacado__contenido","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-evento-destacado__contenido" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"xx-large","style":{"typography":{"fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|grafito"}}}}} /-->
<!-- wp:gatherpress/event-date {"style":{"typography":{"fontWeight":"500"}}} /-->
<!-- wp:gatherpress/venue -->
<!-- wp:post-title {"level":4,"fontSize":"medium","style":{"typography":{"fontWeight":"400"}},"textColor":"tinta-suave"} /-->
<!-- /wp:gatherpress/venue -->
<!-- wp:post-excerpt {"excerptLength":30,"textColor":"tinta-suave"} /-->
<!-- wp:read-more {"content":"<?php esc_attr_e( 'Ver detalles y registrarse', 'wpcdmx-theme' ); ?>","className":"wpcdmx-boton"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:group {"className":"wpcdmx-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"blanco","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group wpcdmx-card has-blanco-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"layout":{"selfStretch":"fixed","flexSize":"560px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Estamos preparando el siguiente meetup', 'wpcdmx-theme' ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph {"textColor":"tinta-suave"} -->
<p class="has-tinta-suave-color has-text-color"><?php esc_html_e( 'Únete al grupo en Meetup para recibir el aviso en cuanto lo publiquemos.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( wpcdmx_link( 'meetup' ) ); ?>"><?php esc_html_e( 'Avísame del próximo', 'wpcdmx-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
