<?php
/**
 * Title: Invitación a ponentes
 * Slug: wpcdmx-theme/ponentes
 * Categories: wpcdmx, call-to-action
 * Description: Bloque amarillo con los rayos de la D que invita a proponer una charla.
 *
 * @package wpcdmx-theme
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:group {"className":"wpcdmx-card wpcdmx-rayos","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"amarillo","textColor":"grafito","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group wpcdmx-card wpcdmx-rayos has-grafito-color has-amarillo-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
<!-- wp:group {"style":{"spacing":{"blockGap":"12px"},"layout":{"selfStretch":"fixed","flexSize":"640px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"wpcdmx-etiqueta","textColor":"grafito"} -->
<p class="wpcdmx-etiqueta has-grafito-color has-text-color"><?php esc_html_e( '¿Quieres participar?', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"huge"} -->
<h2 class="wp-block-heading has-huge-font-size"><?php esc_html_e( 'Tienes algo que enseñar. Compártelo en un meetup.', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'No necesitas ser experto: buscamos experiencias reales, casos prácticos y lo que aprendiste en tu último proyecto.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"grafito","textColor":"blanco"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-blanco-color has-grafito-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( wpcdmx_link( 'speaker' ) ); ?>"><?php esc_html_e( 'Propón una charla', 'wpcdmx-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
