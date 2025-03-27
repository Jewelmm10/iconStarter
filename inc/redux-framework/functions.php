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
        global $jawad_options;

        $favicon_url = $jawad_options['favicon']['url'];

        return $favicon_url;
    }
}

/**
 * Logo upload
 */
if ( ! function_exists( 'rx_apply_logo' ) ) {
    function rx_apply_logo( $logo ) {
        global $jawad_options;

        if ( ! empty( $jawad_options['logo']['url'] ) ) {            
            $logo = '<img alt="Mohammad-Jewel" src="' . $jawad_options['logo']['url'] . '"/>';           
        }       

        return $logo;
    }
}

/**
 * Logo upload
 */
if ( ! function_exists( 'rx_apply_breadcrumb_img' ) ) {
    function rx_apply_breadcrumb_img( $breadcrumb_img ) {
        global $jawad_options;

        if ( ! empty( $jawad_options['breadcrumb_img']['url'] ) ) {            
            $breadcrumb_img = 'style="background-image:url(' . $jawad_options['breadcrumb_img']['url'] .')"';           
        }       

        return $breadcrumb_img;
    }
}

/**
 * Enable scroll to top
 */
if( ! function_exists( 'rx_toggle_scroll_switch' ) ) {
    
    function rx_toggle_scroll_switch( $enable ) {
        global $jawad_options;
        
        if( isset( $jawad_options['scroll_to_top'] ) ) {
            $enable = $jawad_options['scroll_to_top'];
        }

        return $enable;
    }
}

/**
 * Display header call us
 */
if ( ! function_exists('rx_apply_header_call_us_switch' ) ) {
    function rx_apply_header_call_us_switch( $enable ){
       global $jawad_options;
 
       if ( isset( $jawad_options['header_call_us_enable'] ) ) {
           $enable = $jawad_options['header_call_us_enable'];
       }

       return $enable;
    }
}

/**
 * Display header call us
 */
if ( ! function_exists('rx_apply_header_style' ) ) {
    function rx_apply_header_style( $text ){
       global $jawad_options;
 
       if ( isset( $jawad_options['header_style'] ) ) {
            $header_style = $jawad_options['header_style'];
        }
        return $header_style;
    }
}
/**
 * Display header call us icon
 */
if ( ! function_exists( 'rx_apply_header_call_us_icon' ) ) {
    function rx_apply_header_call_us_icon( $text ) {
        global $jawad_options;

        if ( isset( $jawad_options['header_call_us_icon'] ) ) {
            $text = $jawad_options['header_call_us_icon'];
        }

        return $text;
    }
}

/**
 * Display header call us number
 */
if ( ! function_exists( 'rx_apply_header_call_us_number' ) ) {
    function rx_apply_header_call_us_number( $number ) {
        global $jawad_options;

        if ( isset( $jawad_options['header_call_us_number'] ) ) {
            $number = $jawad_options['header_call_us_number'];
        }

        return $number;
    }
}

/**
 * Display blog page title
 */
if ( ! function_exists( 'rx_apply_blog_page_title' ) ) {
    function rx_apply_blog_page_title( $text ) {
        global $jawad_options;
        
        if ( isset( $jawad_options['blog_page_text'] ) ) {
            $text = $jawad_options['blog_page_text'];
        }

        return $text;
    }
}

/**
 * Display blog sidebar
 */
if ( ! function_exists( 'rx_apply_blog_sidebar' ) ) {
    function rx_apply_blog_sidebar( $sidebar ) {
        global $jawad_options;

        if ( isset( $jawad_options['blog_sidebar'] ) ) {
            $sidebar = $jawad_options['blog_sidebar'];
        }

        return $sidebar;
    }
}

/**
 * Display signle page sidebar
 */
if ( ! function_exists( 'rx_apply_single_post_layout' ) ) {
    function rx_apply_single_post_layout( $sidebar ) {
        global $jawad_options;

        if ( isset( $jawad_options['single_sidebar'] ) ) {
            $sidebar = $jawad_options['single_sidebar'];
        }

        return $sidebar;
    }
}

/**
 * Display author boi in signle page
 */
if ( ! function_exists( 'rx_apply_author_toggle' ) ) {
    function rx_apply_author_toggle( $author ) {
        global $jawad_options;

        if ( isset( $jawad_options['blog_author'] ) ) {
            $author = $jawad_options['blog_author'];
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
        global $jawad_options;
  
        if ( isset( $jawad_options['footer_style'] ) ) {
             $footer_style = $jawad_options['footer_style'];
         }
         return $footer_style;
     }
}
/**
 * Display footer contact 
 */
if ( ! function_exists( 'rx_apply_footer_contact_switch') ) {
    function rx_apply_footer_contact_switch( $enable ) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_contact_enable'] ) ) {
            $enable = $jawad_options['footer_contact_enable'];
        }

        return $enable;
    }
}

/**
 * Display footer call us 
 */
if ( ! function_exists( 'rx_apply_footer_call_us_icon') ) {
    function rx_apply_footer_call_us_icon( $icon ) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_call_us_icon'] ) ) {
            $icon = $jawad_options['footer_call_us_icon'];
        }

        return $icon;
    }
}

if ( ! function_exists( 'rx_apply_footer_call_us_number') ) {
    function rx_apply_footer_call_us_number( $number ) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_call_us_number'] ) ) {
            $number = $jawad_options['footer_call_us_number'];
        }

        return $number;
    }
}

