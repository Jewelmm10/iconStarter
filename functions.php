<?php
/**
 * icon_starter engine room
 *
 * @package icon_starter
 */

require_once __DIR__ . '/inc/helpers/autoloader.php';
require_once __DIR__ . '/inc/init.php';

/**
 * The main theme class
 */
final class icon_starter {

    /**
     * Class constructor
     */
    private function __construct() {
        $this->define_constants();

        // Initialize theme setup
        add_action( 'after_setup_theme', [ $this, 'init_theme' ] );
    }

    /**
     * Initializes a singleton instance
     *
     * @return \icon_starter
     */
    public static function init() {
        static $instance = false;

        if ( ! $instance ) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * Define the required theme constants
     *
     * @return void
     */
    public function define_constants() {
        
        define( 'ICON_STARTER_FILE', __FILE__ );
        define( 'ICON_STARTER_PATH', __DIR__ );
        define( 'ICON_STARTER_URL', get_template_directory_uri() );
        define( 'ICON_STARTER_ASSETS', ICON_STARTER_URL . '/assets' );
    }

    /**
     * Initialize the theme
     *
     * @return void
     */
    public function init_theme() {
        // Initialize the theme class here, ensuring early execution
        
        new ICON_STARTER\Inc\THEME();
        new ICON_STARTER\Inc\ASSETS();
        new ICON_STARTER\Inc\Elementor\ELEMENTORADDONS();
    }
}

/**
 * Initializes the main theme
 *
 * @return \icon_starter
 */
function icon_starter() {
    return icon_starter::init();
}

// Kick-off the theme
icon_starter();