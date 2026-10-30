<?php
/**
 * Community links: one place for every URL the theme prints.
 *
 * Child themes or plugins can change any of them with the `wpcdmx_community_links` filter.
 *
 * @package wpcdmx-theme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Return every community link, keyed by purpose.
 *
 * @return array<string, string>
 */
function wpcdmx_community_links() {
	$links = array(
		'meetup'    => 'https://www.meetup.com/wordpress-mexico/',
		'youtube'   => 'https://www.youtube.com/@WPCDMX',
		'instagram' => 'https://www.instagram.com/wordpress_mx',
		'facebook'  => 'https://www.facebook.com/groups/wordpresscdmx',
		'events'    => wpcdmx_events_url(),
		'about'     => home_url( '/sobre-nosotros/' ),
		'speaker'   => home_url( '/ser-ponente/' ),
		'sponsors'  => home_url( '/patrocinadores/' ),
		'conduct'   => home_url( '/codigo-de-conducta/' ),
		'blog'      => home_url( '/blog/' ),
		'gallery'   => home_url( '/galeria/' ),
		'repo'      => 'https://github.com/jcgodinez/wpcdmx-theme',
	);

	return apply_filters( 'wpcdmx_community_links', $links );
}

/**
 * Return a single community link.
 *
 * @param string $key Link key from wpcdmx_community_links().
 * @return string URL, or '#' when the key is unknown.
 */
function wpcdmx_link( $key ) {
	$links = wpcdmx_community_links();

	return isset( $links[ $key ] ) ? $links[ $key ] : '#';
}

/**
 * Events page URL: the GatherPress archive when the plugin is active, else /eventos/.
 *
 * @return string
 */
function wpcdmx_events_url() {
	if ( post_type_exists( 'gatherpress_event' ) ) {
		$archive = get_post_type_archive_link( 'gatherpress_event' );
		if ( $archive ) {
			return $archive;
		}
	}

	return home_url( '/eventos/' );
}

/**
 * Social networks shown in the footer, the mobile menu and the channels pattern.
 *
 * Icons are simple stroke drawings in the theme's style, not the platforms' logos.
 *
 * @return array<int, array<string, string>>
 */
function wpcdmx_social_networks() {
	return array(
		array(
			'key'   => 'meetup',
			'name'  => 'Meetup',
			'color' => 'turquesa',
			'ink'   => '#ffffff',
			'icon'  => '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 10h18"/>',
		),
		array(
			'key'   => 'youtube',
			'name'  => 'YouTube',
			'color' => 'rojo',
			'ink'   => '#ffffff',
			'icon'  => '<rect x="2" y="5" width="20" height="14" rx="4"/><path d="M10 9l5 3-5 3z"/>',
		),
		array(
			'key'   => 'instagram',
			'name'  => 'Instagram',
			'color' => 'amarillo',
			'ink'   => '#32373c',
			'icon'  => '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.5"/>',
		),
		array(
			'key'   => 'facebook',
			'name'  => 'Facebook',
			'color' => 'verde',
			'ink'   => '#ffffff',
			'icon'  => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c.8-3.5 3.4-5.5 6.5-5.5s5.7 2 6.5 5.5"/><path d="M16 5.2a3.2 3.2 0 0 1 0 6M18.5 14.8c1.6.8 2.6 2.6 3 5.2"/>',
		),
	);
}

/**
 * Inline SVG for a social network icon.
 *
 * @param array  $network Network from wpcdmx_social_networks().
 * @param string $stroke  Stroke color.
 * @param int    $size    Size in px.
 * @return string
 */
function wpcdmx_social_icon( $network, $stroke, $size = 24 ) {
	return sprintf(
		'<svg aria-hidden="true" focusable="false" width="%1$d" height="%1$d" viewBox="0 0 24 24" fill="none" stroke="%2$s" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">%3$s</svg>',
		(int) $size,
		esc_attr( $stroke ),
		$network['icon'] // Static markup defined above.
	);
}

/**
 * Round icon links for the footer (light strokes on grafito).
 *
 * @return string
 */
function wpcdmx_social_links_markup() {
	$html = '<ul class="wpcdmx-social" aria-label="' . esc_attr__( 'Redes sociales de WordPress CDMX', 'wpcdmx-theme' ) . '">';
	foreach ( wpcdmx_social_networks() as $network ) {
		$html .= sprintf(
			'<li><a href="%1$s" aria-label="%2$s">%3$s</a></li>',
			esc_url( wpcdmx_link( $network['key'] ) ),
			/* translators: %s: social network name. */
			esc_attr( sprintf( __( 'WordPress CDMX en %s', 'wpcdmx-theme' ), $network['name'] ) ),
			wpcdmx_social_icon( $network, '#ffffff', 20 )
		);
	}
	return $html . '</ul>';
}
