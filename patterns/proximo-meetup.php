<?php
/**
 * Title: Próximo meetup
 * Slug: wpcdmx-theme/proximo-meetup
 * Categories: wpcdmx, wpcdmx-eventos
 * Description: El siguiente evento de GatherPress en una tarjeta destacada. Si no hay ninguno, invita a unirse al grupo.
 *
 * @package wpcdmx-theme
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"wpcdmx-etiqueta"} -->
<p class="wpcdmx-etiqueta"><?php esc_html_e( 'Próximo meetup', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Reserva la fecha', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<?php require get_theme_file_path( 'inc/partials/evento-destacado-query.php' ); ?>
</div>
<!-- /wp:group -->
