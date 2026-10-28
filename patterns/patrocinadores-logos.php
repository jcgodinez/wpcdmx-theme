<?php
/**
 * Title: Patrocinadores con logotipo
 * Slug: wpcdmx-theme/patrocinadores-logos
 * Categories: wpcdmx-paginas
 * Description: Tarjetas de patrocinadores con logotipo, nombre, aporte y enlace. Sube el logotipo en cada imagen.
 *
 * @package wpcdmx-theme
 */

$wpcdmx_patrocinadores = array(
	array( 'Cloudways', __( 'Patrocinador de la comunidad.', 'wpcdmx-theme' ), 'https://www.cloudways.com/' ),
	array( 'WordPress.com', __( 'Aloja este sitio.', 'wpcdmx-theme' ), 'https://wordpress.com/' ),
);
?>
<!-- wp:group {"className":"wpcdmx-patrocinadores","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","minimumColumnWidth":"220px"}} -->
<div class="wp-block-group wpcdmx-patrocinadores">
<?php foreach ( $wpcdmx_patrocinadores as $wpcdmx_p ) : ?>
<!-- wp:group {"className":"wpcdmx-card wpcdmx-patrocinador","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"12px"}},"backgroundColor":"blanco","layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-card wpcdmx-patrocinador has-blanco-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
<!-- wp:image {"className":"wpcdmx-patrocinador__logo"} -->
<figure class="wp-block-image wpcdmx-patrocinador__logo"><img alt="<?php echo esc_attr( $wpcdmx_p[0] ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $wpcdmx_p[0] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"tinta-suave"} -->
<p class="has-tinta-suave-color has-text-color"><?php echo esc_html( $wpcdmx_p[1] ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500"><a href="<?php echo esc_url( $wpcdmx_p[2] ); ?>"><?php
/* translators: %s: sponsor name. */
printf( esc_html__( 'Visitar %s', 'wpcdmx-theme' ), esc_html( $wpcdmx_p[0] ) );
?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
