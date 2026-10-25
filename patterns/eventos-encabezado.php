<?php
/**
 * Title: Encabezado de Eventos
 * Slug: wpcdmx-theme/eventos-encabezado
 * Categories: wpcdmx-eventos, banner
 * Description: Franja turquesa con los rayos de la D para la página de eventos.
 *
 * @package wpcdmx-theme
 */

?>
<!-- wp:group {"align":"full","className":"wpcdmx-rayos","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"turquesa","textColor":"blanco","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull wpcdmx-rayos has-blanco-color has-turquesa-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:heading {"level":1,"textColor":"blanco","fontSize":"gigantic"} -->
<h1 class="wp-block-heading has-blanco-color has-text-color has-gigantic-font-size"><?php esc_html_e( 'Eventos', 'wpcdmx-theme' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"layout":{"selfStretch":"fit"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="font-weight:500"><?php esc_html_e( 'Meetups, talleres y el WordPress Day CDMX. Todos son gratuitos y abiertos a cualquier nivel.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
