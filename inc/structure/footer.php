<?php
/**
 * Functions and template tags used in theme footer
 */

if ( ! function_exists( 'icon_get_footer' ) ) {
	/**
	 * Get Icon Footer.
	 *
	 * @param string $footer footer.
	 */
	function icon_get_footer( $footer = '' ) {
		$footer_style = apply_filters( 'icon_footer_style', 'v4' );

		if ( ! empty( $footer ) ) {
			$footer_style = $footer;
		}
		get_footer( $footer_style );
	}
}