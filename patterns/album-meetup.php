<?php
/**
 * Title: Álbum de meetup
 * Slug: wpcdmx-theme/album-meetup
 * Categories: wpcdmx-paginas, gallery
 * Keywords: galería, fotos, meetup, álbum
 * Description: Fecha, título y hasta tres fotos de un meetup, que se amplían al hacer clic. Para la página Galería.
 *
 * @package wpcdmx-theme
 */

?>
<!-- wp:group {"className":"wpcdmx-album","style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-album" style="margin-top:var(--wp--preset--spacing--40)">
<!-- wp:paragraph {"className":"wpcdmx-etiqueta"} -->
<p class="wpcdmx-etiqueta"><?php esc_html_e( 'Fecha del meetup', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Título del meetup', 'wpcdmx-theme' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:gallery {"columns":3,"linkTo":"lightbox","sizeSlug":"large","style":{"spacing":{"blockGap":{"top":"12px","left":"12px"}}}} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped"></figure>
<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
