<?php
/**
 * Title: Cifras de la comunidad
 * Slug: wpcdmx-theme/cifras
 * Categories: wpcdmx
 * Description: Tres cifras del grupo en Meetup sobre franja blanca.
 *
 * @package wpcdmx-theme
 */

$wpcdmx_cifras = array(
	array( '2,594', __( 'miembros en Meetup', 'wpcdmx-theme' ), 'turquesa' ),
	array( '117', __( 'eventos realizados', 'wpcdmx-theme' ), 'rojo' ),
	array( '4.8', __( 'de calificación, con 551 opiniones', 'wpcdmx-theme' ), 'verde' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|linea","width":"1px"},"bottom":{"color":"var:preset|color|linea","width":"1px"}}},"backgroundColor":"blanco","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-blanco-background-color has-background" style="border-top-color:var(--wp--preset--color--linea);border-top-width:1px;border-bottom-color:var(--wp--preset--color--linea);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","minimumColumnWidth":"220px"}} -->
<div class="wp-block-group">
<?php foreach ( $wpcdmx_cifras as $wpcdmx_cifra ) : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","lineHeight":"1.1","fontSize":"clamp(44px, 5vw, 56px)"}},"textColor":"<?php echo esc_attr( $wpcdmx_cifra[2] ); ?>"} -->
<p class="has-<?php echo esc_attr( $wpcdmx_cifra[2] ); ?>-color has-text-color" style="font-size:clamp(44px, 5vw, 56px);font-weight:700;line-height:1.1"><?php echo esc_html( $wpcdmx_cifra[0] ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"textColor":"tinta-suave"} -->
<p class="has-tinta-suave-color has-text-color"><?php echo esc_html( $wpcdmx_cifra[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
