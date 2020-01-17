<?php
/**
 * Custom hooks
 *
 * @package teamtees
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'teamtees_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function teamtees_site_info() {
		do_action( 'teamtees_site_info' );
	}
}

if ( ! function_exists( 'teamtees_add_site_info' ) ) {
	add_action( 'teamtees_site_info', 'teamtees_add_site_info' );

	/**
	 * Add site info content.
	 */
	function teamtees_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( 'http://wordpress.org/', 'teamtees' ) ),
			sprintf(
				/* translators:*/
				esc_html__( 'Proudly powered by %s', 'teamtees' ),
				'WordPress'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Theme: %1$s by %2$s.', 'teamtees' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'http://teamtees.com', 'teamtees' ) ) . '">teamtees.com</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Version: %1$s', 'teamtees' ),
				$the_theme->get( 'Version' )
			)
		);

		echo apply_filters( 'teamtees_site_info_content', $site_info ); // WPCS: XSS ok.
	}
}
