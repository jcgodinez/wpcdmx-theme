<?php
/**
 * Title: Página: Ser ponente
 * Slug: wpcdmx-theme/pagina-ser-ponente
 * Categories: wpcdmx-paginas
 * Block Types: core/post-content
 * Post Types: page
 * Description: Contenido inicial de la página para proponer una charla.
 *
 * @package wpcdmx-theme
 */

?>
<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'Si resolviste un problema con WordPress, alguien en el grupo lo está enfrentando ahora. Cuéntalo en un meetup.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'No hace falta experiencia como ponente. Te ayudamos a darle forma a la idea, a preparar la presentación y a ensayar si lo necesitas.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Qué charlas buscamos', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e( 'Casos reales: un proyecto, cómo lo resolviste y qué harías distinto.', 'wpcdmx-theme' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php esc_html_e( 'Talleres en los que el público sigue los pasos con su computadora.', 'wpcdmx-theme' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php esc_html_e( 'Temas de diseño, desarrollo, seguridad, rendimiento, SEO, accesibilidad, contenido o negocio.', 'wpcdmx-theme' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php esc_html_e( 'Herramientas y plugins que usas a diario, con sus ventajas y sus límites.', 'wpcdmx-theme' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Las charlas son educativas. Puedes mencionar tu empresa o tu producto, pero la presentación no puede ser un anuncio de venta.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Cómo proponer tu charla', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true} -->
<ol class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e( 'Escríbenos con el título, un resumen de tres o cuatro líneas y a quién está dirigida.', 'wpcdmx-theme' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php esc_html_e( 'Dinos si la prefieres presencial o en línea y qué meses te acomodan.', 'wpcdmx-theme' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php esc_html_e( 'Te respondemos para acordar la fecha y publicar el evento.', 'wpcdmx-theme' ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( wpcdmx_link( 'meetup' ) ); ?>"><?php esc_html_e( 'Escríbenos en Meetup', 'wpcdmx-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"textColor":"tinta-suave","fontSize":"small"} -->
<p class="has-tinta-suave-color has-text-color has-small-font-size"><?php
printf(
	/* translators: %s: link to the code of conduct page. */
	esc_html__( 'Ponentes y asistentes siguen el mismo %s.', 'wpcdmx-theme' ),
	'<a href="' . esc_url( wpcdmx_link( 'conduct' ) ) . '">' . esc_html__( 'código de conducta', 'wpcdmx-theme' ) . '</a>'
);
?></p>
<!-- /wp:paragraph -->
