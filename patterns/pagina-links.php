<?php
/**
 * Title: Enlaces de la comunidad
 * Slug: wpcdmx-theme/pagina-links
 * Categories: wpcdmx
 * Inserter: no
 * Description: Contenido de la plantilla page-links: el próximo meetup y todos los enlaces de la comunidad en una columna, para compartir en redes.
 *
 * @package wpcdmx-theme
 */

$wpcdmx_enlaces = array(
	array( wpcdmx_link( 'group' ), __( 'Únete al grupo en WordPress.org', 'wpcdmx-theme' ) ),
	array( wpcdmx_link( 'events' ), __( 'Todos los eventos', 'wpcdmx-theme' ) ),
	array( wpcdmx_link( 'youtube' ), __( 'Grabaciones en YouTube', 'wpcdmx-theme' ) ),
	array( wpcdmx_link( 'speaker' ), __( 'Propón una charla', 'wpcdmx-theme' ) ),
	array( wpcdmx_link( 'sponsors' ), __( 'Patrocina un meetup', 'wpcdmx-theme' ) ),
);
if ( wpcdmx_page_is_published( 'galeria' ) ) {
	$wpcdmx_enlaces[] = array( wpcdmx_link( 'gallery' ), __( 'Galería de fotos', 'wpcdmx-theme' ) );
}
$wpcdmx_enlaces[] = array( wpcdmx_link( 'instagram' ), __( 'Instagram', 'wpcdmx-theme' ) );
$wpcdmx_enlaces[] = array( wpcdmx_link( 'facebook' ), __( 'Grupo de Facebook', 'wpcdmx-theme' ) );
if ( wpcdmx_page_is_published( 'contacto' ) ) {
	$wpcdmx_enlaces[] = array( wpcdmx_link( 'contact' ), __( 'Contacto', 'wpcdmx-theme' ) );
}
?>
<!-- wp:group {"className":"wpcdmx-links","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group wpcdmx-links" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">

<!-- wp:group {"className":"wpcdmx-links__cabecera","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group wpcdmx-links__cabecera"><!-- wp:html -->
<a class="wpcdmx-links__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/logo-wpcdmx.svg' ) ); ?>" alt="<?php esc_attr_e( 'WordPress CDMX, ir al inicio', 'wpcdmx-theme' ); ?>" width="182" height="56"></a>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"textAlign":"center","fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'WordPress CDMX', 'wpcdmx-theme' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","textColor":"tinta-suave"} -->
<p class="has-text-align-center has-tinta-suave-color has-text-color"><?php esc_html_e( 'La comunidad de WordPress de la Ciudad de México. Meetups gratuitos y abiertos.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":41,"query":{"perPage":1,"pages":1,"offset":0,"postType":"gatherpress_event","gatherpress_event_query":"upcoming","include_unfinished":1,"order":"asc","orderBy":"datetime","inherit":false},"namespace":"gatherpress-event-query","className":"gatherpress-event-query"} -->
<div class="wp-block-query gatherpress-event-query">
<!-- wp:post-template -->
<!-- wp:group {"className":"wpcdmx-card wpcdmx-links__evento","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"blanco","layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-card wpcdmx-links__evento has-blanco-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
<!-- wp:paragraph {"className":"wpcdmx-etiqueta"} -->
<p class="wpcdmx-etiqueta"><?php esc_html_e( 'Próximo meetup', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"x-large","style":{"typography":{"fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|grafito"}}}}} /-->
<!-- wp:gatherpress/event-date {"style":{"typography":{"fontWeight":"500"}}} /-->
<!-- wp:gatherpress/venue -->
<!-- wp:post-title {"level":3,"fontSize":"medium","style":{"typography":{"fontWeight":"400"}},"textColor":"tinta-suave"} /-->
<!-- /wp:gatherpress/venue -->
<!-- wp:read-more {"content":"<?php esc_attr_e( 'Ver detalles y registrarse', 'wpcdmx-theme' ); ?>","className":"wpcdmx-boton"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","textColor":"tinta-suave"} -->
<p class="has-text-align-center has-tinta-suave-color has-text-color"><?php esc_html_e( 'Estamos preparando el siguiente meetup. Únete al grupo para recibir el aviso.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"wpcdmx-links__lista","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons wpcdmx-links__lista">
<?php foreach ( $wpcdmx_enlaces as $wpcdmx_i => $wpcdmx_enlace ) : ?>
<?php if ( 0 === $wpcdmx_i ) : ?>
<!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $wpcdmx_enlace[0] ); ?>"><?php echo esc_html( $wpcdmx_enlace[1] ); ?></a></div>
<!-- /wp:button -->
<?php else : ?>
<!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $wpcdmx_enlace[0] ); ?>"><?php echo esc_html( $wpcdmx_enlace[1] ); ?></a></div>
<!-- /wp:button -->
<?php endif; ?>
<?php endforeach; ?>
</div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","fontSize":"small","textColor":"tinta-suave"} -->
<p class="has-text-align-center has-tinta-suave-color has-text-color has-small-font-size"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">wp-cdmx.com</a> · <a href="<?php echo esc_url( wpcdmx_link( 'conduct' ) ); ?>"><?php esc_html_e( 'Código de conducta', 'wpcdmx-theme' ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
