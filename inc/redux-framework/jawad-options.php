<?php 
/**
 * Redux option 
 */
if ( ! class_exists( 'Redux' ) ) {
	return;
}

if ( ! class_exists('jawad_Options' ) ) {
	
	/**
	 * Theme options class. 
	 */
	class jawad_Options  {
			
		public function __construct() {
			add_action( 'after_setup_theme', [$this, 'loading_config' ] );
		}

		public function loading_config() {

			$options 		= array( 'general', 'header', 'blog', 'footer', 'social' );
			$options_dir 	= get_template_directory() . '/inc/redux-framework/options';
			foreach ( $options as $option ) {
				$options_file = $option . '-options.php';
				require_once $options_dir . '/' . $options_file;
			}

			$sections  	= apply_filters( 'jawad_options_sections_args', [ $general_options, $header_options, $blog_options, $footer_options, $social_options ] );
			$theme 		= wp_get_theme();
			
			$opt_name 	= 'jawad_options';
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

	new jawad_Options();
}

if( ! array_key_exists( 'jawad_options' , $GLOBALS ) ) {
	$GLOBALS['jawad_options'] = get_option( 'jawad_options', array() );
}