<?php
/**
 * Functions and template tags used in theme header
 */

if ( ! function_exists( 'icon_get_header' ) ) {
	/**
	 * Get Icon Header.
	 *
	 * @param string $header header.
	 */
	function icon_get_header( $header = '' ) {
		$header_style = apply_filters( 'icon_header_style', 'v4' );

		if ( ! empty( $header ) ) {
			$header_style = $header;
		}
		get_header( $header_style );
	}
}