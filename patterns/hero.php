<?php
/**
 * Title: Hero de portada
 * Slug: wpcdmx-theme/hero
 * Categories: wpcdmx, banner
 * Description: Lema de la comunidad, presentación, botones y foto grupal sobre un bloque turquesa.
 *
 * @package wpcdmx-theme
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"46%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:46%">
<!-- wp:paragraph {"className":"wpcdmx-etiqueta"} -->
<p class="wpcdmx-etiqueta"><?php esc_html_e( 'Comunidad WordPress · Ciudad de México', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.06","letterSpacing":"-0.01em"}},"fontSize":"gigantic"} -->
<h1 class="wp-block-heading has-gigantic-font-size" style="letter-spacing:-0.01em;line-height:1.06"><?php esc_html_e( '¡Sigamos aprendiendo juntos!', 'wpcdmx-theme' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"tinta-suave","fontSize":"large"} -->
<p class="has-tinta-suave-color has-text-color has-large-font-size"><?php esc_html_e( 'Una comunidad para quienes usan WordPress en México, desde principiantes hasta desarrolladores avanzados. Nos reunimos para intercambiar ideas, hacer networking y aprender haciendo.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( wpcdmx_link( 'events' ) ); ?>"><?php esc_html_e( 'Ver eventos', 'wpcdmx-theme' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( wpcdmx_link( 'about' ) ); ?>"><?php esc_html_e( 'Conoce la comunidad', 'wpcdmx-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"54%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:54%">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"wpcdmx-hero-foto"} -->
<figure class="wp-block-image size-full wpcdmx-hero-foto"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/comunidad-wpcdmx.webp' ) ); ?>" alt="<?php esc_attr_e( 'Foto grupal de la comunidad WordPress CDMX en un meetup', 'wpcdmx-theme' ); ?>" width="1920" height="1189"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
