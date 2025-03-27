<?php 
add_action( 'redux/page/jawad_options/enqueue',              'redux_queue_font_awesome'  );
//add_action( 'wp_head',                                       'jawad_site_favicon'        );


/**
 * Header options
 */
add_filter( 'jawad_site_favicon', 							'rx_apply_favicon',		            10 );
add_filter( 'jawad_display_logo',                           'rx_apply_logo',                    10 );
add_filter( 'jawad_page_breadcrumb_img',                    'rx_apply_breadcrumb_img',          10 );
add_filter( 'jawad_is_enabled_scroll_top',                  'rx_toggle_scroll_switch',          10 );
add_filter( 'jawad_is_enabled_header_call_section',         'rx_apply_header_call_us_switch',   10 );
add_filter( 'icon_header_style',                            'rx_apply_header_style',            10 );
add_filter( 'jawad_call_us_icon',                           'rx_apply_header_call_us_icon',     10 );
add_filter( 'jawad_call_us_number',                         'rx_apply_header_call_us_number',   10 );

/**
 * Blog options
 */
add_filter( 'jawad_blog_page_title',                        'rx_apply_blog_page_title',         10 );
add_filter( 'jawad_blog_layout',                            'rx_apply_blog_sidebar',            10 );
add_filter( 'jawad_single_post_layout',                     'rx_apply_single_post_layout',      10 );
add_filter( 'jawad_author_boi',                             'rx_apply_author_toggle',           10 );


/**
 * Footer options
 */
add_filter( 'icon_footer_style',                             'rx_apply_footer_style',          10 );
add_filter( 'jawad_enable_footer_contact',                   'rx_apply_footer_contact_switch', 10 );

add_filter( 'jawad_footer_call_us_icon',                     'rx_apply_footer_call_us_icon',   10 );
add_filter( 'jawad_footer_call_us_number',                   'rx_apply_footer_call_us_number', 10 );
add_filter( 'jawad_footer_call_us_desc',                     'rx_apply_footer_call_us_text',   10 );
add_filter( 'jawad_footer_email_icon',                       'rx_apply_footer_email_icon',     10 );
add_filter( 'jawad_footer_email',                            'rx_apply_footer_email',          10 );
add_filter( 'jawad_footer_email_text',                       'rx_apply_footer_email_text',     10 );
add_filter( 'jawad_footer_address_icon',                     'rx_apply_footer_address_icon',   10 );
add_filter( 'jawad_footer_address',                          'rx_apply_footer_address',        10 );
add_filter( 'jawad_footer_address_text',                     'rx_apply_footer_address_text',   10 );

add_filter( 'jawad_footer_logo',                             'rx_apply_footer_logo_switch',    10 );
add_filter( 'jawad_footer_logo_html',                        'rx_apply_footer_logo',           10 );
add_filter( 'jawad_footer_description',                      'rx_apply_footer_description',    10 );
add_filter( 'jawad_footer_social_icons',                     'rx_footer_social_icons_switch',  10 );
add_filter( 'jawad_footer_credit',                           'rx_footer_credit_switch',        10 );
add_filter( 'jawad_footer_credit_text',                      'rx_footer_credit',               10 );

add_action( 'jawad_footer_contact',                          'jawad_footer_call',              10 );
add_action( 'jawad_footer_contact',                          'jawad_footer_email',             20 );
add_action( 'jawad_footer_contact',                          'jawad_footer_address',           20 );

add_action( 'jawad_footer_widget',                           'jawad_footer_logo',              10 );
add_action( 'jawad_footer_widget',                           'jawad_footer_description',       20 );
add_action( 'jawad_footer_widget',                           'jawad_footer_social_icons',      30 );
add_filter( 'jawad_get_share_options',                       'rx_apply_social_networks',      10 );

