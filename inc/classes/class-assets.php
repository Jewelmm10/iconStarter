<?php

namespace ICON_STARTER\Inc;

/**
 * Assets handler class
 */
class ASSETS {     

    /**
     * Class constructor
     */
    public function __construct() {

        add_action( 'wp_enqueue_scripts', [ $this, 'register_assets' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'admin_assets' ] );
    }

    /**
     * All available styles
     * 
     * @return array
     */
    public function get_styles() {
        return [            
            'slick-theme' => [
                'src'     => ICON_STARTER_ASSETS . '/css/slick-theme.css',
                'version' => filemtime( ICON_STARTER_PATH . '/assets/css/slick-theme.css' ),
                'deps'    => [ ],
            ],
            'slick' => [
                'src'     => ICON_STARTER_ASSETS . '/css/slick.css',
                'version' => filemtime( ICON_STARTER_PATH . '/assets/css/slick.css' ),
                'deps'    => [ ],
            ], 
            'lightbox' => [
                'src'     => ICON_STARTER_ASSETS . '/css/lightbox.min.css',
                'version' => filemtime( ICON_STARTER_PATH . '/assets/css/lightbox.min.css' ),
                'deps'    => [ ],
            ],  
            'mainStyle' => [
                'src'     => ICON_STARTER_ASSETS . '/css/style.css',
                'version' => filemtime( ICON_STARTER_PATH . '/assets/css/style.css' ),
                'deps'    => [ ],
            ],            
            'style' => [
                'src'     => ICON_STARTER_URL . '/style.css',
                'version' => filemtime( ICON_STARTER_PATH . '/style.css' ),
            ],

            // admin
            'admin' => [
                'src'     => ICON_STARTER_ASSETS . '/css/admin.css',
                'version' => filemtime( ICON_STARTER_PATH . '/assets/css/admin.css' ),
            ],
        ];
    }

    /**
     * All available scripts
     * 
     * @return array
     */
    public function get_scripts() {
        return [             
            'lightbox' => [
                'src'     => ICON_STARTER_ASSETS . '/js/lightbox.min.js',
                'version' => filemtime( ICON_STARTER_PATH . '/assets/js/lightbox.min.js' ),
                'deps'    => [ 'jquery' ]
            ],               
            'slick' => [
                'src'     => ICON_STARTER_ASSETS . '/js/slick.min.js',
                'version' => filemtime( ICON_STARTER_PATH . '/assets/js/slick.min.js' ),
                'deps'    => [ 'jquery' ]
            ],
            'script' => [
                'src'     => ICON_STARTER_ASSETS . '/js/script.js',
                'version' => filemtime( ICON_STARTER_PATH . '/assets/js/script.js' ),
                'deps'    => [ 'jquery' ]
            ],

            // admin
            'admin' => [
                'src'     => ICON_STARTER_ASSETS . '/js/admin.js',
                'version' => filemtime( ICON_STARTER_PATH . '/assets/js/admin.js' ),
                'deps'    => [ 'jquery' ]
            ],
                        
        ];
    }

    /**
     * Register styles and scripts
     * 
     * @return void
     */
    public function register_assets() {
        $styles  = $this->get_styles();
        $scripts = $this->get_scripts();

        foreach ( $styles as $handle => $style ) {
            $deps = isset( $style['deps'] ) ? $style['deps'] : false;

            wp_register_style( $handle, $style['src'], $deps, $style['version'] );
        }
        foreach ( $scripts as $handle => $script ) {
            $deps = isset( $script['deps'] ) ? $script['deps'] : false;

            wp_register_script( $handle, $script['src'], $deps, $script['version'], true );
        }
        // Threaded comment reply styles.
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }

        //enqueue style
        wp_enqueue_style('slick-theme');
        wp_enqueue_style('slick');
        wp_enqueue_style('lightbox');
        wp_enqueue_style('style');
        wp_enqueue_style('mainStyle');
        //enqueue script
        wp_enqueue_script('lightbox');
        wp_enqueue_script('slick');
        wp_enqueue_script('script');

        $mugdho_options = apply_filters( 'mugdho_localize_script_data', 
            [
                'ajaxurl'               => admin_url( 'admin-ajax.php' ),
                // 'ajax_loader_url'       => get_template_directory_uri() . '/images/ajax-loader.gif',
            ] 
        );

        //wp_localize_script( 'script', 'mugdho_options', $mugdho_options );
    }

    /**
     * Admin styles and scripts
     * 
     * @return void
     */
    public function admin_assets() {
        $styles  = $this->get_styles();
        $scripts = $this->get_scripts();

        foreach ( $styles as $handle => $style ) {
            $deps = isset( $style['deps'] ) ? $style['deps'] : false;

            wp_register_style( $handle, $style['src'], $deps, $style['version'] );
        }
        foreach ( $scripts as $handle => $script ) {
            $deps = isset( $script['deps'] ) ? $script['deps'] : false;

            wp_register_script( $handle, $script['src'], $deps, $script['version'], true );
        }

        //enqueue script
        wp_enqueue_style('admin');
        wp_enqueue_script('admin');
        wp_enqueue_media();

    }

}