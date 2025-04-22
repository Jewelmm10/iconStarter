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
add_filter( 'icon_enabled_header_call_section',             'rx_apply_header_call_us_switch',   10 );
add_filter( 'icon_enable_searchbar_switch',                 'rx_apply_searchbar_switch',        10 );
add_filter( 'icon_searchbar_text',                          'rx_apply_searchbar_text',          10 );
add_filter( 'icon_header_style',                            'rx_apply_header_style',            10 );
add_filter( 'jawad_call_us_icon',                           'rx_apply_header_call_us_icon',     10 );
add_filter( 'icon_header_call_text',                        'rx_apply_header_call_text',        10 );
add_filter( 'icon_header_call_us_number',                   'rx_apply_header_call_us_number',   10 );
add_filter( 'icon_top_bar_text',                            'rx_apply_top_bar_text',            10 );
add_filter( 'icon_top_social_icons',                        'rx_apply_top_social_icons',        10 );
add_filter( 'icon_header_account_enable',                   'rx_apply_header_account_switch',   10 );

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


//footer media
add_filter( 'icon_footer_media1',                            'rx_apply_footer_media1',           10 );
add_filter( 'icon_footer_media_text1',                       'rx_footer_media_text1',            10 );
add_filter( 'icon_footer_media2',                            'rx_apply_footer_media2',           10 );
add_filter( 'icon_footer_media_text2',                       'rx_footer_media_text2',            10 );
add_filter( 'icon_address_sec_title',                       'rx_apply_address_sec_title',            10 );
add_filter( 'icon_footer_details',                       'rx_apply_footer_details',            10 );
add_filter( 'icon_footer_address',                       'rx_apply_footer_address',            10 );
add_filter( 'icon_footer_number',                       'rx_apply_footer_number',            10 );
add_filter( 'icon_footer_schedule',                       'rx_apply_footer_schedule',            10 );
add_filter( 'icon_footer_email',                       'rx_apply_footer_email',            10 );
add_filter( 'icon_footer_social',                       'rx_apply_footer_social',            10 );
add_filter( 'icon_footer_credit',                       'rx_apply_footer_credit',            10 );



add_filter( 'icon_footer_logo',                             'rx_apply_footer_logo_switch',    10 );
add_filter( 'icon_footer_logo_html',                        'rx_apply_footer_logo',           10 );