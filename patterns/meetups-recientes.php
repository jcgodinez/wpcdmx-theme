<?php
/**
 * Title: Meetups recientes
 * Slug: wpcdmx-theme/meetups-recientes
 * Categories: wpcdmx, wpcdmx-eventos
 * Description: Los tres últimos eventos de GatherPress en tarjetas. Mientras no haya eventos pasados, muestra el historial reciente de Meetup.
 *
 * @package wpcdmx-theme
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"wpcdmx-etiqueta"} -->
<p class="wpcdmx-etiqueta"><?php esc_html_e( 'Meetups recientes', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Lo que hemos aprendido', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500"><a href="<?php echo esc_url( wpcdmx_link( 'events' ) ); ?>#pasados"><?php esc_html_e( 'Ver todos los eventos', 'wpcdmx-theme' ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":12,"query":{"perPage":3,"pages":1,"offset":0,"postType":"gatherpress_event","gatherpress_event_query":"past","order":"desc","orderBy":"datetime","inherit":false},"namespace":"gatherpress-event-query","className":"gatherpress-event-query"} -->
<div class="wp-block-query gatherpress-event-query">
<!-- wp:post-template {"className":"wpcdmx-colores","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"260px"}} -->
<!-- wp:group {"className":"wpcdmx-card wpcdmx-reciente","style":{"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"blanco","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group wpcdmx-card wpcdmx-reciente has-blanco-background-color has-background" style="min-height:100%">
<!-- wp:group {"className":"wpcdmx-fecha","layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-fecha"><?php echo wpcdmx_event_date_tile_blocks( true ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static block markup. ?></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"12px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|grafito"}}}}} /-->
<!-- wp:post-excerpt {"excerptLength":18,"textColor":"tinta-suave","fontSize":"small"} /-->
<!-- wp:read-more {"content":"<?php esc_attr_e( 'Ver el meetup', 'wpcdmx-theme' ); ?>","style":{"typography":{"fontWeight":"500"}}} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:group {"className":"wpcdmx-colores","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"260px"}} -->
<div class="wp-block-group wpcdmx-colores">
<?php echo wpcdmx_meetup_history_blocks( 'cards', 3 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped inside. ?>
</div>
<!-- /wp:group -->
<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
