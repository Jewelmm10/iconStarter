<?php 
/**
 * The theme class
 *
 * @package icon_starter
 **/
namespace ICON_STARTER\Inc;

class THEME {
	
	/**
	 * Class constructor 
	 */
	public function __construct() {
		//load class
		$this->setup_hooks(); 
	}


	/**
	 *  Hooks for general setup and extra functions
	 *
	 * @return void
	 */
	public function setup_hooks() {
		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'icon_starter_theme' ] );
		add_action( 'widgets_init',[ $this, 'widgets_init' ] );
	}

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @return void
	 */
	public function icon_starter_theme() {
		
		// Add theme support for title-tag
		add_theme_support( 'title-tag' );
	
		// Add post formats support
		add_theme_support( 
			'post-formats', 
			[  
				'gallery', 
				'quote', 
				'aside', 
			] 
		);
	
		// Post thumbnails support
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'featured-thumbnail', 255, 168, true );
		add_image_size( 'home-thumb', 600, 620, true );
		add_image_size( 'medium-thumbnail', 344, 227, true );
	
		// Custom logo support
		add_theme_support( 
			'custom-logo', 
			[
				'header-text' => ['site-title', 'site-description'],
				'height'       => 100,
				'width'        => 400,
				'flex-height'  => true,
				'flex-width'   => true,
			] 
		);
	
		// HTML5 support
		add_theme_support(
			'html5',
			[
				'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style'
			]
		);
	
		// Load theme text domain
		load_theme_textdomain( 'icon_starter', ICON_STARTER_URL . '/languages' );
	
		// Custom editor styles
		add_editor_style( 'assets/css/editor.css' );


		// Register Nav Menus
		$nav_menus = array(
			'primary'     =>  __( 'Header Menu', 'iconStarter' ),
			'use_link'    =>  __( 'Useful Link', 'iconStarter' ),
		);
		register_nav_menus( $nav_menus );
	}

	/**
	 * Register widgets.
	 *
	 * @return void
	 */
	public function widgets_init() {
		register_sidebar( array(
            'name'          => esc_html__( 'Sidebar Default', 'iconstarter' ),
            'id'            => 'default-sidebar',
            'description'   => esc_html__( 'Add widgets here to appear in your Sidebar.', 'iconstarter' ),
            'before_widget' => '<aside class="widget">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="section-title"><span>',
            'after_title'   => '</span></h4>',
        ) );
		
		
		
	}
	
}