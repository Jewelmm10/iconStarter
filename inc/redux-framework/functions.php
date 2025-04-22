<?php
/**
 * Redux Framework functions
 *
 * @package jawad/ReduxFramework
 */

/**
 * Enqueues font awesome for Redux Theme Options
 * 
 * @return void
 */
function redux_queue_font_awesome() {
    wp_register_style(
		'redux-font-awesome',
		get_template_directory_uri() . '/assets/css/fontawesome.min.css',
		array(),
		time(),
		'all'
    );
    wp_enqueue_style( 'redux-font-awesome' );
}

/**
 * Favicon set
 */
if ( ! function_exists( 'rx_apply_favicon' ) ) {
    function rx_apply_favicon( $favicon_url ) {
        global $theme_Options;

        $favicon_url = $theme_Options['favicon']['url'];

        return $favicon_url;
    }
}

/**
 * Logo upload
 */
if ( ! function_exists( 'rx_apply_logo' ) ) {
    function rx_apply_logo( $logo ) {
        global $theme_Options;

        if ( ! empty( $theme_Options['logo']['url'] ) ) {            
            $logo = '<img alt="Mohammad-Jewel" src="' . $theme_Options['logo']['url'] . '"/>';           
        }       

        return $logo;
    }
}

/**
 * Logo upload
 */
if ( ! function_exists( 'rx_apply_breadcrumb_img' ) ) {
    function rx_apply_breadcrumb_img( $breadcrumb_img ) {
        global $theme_Options;

        if ( ! empty( $theme_Options['breadcrumb_img']['url'] ) ) {            
            $breadcrumb_img = 'style="background-image:url(' . $theme_Options['breadcrumb_img']['url'] .')"';           
        }       

        return $breadcrumb_img;
    }
}

/**
 * Enable scroll to top
 */
if( ! function_exists( 'rx_toggle_scroll_switch' ) ) {
    
    function rx_toggle_scroll_switch( $enable ) {
        global $theme_Options;
        
        if( isset( $theme_Options['scroll_to_top'] ) ) {
            $enable = $theme_Options['scroll_to_top'];
        }

        return $enable;
    }
}
/**
 * Top header text
 */
if ( ! function_exists( 'rx_apply_top_bar_text' ) ) {
    function rx_apply_top_bar_text( $text ) {
        global $theme_Options;

        if ( isset( $theme_Options['top_bar_text'] ) ) {
            $text = $theme_Options['top_bar_text'];
        }

        return $text;
    }
}
/**
 * Top social icons
 */
if ( ! function_exists( 'rx_apply_top_social_icons' ) ) {
    function rx_apply_top_social_icons() {
        global $theme_Options;
        if ( isset( $theme_Options['top_social_icons'] ) ) {
            $social_icons = $theme_Options['top_social_icons'];
        } else {
            $social_icons = array();
        }
            
        return $social_icons;
    }
}
/**
 * Display searchbar
 */
if ( ! function_exists('rx_apply_searchbar_switch' ) ) {
    function rx_apply_searchbar_switch( $enable ){
       global $theme_Options;
 
       if ( isset( $theme_Options['searchbar_enable'] ) ) {
           $enable = $theme_Options['searchbar_enable'];
       }

       return $enable;
    }
}
/**
 * Display searchbar text
 */
if ( ! function_exists('rx_apply_searchbar_text' ) ) {
    function rx_apply_searchbar_text( $text ){
       global $theme_Options;
 
       if ( isset( $theme_Options['searchbar_text'] ) ) {
           $text = $theme_Options['searchbar_text'];
       }

       return $text;
    }
}
/**
 * Display header call us
 */
if ( ! function_exists('rx_apply_header_call_us_switch' ) ) {
    function rx_apply_header_call_us_switch( $enable ){
       global $theme_Options;
 
       if ( isset( $theme_Options['header_call_us_enable'] ) ) {
           $enable = $theme_Options['header_call_us_enable'];
       }

       return $enable;
    }
}

/**
 * Display header call us
 */
if ( ! function_exists('rx_apply_header_style' ) ) {
    function rx_apply_header_style( $text ){
       global $theme_Options;
 
       if ( isset( $theme_Options['header_style'] ) ) {
            $text = $theme_Options['header_style'];
        }
        return $text;
    }
}
/**
 * Display header call us icon
 */
if ( ! function_exists( 'rx_apply_header_call_text' ) ) {
    function rx_apply_header_call_text( $text ) {
        global $theme_Options;

        if ( isset( $theme_Options['header_call_text'] ) ) {
            $text = $theme_Options['header_call_text'];
        }

        return $text;
    }
}

/**
 * Display header call us number
 */
if ( ! function_exists( 'rx_apply_header_call_us_number' ) ) {
    function rx_apply_header_call_us_number( $number ) {
        global $theme_Options;

        if ( isset( $theme_Options['header_call_us_number'] ) ) {
            $number = $theme_Options['header_call_us_number'];
        }

        return $number;
    }
}
/**
 * Enable header account
 */
if( ! function_exists( 'rx_apply_header_account_switch' ) ) {
    
    function rx_apply_header_account_switch( $enable ) {
        global $theme_Options;
        
        if( isset( $theme_Options['header_account_enable'] ) ) {
            $enable = $theme_Options['header_account_enable'];
        }

        return $enable;
    }
}
/**
 * Display blog page title
 */
if ( ! function_exists( 'rx_apply_blog_page_title' ) ) {
    function rx_apply_blog_page_title( $text ) {
        global $theme_Options;
        
        if ( isset( $theme_Options['blog_page_text'] ) ) {
            $text = $theme_Options['blog_page_text'];
        }

        return $text;
    }
}

