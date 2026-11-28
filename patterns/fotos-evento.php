<?php
/**
 * Title: Fotos del meetup
 * Slug: wpcdmx-theme/fotos-evento
 * Categories: wpcdmx-paginas, gallery
 * Keywords: fotos, galería, meetup, evento
 * Post Types: gatherpress_event
 * Description: Título "Fotos" y una galería de tres columnas que se amplía al hacer clic. Para el final de un evento.
 *
 * @package wpcdmx-theme
 */

?>
<!-- wp:group {"className":"wpcdmx-album","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-album" style="margin-top:var(--wp--preset--spacing--40)">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Fotos', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:gallery {"columns":3,"linkTo":"lightbox","sizeSlug":"large","style":{"spacing":{"blockGap":{"top":"12px","left":"12px"}}}} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped"></figure>
<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
