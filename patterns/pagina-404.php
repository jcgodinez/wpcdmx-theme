<?php
/**
 * Title: Página no encontrada
 * Slug: wpcdmx-theme/pagina-404
 * Categories: wpcdmx
 * Inserter: no
 * Description: Contenido de la plantilla 404: mensaje, buscador, caminos útiles y el próximo meetup.
 *
 * @package wpcdmx-theme
 */

$wpcdmx_caminos = array(
	array( 'turquesa', __( 'Próximos eventos', 'wpcdmx-theme' ), __( 'Fechas, sedes y registro de los siguientes meetups.', 'wpcdmx-theme' ), wpcdmx_link( 'events' ) ),
	array( 'rojo', __( 'Eventos pasados y grabaciones', 'wpcdmx-theme' ), __( 'Más de cien meetups desde 2015. Los que tienen video llevan la etiqueta roja.', 'wpcdmx-theme' ), wpcdmx_link( 'events' ) . '#pasados' ),
	array( 'amarillo', __( 'Propón una charla', 'wpcdmx-theme' ), __( 'Cuéntanos qué aprendiste y lo compartimos en un meetup.', 'wpcdmx-theme' ), wpcdmx_link( 'speaker' ) ),
	array( 'verde', __( 'Escríbenos', 'wpcdmx-theme' ), __( 'Si buscabas algo que no encuentras, te ayudamos.', 'wpcdmx-theme' ), wpcdmx_link( 'contact' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">
<!-- wp:paragraph {"className":"wpcdmx-etiqueta"} -->
<p class="wpcdmx-etiqueta"><?php esc_html_e( 'Error 404', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Esta página no llegó al meetup', 'wpcdmx-theme' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'Puede que el enlace haya cambiado o que la página ya no exista. Busca lo que necesitas o sigue alguno de estos caminos.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:search {"label":"<?php esc_attr_e( 'Buscar', 'wpcdmx-theme' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Buscar en WordPress CDMX', 'wpcdmx-theme' ); ?>","buttonText":"<?php esc_attr_e( 'Buscar', 'wpcdmx-theme' ); ?>"} /-->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Ir al inicio', 'wpcdmx-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","minimumColumnWidth":"240px"}} -->
<div class="wp-block-group">
<?php foreach ( $wpcdmx_caminos as $wpcdmx_camino ) : ?>
<!-- wp:group {"className":"wpcdmx-card wpcdmx-camino","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"blanco","layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-card wpcdmx-camino has-blanco-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"wpcdmx-barra","backgroundColor":"<?php echo esc_attr( $wpcdmx_camino[0] ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-barra has-<?php echo esc_attr( $wpcdmx_camino[0] ); ?>-background-color has-background"></div>
<!-- /wp:group -->
<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><a href="<?php echo esc_url( $wpcdmx_camino[3] ); ?>"><?php echo esc_html( $wpcdmx_camino[1] ); ?></a></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"tinta-suave"} -->
<p class="has-tinta-suave-color has-text-color"><?php echo esc_html( $wpcdmx_camino[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"wpcdmx-theme/proximo-meetup"} /-->
