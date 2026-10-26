<?php
/**
 * Title: Página: Patrocinadores
 * Slug: wpcdmx-theme/pagina-patrocinadores
 * Categories: wpcdmx-paginas
 * Block Types: core/post-content
 * Post Types: page
 * Description: Contenido inicial de la página de patrocinadores.
 *
 * @package wpcdmx-theme
 */

?>
<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'Los meetups son gratuitos gracias a empresas y personas que prestan un espacio, invitan el café o cubren la transmisión. Si quieres apoyar a la comunidad, aquí te contamos cómo.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Formas de apoyar', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e( 'Espacio para un meetup, con proyector, internet y lugar para 30 a 50 personas.', 'wpcdmx-theme' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php esc_html_e( 'Café, bebidas o botanas para un evento.', 'wpcdmx-theme' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php esc_html_e( 'Equipo o servicio para transmitir y grabar las charlas.', 'wpcdmx-theme' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php esc_html_e( 'Productos o licencias para rifar entre los asistentes.', 'wpcdmx-theme' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Qué ofrecemos', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Agradecemos a cada patrocinador al inicio del evento, en la publicación de Meetup y en nuestras redes, y su logotipo aparece en esta página. El grupo sigue las reglas de patrocinio de los meetups de WordPress.org, así que las charlas no se venden: el contenido lo decide la comunidad.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Nos apoyan', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'WordPress.com aloja este sitio.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( '¿Quieres patrocinar?', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Escríbenos con lo que te gustaría aportar y te proponemos una fecha.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( wpcdmx_link( 'meetup' ) ); ?>"><?php esc_html_e( 'Escríbenos en Meetup', 'wpcdmx-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
