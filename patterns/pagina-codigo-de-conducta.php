<?php
/**
 * Title: Página: Código de conducta
 * Slug: wpcdmx-theme/pagina-codigo-de-conducta
 * Categories: wpcdmx-paginas
 * Block Types: core/post-content
 * Post Types: page
 * Description: Código de conducta adaptado de la plantilla para meetups de WordPress.org.
 *
 * @package wpcdmx-theme
 */

$wpcdmx_secciones = array(
	array(
		__( 'Propósito', 'wpcdmx-theme' ),
		array(
			__( 'WordPress CDMX quiere que cada evento sea un espacio seguro y amable para todas las personas, sin importar su género, orientación sexual, discapacidad, origen, apariencia, edad, religión o nivel de experiencia con WordPress.', 'wpcdmx-theme' ),
		),
	),
	array(
		__( 'Lo que esperamos de todos', 'wpcdmx-theme' ),
		array(
			__( 'Trata a las demás personas con respeto, también cuando no estés de acuerdo.', 'wpcdmx-theme' ),
			__( 'Cuida tu lenguaje y tus bromas: lo que a ti te parece inofensivo puede excluir a alguien.', 'wpcdmx-theme' ),
			__( 'Si ves que alguien está en problemas o se siente incómodo, avisa a un organizador.', 'wpcdmx-theme' ),
			__( 'Respeta las reglas del lugar que nos recibe.', 'wpcdmx-theme' ),
		),
	),
	array(
		__( 'Lo que no aceptamos', 'wpcdmx-theme' ),
		array(
			__( 'Acoso, intimidación o comentarios ofensivos sobre cualquiera de las características mencionadas arriba.', 'wpcdmx-theme' ),
			__( 'Contacto físico o atención sexual que la otra persona no quiere.', 'wpcdmx-theme' ),
			__( 'Fotografiar o grabar a alguien que pidió no aparecer.', 'wpcdmx-theme' ),
			__( 'Interrumpir charlas de forma constante o intencional.', 'wpcdmx-theme' ),
			__( 'Amenazas, violencia o incitar a otros a cualquiera de estas conductas.', 'wpcdmx-theme' ),
		),
	),
	array(
		__( 'Qué pasa si alguien no lo cumple', 'wpcdmx-theme' ),
		array(
			__( 'A quien se le pida detener una conducta inaceptable debe hacerlo de inmediato. Las personas que organizan pueden tomar la medida que consideren adecuada, incluida la expulsión del evento o del grupo sin previo aviso. Esto aplica a asistentes, ponentes, patrocinadores, voluntarios y organizadores.', 'wpcdmx-theme' ),
		),
	),
	array(
		__( 'Cómo reportar', 'wpcdmx-theme' ),
		array(
			__( 'Si viviste o viste una conducta inaceptable, busca a cualquier persona del equipo organizador lo antes posible, durante o después del evento. Si pasó en línea, escríbenos por Meetup. Tratamos cada reporte con discreción y, si lo necesitas, te ayudamos a contactar a la seguridad del lugar o a las autoridades y a sentirte a salvo.', 'wpcdmx-theme' ),
		),
	),
	array(
		__( 'Alcance', 'wpcdmx-theme' ),
		array(
			__( 'Este código aplica en los meetups, talleres, el WordPress Day CDMX, las reuniones sociales relacionadas y los espacios en línea de la comunidad: el grupo de Meetup, las redes sociales y las transmisiones.', 'wpcdmx-theme' ),
		),
	),
);
?>
<?php foreach ( $wpcdmx_secciones as $wpcdmx_seccion ) : ?>
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( $wpcdmx_seccion[0] ); ?></h2>
<!-- /wp:heading -->
<?php if ( count( $wpcdmx_seccion[1] ) > 1 ) : ?>
<!-- wp:list -->
<ul class="wp-block-list"><?php foreach ( $wpcdmx_seccion[1] as $wpcdmx_item ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $wpcdmx_item ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list -->
<?php else : ?>
<!-- wp:paragraph -->
<p><?php echo esc_html( $wpcdmx_seccion[1][0] ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?>
<?php endforeach; ?>

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( wpcdmx_link( 'meetup' ) ); ?>"><?php esc_html_e( 'Contacta a los organizadores', 'wpcdmx-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"textColor":"tinta-suave","fontSize":"small"} -->
<p class="has-tinta-suave-color has-text-color has-small-font-size"><?php
printf(
	/* translators: %s: link to the WordPress.org meetup code of conduct. */
	esc_html__( 'Adaptado de la %s, publicada bajo licencia Creative Commons Atribución-CompartirIgual.', 'wpcdmx-theme' ),
	'<a href="https://make.wordpress.org/community/handbook/meetup-organizer/resources/code-of-conduct/">' . esc_html__( 'plantilla de código de conducta para meetups de WordPress.org', 'wpcdmx-theme' ) . '</a>'
);
?></p>
<!-- /wp:paragraph -->
