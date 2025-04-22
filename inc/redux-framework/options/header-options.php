<?php 
/**
 * Header theme options.
 * 
 */
$header_options = apply_filters( 'iconstarter_options_sections_args', [
	'title'			=> esc_html__( 'Header', 'iconstarter' ),
	'icon'			=> 'fas fa-hospital-symbol',
	'fields'		=> [
        [
        	'title'		=> esc_html__( 'Header Style', 'iconstarter' ),
            'subtitle'  => esc_html__( 'Select the header style.', 'iconstarter' ),
        	'id'		=> 'header_style',
        	'type'		=> 'select',
            'options'   => array(
                'v1' => 'Header v1',
                'v2' => 'Header v2',
                'v3' => 'Header v3',
                'v4' => 'Header v4'
            ),
        	'default'	=> 'v2',
        ],	
		[
            'title'     => esc_html__( 'Top Bar', 'iconstarter' ),
            'id'        => 'top_bar_start',
            'type'      => 'section',
            'indent'    => true,
        ],
        [
            'id'        => 'header_top_bar_show',
            'title'     => esc_html__( 'Show Top Bar', 'iconstarter' ),
            'type'      => 'switch',
            'default'   => 1,
        ],
        [
            'id'        => 'header_top_bar_show_mobile',
            'title'     => esc_html__( 'Show Top Bar in Mobile', 'iconstarter' ),
            'type'      => 'switch',
            'default'   => 0,
        ],	
        [
        	'title'		=> esc_html__( 'Top header Text (Header v1)', 'iconstarter' ),
        	'id'		=> 'top_bar_text',
        	'type'		=> 'editor',
            'args'   => array(
                'media_buttons'    => false,
            ),
        	'default'	=> 'Need help? Contact us: demo@gmail.com',
        ],
        [
            'id'        => 'top_social_icons',
            'type'      => 'sortable',
            'title'     => 'Social Icons (Header v1)',
            'subtitle'  => 'Enter your social network urls',       
            'options'  => [
                'ri-facebook-fill'    => 'https://www.facebook.com/',
                'ri-twitter-fill'     => 'https://x.com/',
                'ri-instagram-line'   => 'https://www.instagram.com/',
                'ri-linkedin-box-fill'=> 'https://www.linkedin.com/',
                'ri-github-fill'      => 'https://github.com/',
                'ri-youtube-fill'     => 'https://www.youtube.com/',
                'ri-pinterest-line'   => 'https://www.pinterest.com/',
            ], 
            'default'  => [
                'ri-facebook-fill'    => 'https://www.facebook.com/demo',
                'ri-twitter-fill'     => 'https://x.com/demo',
                'ri-instagram-line'   => '',
                'ri-linkedin-box-fill'=> '',
                'ri-github-fill'      => '',
                'ri-youtube-fill'     => '',
                'ri-pinterest-line'   => '',
            ],         
            
        ],            
        [
		    'id'     => 'top_bar_end',
		    'type'   => 'section',
		    'indent' => false,
		],
		[
            'title'     => esc_html__( 'Masthead', 'iconstarter' ),
            'id'        => 'masthead_start',
            'type'      => 'section',
            'indent'    => true
        ],
        [
            'title'     => esc_html__( 'Show Searchbar', 'iconstarter' ),
            'id'        => 'searchbar_enable',
            'type'      => 'switch',
            'default'   => 1,
        ],
        [
        	'title'		=> esc_html__( 'Searchbar Text', 'iconstarter' ),
        	'id'		=> 'searchbar_text',
        	'type'		=> 'text',
        	'default'	=> 'Search by title, author, tag',
            'required' => [
                'searchbar_enable', 'equals', 1
            ],
        ],
        [
            'title'     => esc_html__( 'Show Header Call Us section', 'iconstarter' ),
            'id'        => 'header_call_us_enable',
            'type'      => 'switch',
            'default'   => 1,
        ],
        [
        	'title'		=> esc_html__( 'Call us number', 'iconstarter' ),
        	'id'		=> 'header_call_us_number',
        	'type'		=> 'text',
        	'default'	=> '+8801XXXXXXXXX',
            'required' => [
                'header_call_us_enable', 'equals', 1
            ],
        ],
        [
        	'title'		=> esc_html__( 'Call us text', 'iconstarter' ),
        	'id'		=> 'header_call_text',
        	'type'		=> 'text',
        	'default'	=> 'Call Us Now',
            'required' => [
                'header_call_us_enable', 'equals', 1
            ],
        ],
        [
            'title'     => esc_html__( 'Show Header My Account', 'iconstarter' ),
            'id'        => 'header_account_enable',
            'type'      => 'switch',
            'default'   => 1,
        ],
        [
            'id'     => 'masthead_end',
            'type'   => 'section',
            'indent' => false,
        ],
		
	]
] );