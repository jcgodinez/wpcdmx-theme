<?php
/**
 * WordPress CDMX - Theme functions
 *
 * @package wpcdmx-theme
 */

defined( 'ABSPATH' ) || exit;

require_once get_template_directory() . '/inc/community-links.php';
require_once get_template_directory() . '/inc/events.php';

add_action( 'after_setup_theme', 'wpcdmx_setup' );
/**
 * Theme setup.
 *
 * @return void
 */
function wpcdmx_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
	load_theme_textdomain( 'wpcdmx-theme', get_template_directory() . '/languages' );
}

add_action( 'init', 'wpcdmx_register_pattern_categories', 9 );
/**
 * Register the theme's pattern categories.
 *
 * @return void
 */
function wpcdmx_register_pattern_categories() {
	register_block_pattern_category(
		'wpcdmx',
		array( 'label' => __( 'WordPress CDMX', 'wpcdmx-theme' ) )
	);
	register_block_pattern_category(
		'wpcdmx-eventos',
		array( 'label' => __( 'WordPress CDMX: eventos', 'wpcdmx-theme' ) )
	);
	register_block_pattern_category(
		'wpcdmx-paginas',
		array( 'label' => __( 'WordPress CDMX: páginas', 'wpcdmx-theme' ) )
	);
}

add_action( 'wp_enqueue_scripts', 'wpcdmx_enqueue_styles' );
/**
 * Enqueue the theme stylesheet.
 *
 * @return void
 */
function wpcdmx_enqueue_styles() {
	wp_enqueue_style(
		'wpcdmx-theme',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}

add_action( 'wp_head', 'wpcdmx_favicon_fallback', 5 );
/**
 * Use the CDMX icon as favicon until a Site Icon is set in the Site Editor.
 *
 * @return void
 */
function wpcdmx_favicon_fallback() {
	if ( has_site_icon() ) {
		return;
	}
	printf(
		'<link rel="icon" href="%s" type="image/svg+xml">' . "\n",
		esc_url( get_theme_file_uri( 'assets/images/icono-wpcdmx.svg' ) )
	);
}
