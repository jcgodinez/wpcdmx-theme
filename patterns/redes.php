<?php
/**
 * Title: Únete a la conversación
 * Slug: wpcdmx-theme/redes
 * Categories: wpcdmx
 * Description: Una tarjeta por red social de la comunidad, con su ícono sobre un color de la marca.
 *
 * @package wpcdmx-theme
 */

$wpcdmx_textos = array(
	'meetup'    => array( __( 'Regístrate en cada meetup y recibe los avisos de nuevos eventos.', 'wpcdmx-theme' ), __( 'Ir a Meetup', 'wpcdmx-theme' ) ),
	'youtube'   => array( __( 'Suscríbete al canal de la comunidad en @WPCDMX.', 'wpcdmx-theme' ), __( 'Ver el canal', 'wpcdmx-theme' ) ),
	'instagram' => array( __( 'Síguenos en @wordpress_mx para fotos y avisos de cada evento.', 'wpcdmx-theme' ), __( 'Seguir en Instagram', 'wpcdmx-theme' ) ),
	'facebook'  => array( __( 'Únete al grupo para preguntar, compartir y ayudar a otros.', 'wpcdmx-theme' ), __( 'Unirme al grupo', 'wpcdmx-theme' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:0">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"wpcdmx-etiqueta"} -->
<p class="wpcdmx-etiqueta"><?php esc_html_e( 'Únete a la conversación', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Encuéntranos en redes', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","minimumColumnWidth":"260px"}} -->
<div class="wp-block-group">
<?php foreach ( wpcdmx_social_networks() as $wpcdmx_red ) : ?>
<!-- wp:group {"className":"wpcdmx-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"12px"}},"backgroundColor":"blanco","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group wpcdmx-card has-blanco-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
<!-- wp:html -->
<div class="wpcdmx-red__icono has-<?php echo esc_attr( $wpcdmx_red['color'] ); ?>-background-color"><?php echo wpcdmx_social_icon( $wpcdmx_red, $wpcdmx_red['ink'], 28 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG. ?></div>
<!-- /wp:html -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $wpcdmx_red['name'] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"tinta-suave"} -->
<p class="has-tinta-suave-color has-text-color"><?php echo esc_html( $wpcdmx_textos[ $wpcdmx_red['key'] ][0] ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500"><a href="<?php echo esc_url( wpcdmx_link( $wpcdmx_red['key'] ) ); ?>"><?php echo esc_html( $wpcdmx_textos[ $wpcdmx_red['key'] ][1] ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
