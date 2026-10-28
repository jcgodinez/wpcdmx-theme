<?php
/**
 * Title: Colaboradores del sitio
 * Slug: wpcdmx-theme/colaboradores
 * Categories: wpcdmx-paginas
 * Description: Crédito a las personas que construyen el sitio, con invitación a colaborar en GitHub.
 *
 * @package wpcdmx-theme
 */

$wpcdmx_colaboradores = array(
	array( 'Julio César Godínez', __( 'Coordinación del proyecto y tema', 'wpcdmx-theme' ), 'https://github.com/jcgodinez' ),
	array( 'WordPress Granada', __( 'Tema original wpgranada26, base de este sitio', 'wpcdmx-theme' ), 'https://github.com/WPGranada/wpgranada26' ),
);
?>
<!-- wp:group {"className":"wpcdmx-colaboradores","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-colaboradores">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Hecho por la comunidad', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Este sitio lo construyen voluntarios de WordPress CDMX. El código está abierto en GitHub y cualquiera puede tomar una tarea.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","minimumColumnWidth":"220px"}} -->
<div class="wp-block-group">
<?php foreach ( $wpcdmx_colaboradores as $wpcdmx_c ) : ?>
<!-- wp:group {"className":"wpcdmx-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"4px"},"border":{"left":{"color":"var:preset|color|turquesa","width":"4px"}}},"backgroundColor":"blanco","layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-card has-blanco-background-color has-background" style="border-left-color:var(--wp--preset--color--turquesa);border-left-width:4px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-weight:700"><a href="<?php echo esc_url( $wpcdmx_c[2] ); ?>"><?php echo esc_html( $wpcdmx_c[0] ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"tinta-suave","fontSize":"small"} -->
<p class="has-tinta-suave-color has-text-color has-small-font-size"><?php echo esc_html( $wpcdmx_c[1] ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( wpcdmx_link( 'repo' ) ); ?>"><?php esc_html_e( 'Colabora en GitHub', 'wpcdmx-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
