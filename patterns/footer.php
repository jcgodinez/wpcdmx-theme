<?php
/**
 * Title: Pie de página
 * Slug: wpcdmx-theme/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 *
 * @package wpcdmx-theme
 */

$wpcdmx_logo = get_theme_file_uri( 'assets/images/logo-wpcdmx-negativo.svg' );
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"wpcdmx-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"grafito","textColor":"blanco","layout":{"type":"constrained","contentSize":"1280px"}} -->
<footer class="wp-block-group alignfull wpcdmx-footer has-blanco-color has-grafito-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"380px"},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:html -->
<a class="wpcdmx-footer__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $wpcdmx_logo ); ?>" alt="<?php esc_attr_e( 'WordPress CDMX', 'wpcdmx-theme' ); ?>" width="208" height="64"></a>
<!-- /wp:html -->

<!-- wp:paragraph {"textColor":"gris-claro","fontSize":"medium"} -->
<p class="has-gris-claro-color has-text-color has-medium-font-size"><?php esc_html_e( 'La comunidad de WordPress de la Ciudad de México. ¡Sigamos aprendiendo juntos!', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<?php echo wpcdmx_social_links_markup(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped inside. ?>
<!-- /wp:html -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"}} -->
<div class="wp-block-group">
<!-- wp:group {"tagName":"nav","ariaLabel":"<?php esc_attr_e( 'Eventos', 'wpcdmx-theme' ); ?>","style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<nav class="wp-block-group" aria-label="<?php esc_attr_e( 'Eventos', 'wpcdmx-theme' ); ?>">
<!-- wp:paragraph {"className":"wpcdmx-etiqueta","textColor":"gris-claro"} -->
<p class="wpcdmx-etiqueta has-gris-claro-color has-text-color"><?php esc_html_e( 'Eventos', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( wpcdmx_link( 'events' ) ); ?>"><?php esc_html_e( 'Próximos eventos', 'wpcdmx-theme' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( wpcdmx_link( 'events' ) ); ?>#pasados"><?php esc_html_e( 'Eventos pasados', 'wpcdmx-theme' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( wpcdmx_link( 'meetup' ) ); ?>"><?php esc_html_e( 'Grupo en Meetup', 'wpcdmx-theme' ); ?></a></p>
<!-- /wp:paragraph -->
</nav>
<!-- /wp:group -->

<!-- wp:group {"tagName":"nav","ariaLabel":"<?php esc_attr_e( 'Comunidad', 'wpcdmx-theme' ); ?>","style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<nav class="wp-block-group" aria-label="<?php esc_attr_e( 'Comunidad', 'wpcdmx-theme' ); ?>">
<!-- wp:paragraph {"className":"wpcdmx-etiqueta","textColor":"gris-claro"} -->
<p class="wpcdmx-etiqueta has-gris-claro-color has-text-color"><?php esc_html_e( 'Comunidad', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( wpcdmx_link( 'about' ) ); ?>"><?php esc_html_e( 'Sobre nosotros', 'wpcdmx-theme' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( wpcdmx_link( 'speaker' ) ); ?>"><?php esc_html_e( 'Ser ponente', 'wpcdmx-theme' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( wpcdmx_link( 'sponsors' ) ); ?>"><?php esc_html_e( 'Patrocinadores', 'wpcdmx-theme' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( wpcdmx_link( 'conduct' ) ); ?>"><?php esc_html_e( 'Código de conducta', 'wpcdmx-theme' ); ?></a></p>
<!-- /wp:paragraph -->
</nav>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"wpcdmx-footer__legal","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"textColor":"gris-claro","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group wpcdmx-footer__legal has-gris-claro-color has-text-color has-small-font-size" style="padding-top:var(--wp--preset--spacing--30)">
<!-- wp:paragraph -->
<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> WordPress CDMX</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Hecho con WordPress en la Ciudad de México', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</footer>
<!-- /wp:group -->
