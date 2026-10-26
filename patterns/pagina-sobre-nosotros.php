<?php
/**
 * Title: Página: Sobre nosotros
 * Slug: wpcdmx-theme/pagina-sobre-nosotros
 * Categories: wpcdmx-paginas
 * Block Types: core/post-content
 * Post Types: page
 * Description: Contenido inicial de la página Sobre nosotros.
 *
 * @package wpcdmx-theme
 */

$wpcdmx_actividades = array(
	array( 'turquesa', __( 'Meetups', 'wpcdmx-theme' ), __( 'Charlas presenciales y en línea sobre diseño, desarrollo, seguridad, SEO y negocio con WordPress.', 'wpcdmx-theme' ) ),
	array( 'amarillo', __( 'Talleres prácticos', 'wpcdmx-theme' ), __( 'Sesiones con la computadora abierta en las que construimos algo real de principio a fin.', 'wpcdmx-theme' ) ),
	array( 'verde', __( 'WordPress Day CDMX', 'wpcdmx-theme' ), __( 'Nuestro evento anual: un día completo de charlas, networking y comunidad.', 'wpcdmx-theme' ) ),
	array( 'rojo', __( 'Networking', 'wpcdmx-theme' ), __( 'Conoce a otras personas de tu sector y encuentra colaboradores, clientes o mentores.', 'wpcdmx-theme' ) ),
);
?>
<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'WordPress CDMX es la comunidad local de WordPress en la Ciudad de México. Nos reunimos para aprender haciendo: cada meetup deja algo que puedes aplicar al día siguiente en tus proyectos.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Vienen personas que están armando su primer sitio, freelancers que atienden a varios clientes, agencias, diseñadores y quienes desarrollan temas y plugins. La entrada es gratuita y abierta a cualquier persona que use WordPress o tenga curiosidad por empezar.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Qué hacemos', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","minimumColumnWidth":"240px"}} -->
<div class="wp-block-group">
<?php foreach ( $wpcdmx_actividades as $wpcdmx_actividad ) : ?>
<?php $wpcdmx_c = esc_attr( $wpcdmx_actividad[0] ); ?>
<!-- wp:group {"className":"wpcdmx-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"blanco","layout":{"type":"default"}} -->
<div class="wp-block-group wpcdmx-card has-blanco-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
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

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Parte de la comunidad de WordPress', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'El grupo forma parte del programa de meetups de WordPress.org. Lo organizan voluntarios y no tiene fines de lucro: nadie cobra por dar una charla ni por asistir. En Meetup somos más de 2,500 miembros y llevamos más de cien eventos.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php
printf(
	/* translators: %s: link to the code of conduct page. */
	esc_html__( 'Todos los eventos siguen nuestro %s.', 'wpcdmx-theme' ),
	'<a href="' . esc_url( wpcdmx_link( 'conduct' ) ) . '">' . esc_html__( 'código de conducta', 'wpcdmx-theme' ) . '</a>'
);
?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Cómo sumarte', 'wpcdmx-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Únete al grupo en Meetup para recibir el aviso de cada evento y registrarte. Si quieres ayudar a organizar, dar una charla o apoyar con un espacio, escríbenos.', 'wpcdmx-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( wpcdmx_link( 'meetup' ) ); ?>"><?php esc_html_e( 'Únete en Meetup', 'wpcdmx-theme' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( wpcdmx_link( 'speaker' ) ); ?>"><?php esc_html_e( 'Propón una charla', 'wpcdmx-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
