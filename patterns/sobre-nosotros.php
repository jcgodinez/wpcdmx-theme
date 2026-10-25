<?php
/**
 * Title: ¿Qué es WordPress CDMX?
 * Slug: wpcdmx-theme/sobre-nosotros
 * Categories: wpcdmx, about
 * Description: Presentación de la comunidad con cuatro actividades.
 *
 * @package wpcdmx-theme
 */

$wpcdmx_actividades = array(
	array( 'turquesa', __( 'Meetups', 'wpcdmx-theme' ), __( 'Charlas presenciales y en línea sobre diseño, desarrollo, seguridad, SEO y negocio con WordPress.', 'wpcdmx-theme' ) ),
	array( 'amarillo', __( 'Talleres prácticos', 'wpcdmx-theme' ), __( 'Sesiones con la computadora abierta: construimos algo real de principio a fin.', 'wpcdmx-theme' ) ),
	array( 'verde', __( 'WordPress Day CDMX', 'wpcdmx-theme' ), __( 'Nuestro evento anual: un día completo de charlas, networking y comunidad.', 'wpcdmx-theme' ) ),
	array( 'rojo', __( 'Networking', 'wpcdmx-theme' ), __( 'Conoce a otras personas de tu sector y encuentra colaboradores, clientes o mentores.', 'wpcdmx-theme' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"blanco","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-blanco-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50","top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns">
<!-- wp:column {"width":"38%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:38%">
<!-- wp:paragraph {"className":"wpcdmx-etiqueta"} -->
<p class="wpcdmx-etiqueta"><?php esc_html_e( 'Sobre nosotros', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( '¿Qué es WordPress CDMX?', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Somos la comunidad local de WordPress en la Ciudad de México. Aquí se encuentran personas que empiezan con su primer sitio y quienes desarrollan temas y plugins a la medida. Todos aprendemos de todos.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500"><a href="<?php echo esc_url( wpcdmx_link( 'about' ) ); ?>"><?php esc_html_e( 'Conoce a la comunidad', 'wpcdmx-theme' ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","minimumColumnWidth":"240px"}} -->
<div class="wp-block-group">
<?php foreach ( $wpcdmx_actividades as $wpcdmx_actividad ) : ?>
<!-- wp:group {"className":"wpcdmx-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"crema","layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-card has-crema-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
<?php $wpcdmx_c = esc_attr( $wpcdmx_actividad[0] ); ?>
<!-- wp:group {"className":"wpcdmx-barra","backgroundColor":"<?php echo $wpcdmx_c; // phpcs:ignore ?>","layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-barra has-<?php echo $wpcdmx_c; // phpcs:ignore ?>-background-color has-background"></div>
<!-- /wp:group -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $wpcdmx_actividad[1] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"tinta-suave"} -->
<p class="has-tinta-suave-color has-text-color"><?php echo esc_html( $wpcdmx_actividad[2] ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