if ( ! function_exists( 'rx_apply_footer_call_us_text') ) {
    function rx_apply_footer_call_us_text( $text ) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_call_us_text'] ) ) {
            $text = $jawad_options['footer_call_us_text'];
        }

        return $text;
    }
}

/**
 * Display footer email 
 */
if ( ! function_exists( 'rx_apply_footer_email_icon') ) {
    function rx_apply_footer_email_icon( $icon ) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_email_icon'] ) ) {
            $icon = $jawad_options['footer_email_icon'];
        }

        return $icon;
    }
}

if ( ! function_exists( 'rx_apply_footer_email') ) {
    function rx_apply_footer_email( $email ) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_email'] ) ) {
            $email = $jawad_options['footer_email'];
        }

        return $email;
    }
}

if ( ! function_exists( 'rx_apply_footer_email_text') ) {
    function rx_apply_footer_email_text( $text ) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_email_text'] ) ) {
            $text = $jawad_options['footer_email_text'];
        }

        return $text;
    }
}

/**
 * Display footer address
 */
if ( ! function_exists( 'rx_apply_footer_address_icon') ) {
    function rx_apply_footer_address_icon( $icon ) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_address_icon'] ) ) {
            $icon = $jawad_options['footer_address_icon'];
        }

        return $icon;
    }
}

if ( ! function_exists( 'rx_apply_footer_address') ) {
    function rx_apply_footer_address( $address ) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_address'] ) ) {
            $address = $jawad_options['footer_address'];
        }

        return $address;
    }
}

if ( ! function_exists( 'rx_apply_footer_address_text') ) {
    function rx_apply_footer_address_text( $text ) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_address_text'] ) ) {
            $text = $jawad_options['footer_address_text'];
        }

        return $text;
    }
}

/**
 * Display footer logo
 */
if ( ! function_exists( 'rx_apply_footer_logo_switch') ) {
    function rx_apply_footer_logo_switch( $enable ) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_logo_enable'] ) ) {
            $enable = $jawad_options['footer_logo_enable'];
        }

        return $enable;
    }
}

/**
 * Display footer logo
 */
if ( ! function_exists( 'rx_apply_footer_logo') ) {
    function rx_apply_footer_logo( $logo ) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_logo']['url'] ) ) {

            $logo = '<img src="' . $jawad_options['footer_logo']['url'] . '" class="footer_logo" alt="Mohammad-Jewel">';           
        }

        return $logo;
    }
}

/**
 * Display footer logo
 */
if ( ! function_exists( 'rx_apply_footer_description') ) {
    function rx_apply_footer_description( $description ) {
        global $jawad_options;
        if ( isset( $jawad_options['f_desc'] ) ) {
            $description = $jawad_options['f_desc'];           
        }

        return $description;
    }
}

/**
 * Display footer social
 */
if ( ! function_exists( 'rx_footer_social_icons_switch' ) ) {
    function rx_footer_social_icons_switch($enable) {
        global $jawad_options;
        if ( isset( $jawad_options['show_footer_social_icons'] ) ) {
            $enable = $jawad_options['show_footer_social_icons'];
        }
        return $enable;
    }
}

/**
 * Display footer credit block
 */
if ( ! function_exists( 'rx_footer_credit_switch' ) ) {
    function rx_footer_credit_switch($enable) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_credit_block_enable'] ) ) {
            $enable = $jawad_options['footer_credit_block_enable'];
        }
        return $enable;
    }
}

/**
 * Display footer credit block
 */
if ( ! function_exists( 'rx_footer_credit' ) ) {
    function rx_footer_credit($text) {
        global $jawad_options;
        if ( isset( $jawad_options['footer_credit'] ) ) {
            $text = $jawad_options['footer_credit'];
        }
        return $text;
    }
}

/**
 * Display social share icons
 */
if ( ! function_exists( 'rx_apply_social_networks' ) ) {
    function rx_apply_social_networks( $social_icons ) {
        global $jawad_options;

        $social_icons = array(
            'fb_link'      => array(
                'icon'      => 'fab fa-facebook',
                'id'        => 'linkedin_link',
            ),
            'twitter_link'      => array(
                'icon'      => 'fab fa-twitter',
                'id'        => 'linkedin_link',
            ),
            'linkedin_link'      => array(
                'icon'      => 'fab fa-linkedin',
                'id'        => 'linkedin_link',
            ),
            'github_link'      => array(
                'icon'      => 'fab fa-github',
                'id'        => 'linkedin_link',
            ),
            'pinterest_link'      => array(
                'icon'      => 'fab fa-pinterest',
                'id'        => 'linkedin_link',
            ),
              
            'share_fb'      => array(
                'icon'      => 'fab fa-facebook',
                'id'        => 'facebook_link',
            ),
            'share_twitter'       => array(
                'icon'      => 'fab fa-twitter',
                'id'        => 'twitter_link',
            ),
            'share_linkedin'      => array(
                'icon'      => 'fab fa-linkedin',
                'id'        => 'linkedin_link',
            ), 
            'share_pinterest'     => array(
                'icon'      => 'fab fa-pinterest',
                'id'        => 'pinterest_link',
            ),
                     
       
        );
       
        foreach( $social_icons as $key => $social_icon ) {
            if( ! empty( $jawad_options[$key] ) ) {
                $social_icons[$key]['link'] = $jawad_options[$key];
            }
        }      

        return $social_icons;
    }
}