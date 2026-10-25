<?php
/**
 * Title: Encabezado
 * Slug: wpcdmx-theme/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 *
 * @package wpcdmx-theme
 */

$wpcdmx_logo = get_theme_file_uri( 'assets/images/logo-wpcdmx.svg' );
?>
<!-- wp:group {"tagName":"header","align":"full","className":"wpcdmx-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"crema","layout":{"type":"constrained","contentSize":"1280px"}} -->
<header class="wp-block-group alignfull wpcdmx-header has-crema-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:html -->
<a class="wpcdmx-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $wpcdmx_logo ); ?>" alt="<?php esc_attr_e( 'WordPress CDMX, ir al inicio', 'wpcdmx-theme' ); ?>" width="182" height="56"></a>
<!-- /wp:html -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group">
<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"crema","overlayTextColor":"grafito","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Eventos', 'wpcdmx-theme' ); ?>","url":"<?php echo esc_url( wpcdmx_link( 'events' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Sobre nosotros', 'wpcdmx-theme' ); ?>","url":"<?php echo esc_url( wpcdmx_link( 'about' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Ser ponente', 'wpcdmx-theme' ); ?>","url":"<?php echo esc_url( wpcdmx_link( 'speaker' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Blog', 'wpcdmx-theme' ); ?>","url":"<?php echo esc_url( wpcdmx_link( 'blog' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_attr_e( 'Únete en Meetup', 'wpcdmx-theme' ); ?>","url":"<?php echo esc_url( wpcdmx_link( 'meetup' ) ); ?>","kind":"custom","isTopLevelLink":true,"className":"wpcdmx-nav-cta"} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"className":"wpcdmx-header__cta"} -->
<div class="wp-block-buttons wpcdmx-header__cta"><!-- wp:button {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"24px","right":"24px"}}},"fontSize":"medium"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-medium-font-size has-custom-font-size wp-element-button" href="<?php echo esc_url( wpcdmx_link( 'meetup' ) ); ?>" style="padding-top:12px;padding-right:24px;padding-bottom:12px;padding-left:24px"><?php esc_html_e( 'Únete en Meetup', 'wpcdmx-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</header>
<!-- /wp:group -->
