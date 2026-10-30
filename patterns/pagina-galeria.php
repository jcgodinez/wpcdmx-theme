<?php
/**
 * Title: Página: Galería
 * Slug: wpcdmx-theme/pagina-galeria
 * Categories: wpcdmx-paginas
 * Block Types: core/post-content
 * Post Types: page
 * Description: Contenido inicial de la página Galería: introducción, título del año y un primer álbum.
 *
 * @package wpcdmx-theme
 */

?>
<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'Fotos de nuestros meetups, de los más recientes a los primeros. Haz clic en una foto para verla en grande.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"tinta-suave","fontSize":"small"} -->
<p class="has-tinta-suave-color has-text-color has-small-font-size"><?php
printf(
	/* translators: %s: link to the code of conduct page. */
	esc_html__( '¿Apareces en una foto y prefieres que la quitemos? Escríbenos y la retiramos, como dice nuestro %s.', 'wpcdmx-theme' ),
	'<a href="' . esc_url( wpcdmx_link( 'conduct' ) ) . '">' . esc_html__( 'código de conducta', 'wpcdmx-theme' ) . '</a>'
);
?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( wp_date( 'Y' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:pattern {"slug":"wpcdmx-theme/album-meetup"} /-->
