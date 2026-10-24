<?php
/**
 * Community links: one place for every external URL the theme prints.
 *
 * Values set to '#' are placeholders still waiting for the real WordPress CDMX URL.
 * Child themes or plugins can override any of them with the `wpcdmx_community_links` filter.
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
		'meetup'          => '#',
		'events'          => '#',
		'events_past'     => '#',
		'events_calendar' => '#',
		'youtube'         => '#',
		'instagram'       => '#',
		'linkedin'        => '#',
		'tiktok'          => '#',
		'speaker'         => home_url( '/ser-ponente/' ),
		'sponsors'        => home_url( '/patrocinadores/' ),
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
