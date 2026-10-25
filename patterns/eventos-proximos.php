<?php
/**
 * Title: Próximos eventos (lista)
 * Slug: wpcdmx-theme/eventos-proximos
 * Categories: wpcdmx-eventos
 * Description: Todos los eventos próximos de GatherPress como tarjetas destacadas.
 *
 * @package wpcdmx-theme
 */

$wpcdmx_per_page = 6;
$wpcdmx_query_id = 21;
?>
<!-- wp:group {"align":"full","anchor":"proximos","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div id="proximos" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Próximos eventos', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->
<?php require get_theme_file_path( 'inc/partials/evento-destacado-query.php' ); ?>
</div>
<!-- /wp:group -->
