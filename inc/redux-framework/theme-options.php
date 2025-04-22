<?php 
/**
 * Redux option 
 */

if ( ! class_exists( 'Redux' ) ) {
	return;
}

if ( ! class_exists('Theme_Options' ) ) {
	
	/**
	 * Theme options class. 
	 */
	class Theme_Options  {
			
		public function __construct() {
			add_action( 'after_setup_theme', [$this, 'loading_config' ] );
		}

		public function loading_config() {

			$options 		= array( 'general', 'header', 'footer', 'blog' );
			$options_dir 	= get_template_directory() . '/inc/redux-framework/options';
			foreach ( $options as $option ) {
				$options_file = $option . '-options.php';
				require_once $options_dir . '/' . $options_file;
			}

			$sections  	= apply_filters( 'Theme_Options_sections_args', [ $general_options, $header_options, $footer_options, $blog_options ] );
			$theme 		= wp_get_theme();
			
			$opt_name 	= 'theme_Options';
			$args = [
				'opt_name'			=> $opt_name,
				'display_name'		=> $theme->get( 'Name' ),
				'display_version'	=> $theme->get( 'Version' ),
				'allow_sub_menu'	=> true,
				'menu_title'		=> esc_html__( 'Theme Options', 'jawad' ),
				'page_priority'		=> 5,
				'page_slug'			=> 'theme_options',
				'intro_text'		=> '',
				'dev_mode'			=> false,
				'customizer'		=> true,
				'footer_credit'		=> '&nbsp',
			];

			Redux::set_args( $opt_name, $args );
			Redux::set_sections( $opt_name, $sections );
			Redux::disable_demo();

		}
	}	

	new Theme_Options();
}

if( ! array_key_exists( 'Theme_Options' , $GLOBALS ) ) {
	$GLOBALS['Theme_Options'] = get_option( 'Theme_Options', array() );
}