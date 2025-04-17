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

        if ( isset( $theme_Options['icon'] ) ) {
            $socials = $theme_Options['icon'];
        }        
        return $theme_Options;
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
            $header_style = $theme_Options['header_style'];
        }
        return $header_style;
    }
}
/**
 * Display header call us icon
 */
if ( ! function_exists( 'rx_apply_header_call_us_icon' ) ) {
    function rx_apply_header_call_us_icon( $text ) {
        global $theme_Options;

        if ( isset( $theme_Options['header_call_us_icon'] ) ) {
            $text = $theme_Options['header_call_us_icon'];
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
 * Display signle page sidebar
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
 * Display footer contact 
 */
if ( ! function_exists( 'rx_apply_footer_contact_switch') ) {
    function rx_apply_footer_contact_switch( $enable ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_contact_enable'] ) ) {
            $enable = $theme_Options['footer_contact_enable'];
        }

        return $enable;
    }
}

/**
 * Display footer call us 
 */
if ( ! function_exists( 'rx_apply_footer_call_us_icon') ) {
    function rx_apply_footer_call_us_icon( $icon ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_call_us_icon'] ) ) {
            $icon = $theme_Options['footer_call_us_icon'];
        }

        return $icon;
    }
}

if ( ! function_exists( 'rx_apply_footer_call_us_number') ) {
    function rx_apply_footer_call_us_number( $number ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_call_us_number'] ) ) {
            $number = $theme_Options['footer_call_us_number'];
        }

        return $number;
    }
}

if ( ! function_exists( 'rx_apply_footer_call_us_text') ) {
    function rx_apply_footer_call_us_text( $text ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_call_us_text'] ) ) {
            $text = $theme_Options['footer_call_us_text'];
        }

        return $text;
    }
}

/**
 * Display footer email 
 */
if ( ! function_exists( 'rx_apply_footer_email_icon') ) {
    function rx_apply_footer_email_icon( $icon ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_email_icon'] ) ) {
            $icon = $theme_Options['footer_email_icon'];
        }

        return $icon;
    }
}

if ( ! function_exists( 'rx_apply_footer_email') ) {
    function rx_apply_footer_email( $email ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_email'] ) ) {
            $email = $theme_Options['footer_email'];
        }

        return $email;
    }
}

if ( ! function_exists( 'rx_apply_footer_email_text') ) {
    function rx_apply_footer_email_text( $text ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_email_text'] ) ) {
            $text = $theme_Options['footer_email_text'];
        }

        return $text;
    }
}

/**
 * Display footer address
 */
if ( ! function_exists( 'rx_apply_footer_address_icon') ) {
    function rx_apply_footer_address_icon( $icon ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_address_icon'] ) ) {
            $icon = $theme_Options['footer_address_icon'];
        }

        return $icon;
    }
}

if ( ! function_exists( 'rx_apply_footer_address') ) {
    function rx_apply_footer_address( $address ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_address'] ) ) {
            $address = $theme_Options['footer_address'];
        }

        return $address;
    }
}

if ( ! function_exists( 'rx_apply_footer_address_text') ) {
    function rx_apply_footer_address_text( $text ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_address_text'] ) ) {
            $text = $theme_Options['footer_address_text'];
        }

        return $text;
    }
}

/**
 * Display footer logo
 */
if ( ! function_exists( 'rx_apply_footer_logo_switch') ) {
    function rx_apply_footer_logo_switch( $enable ) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_logo_enable'] ) ) {
            $enable = $theme_Options['footer_logo_enable'];
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

            $logo = '<img src="' . $theme_Options['footer_logo']['url'] . '" class="footer_logo" alt="Mohammad-Jewel">';           
        }

        return $logo;
    }
}

/**
 * Display footer logo
 */
if ( ! function_exists( 'rx_apply_footer_description') ) {
    function rx_apply_footer_description( $description ) {
        global $theme_Options;
        if ( isset( $theme_Options['f_desc'] ) ) {
            $description = $theme_Options['f_desc'];           
        }

        return $description;
    }
}

/**
 * Display footer social
 */
if ( ! function_exists( 'rx_footer_social_icons_switch' ) ) {
    function rx_footer_social_icons_switch($enable) {
        global $theme_Options;
        if ( isset( $theme_Options['show_footer_social_icons'] ) ) {
            $enable = $theme_Options['show_footer_social_icons'];
        }
        return $enable;
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
if ( ! function_exists( 'rx_footer_credit' ) ) {
    function rx_footer_credit($text) {
        global $theme_Options;
        if ( isset( $theme_Options['footer_credit'] ) ) {
            $text = $theme_Options['footer_credit'];
        }
        return $text;
    }
}

/**
 * Display social share icons
 */
if ( ! function_exists( 'rx_apply_social_networks' ) ) {
    function rx_apply_social_networks( $social_icons ) {
        global $theme_Options;

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
            if( ! empty( $theme_Options[$key] ) ) {
                $social_icons[$key]['link'] = $theme_Options[$key];
            }
        }      

        return $social_icons;
    }
}