/**
 * Display blog sidebar
 */
if ( ! function_exists( 'rx_apply_blog_sidebar' ) ) {
    function rx_apply_blog_sidebar( $sidebar ) {
        global $theme_Options;

        if ( isset( $theme_Options['blog_sidebar'] ) ) {
            $sidebar = $theme_Options['blog_sidebar'];
        }

        return $sidebar;
    }
}

/**
 * Display single page sidebar
 */
if ( ! function_exists( 'rx_apply_single_post_layout' ) ) {
    function rx_apply_single_post_layout( $sidebar ) {
        global $theme_Options;

        if ( isset( $theme_Options['single_sidebar'] ) ) {
            $sidebar = $theme_Options['single_sidebar'];
        }

        return $sidebar;
    }
}

/**
 * Display author boi in signle page
 */
if ( ! function_exists( 'rx_apply_author_toggle' ) ) {
    function rx_apply_author_toggle( $author ) {
        global $theme_Options;

        if ( isset( $theme_Options['blog_author'] ) ) {
            $author = $theme_Options['blog_author'];
        }

        return $author;
    }
}

/**
 * ==========FOOTER SECTION===============
 */

/**
 * Display footer contact 
 */
if ( ! function_exists( 'rx_apply_footer_style') ) {
    function rx_apply_footer_style( $text ){
        global $theme_Options;
  
        if ( isset( $theme_Options['footer_style'] ) ) {
             $footer_style = $theme_Options['footer_style'];
         }
         return $footer_style;
     }
}
/**
 * Display footer address switch 
 */
if ( ! function_exists( 'rx_apply_footer_address_switch') ) {
    function rx_apply_footer_address_switch( $enable ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_address_enable'] ) ) {
            $enable = $theme_Options['footer_address_enable'];
        }

        return $enable;
    }
}

/**
 * Display footer logo
 */
if ( ! function_exists( 'rx_apply_footer_logo') ) {
    function rx_apply_footer_logo( $logo ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_logo']['url'] ) ) {

            $logo = '<img src="' . $theme_Options['footer_logo']['url'] . '" class="footer_logo">';           
        }

        return $logo;
    }
}


/**
 * Display footer media
 */
if ( ! function_exists( 'rx_apply_footer_media1') ) {
    function rx_apply_footer_media1( $media ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_media1']['url'] ) ) {

            $media = '<img src="' . $theme_Options['footer_media1']['url'] . '" class="footer_logo">';  
                     
        }

        return $media;
    }
}

if ( ! function_exists( 'rx_footer_media_text1' ) ) {
    function rx_footer_media_text1($text) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_media_title1'] ) ) {
            $text = $theme_Options['footer_media_title1'];
        }
        return $text;
    }
}
if ( ! function_exists( 'rx_apply_footer_media2') ) {
    function rx_apply_footer_media2( $media ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_media2']['url'] ) ) {

            $media = '<img src="' . $theme_Options['footer_media2']['url'] . '" class="footer_logo">';  
                     
        }

        return $media;
    }
}

if ( ! function_exists( 'rx_footer_media_text2' ) ) {
    function rx_footer_media_text2($text) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_media_title2'] ) ) {
            $text = $theme_Options['footer_media_title2'];
        }
        return $text;
    }
}

/**
 * Display footer section title
 */
if ( ! function_exists( 'rx_apply_address_sec_title') ) {
    function rx_apply_address_sec_title( $text ) {
        global $theme_Options;
        if ( isset( $theme_Options['address_sec_title'] ) ) {
            $text = $theme_Options['address_sec_title'];
        }

        return $text;
    }
}
/**
 * Display footer address
 */
if ( ! function_exists( 'rx_apply_footer_details') ) {
    function rx_apply_footer_details( $text ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_details'] ) ) {
            $text = $theme_Options['footer_details'];
        }

        return $text;
    }
}

if ( ! function_exists( 'rx_apply_footer_address') ) {
    function rx_apply_footer_address( $text ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_address'] ) ) {
            $text = $theme_Options['footer_address'];
        }

        return $text;
    }
}

if ( ! function_exists( 'rx_apply_footer_number') ) {
    function rx_apply_footer_number( $number ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_number'] ) ) {
            $number = $theme_Options['footer_number'];
        }

        return $number;
    }
}

if ( ! function_exists( 'rx_apply_footer_schedule') ) {
    function rx_apply_footer_schedule( $text ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_schedule'] ) ) {
            $text = $theme_Options['footer_schedule'];
        }

        return $text;
    }
}

/**
 * Display footer call us 
 */
if ( ! function_exists( 'rx_apply_footer_email') ) {
    function rx_apply_footer_email( $email ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_email'] ) ) {
            $email = $theme_Options['footer_email'];
        }

        return $email;
    }
}

/**
 * footer social media
 */
if ( ! function_exists( 'rx_apply_footer_social' ) ) {
    function rx_apply_footer_social() {
        global $theme_Options;
        if ( isset( $theme_Options['footer_social_media'] ) ) {
            $social_icons = $theme_Options['footer_social_media'];
        } else {
            $social_icons = array();
        }
            
        return $social_icons;
    }
}

/**
 * Display footer credit block
 */
if ( ! function_exists( 'rx_footer_credit_switch' ) ) {
    function rx_footer_credit_switch($enable) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_credit_block_enable'] ) ) {
            $enable = $theme_Options['footer_credit_block_enable'];
        }
        return $enable;
    }
}

/**
 * Display footer credit block
 */
if ( ! function_exists( 'rx_apply_footer_credit' ) ) {
    function rx_apply_footer_credit($text) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_credit'] ) ) {
            $text = $theme_Options['footer_credit'];
        }
        return $text;
    }
}