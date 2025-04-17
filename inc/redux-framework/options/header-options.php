<?php 
/**
 * Header theme options.
 * 
 */
$header_options = apply_filters( 'jawad_options_sections_args', [
	'title'			=> esc_html__( 'Header', 'jawad' ),
	'icon'			=> 'far fa-arrow-alt-circle-up',
	'fields'		=> [
		[
            'title'     => esc_html__( 'Top Bar', 'jawad' ),
            'id'        => 'top_bar_start',
            'type'      => 'section',
            'indent'    => true,
        ],
        [
            'id'        => 'header_top_bar_show',
            'title'     => esc_html__( 'Show Top Bar', 'jawad' ),
            'type'      => 'switch',
            'default'   => 1,
        ],
        [
            'id'        => 'header_top_bar_show_mobile',
            'title'     => esc_html__( 'Show Top Bar in Mobile', 'jawad' ),
            'type'      => 'switch',
            'default'   => 0,
        ],	
        [
        	'title'		=> esc_html__( 'Top header Text', 'iconstarter' ),
        	'id'		=> 'top_bar_text',
        	'type'		=> 'editor',
            'args'   => array(
                'media_buttons'    => false,
            ),
        	'default'	=> 'Need help? Contact us: demo@gmail.com',
        ],
        [
            'id'        => 'top_social_icons',
            'type'      => 'repeater',
            'title'     => 'Social Icons',
            'subtitle'  => 'Add and reorder your social icons with URLs.',
            'sortable'  => true, 
            'fields'    => [
                [
                    'id'       => 'label',
                    'type'     => 'text',
                    'title'    => 'Label',
                    'placeholder' => 'e.g. Facebook',
                ],
                [
                    'id'       => 'icon',
                    'type'     => 'select',
                    'title'    => 'Choose Icon',
                    'options'  => [
                        'ri-facebook-fill'    => 'Facebook',
                        'ri-twitter-fill'     => 'Twitter',
                        'ri-instagram-line'   => 'Instagram',
                        'ri-linkedin-box-fill'=> 'LinkedIn',
                        'ri-github-fill'      => 'GitHub',
                        'ri-youtube-fill'     => 'YouTube',
                        'ri-pinterest-line'   => 'Pinterest',
                    ],
                    'default' => 'ri-facebook-fill',
                ],                
                [
                    'id'       => 'url',
                    'type'     => 'text',
                    'title'    => 'URL',
                    'placeholder' => 'e.g. https://facebook.com/yourpage',
                ],
            ],
        ],            
        [
		    'id'     => 'top_bar_end',
		    'type'   => 'section',
		    'indent' => false,
		],
		[
            'title'     => esc_html__( 'Masthead', 'jawad' ),
            'id'        => 'masthead_start',
            'type'      => 'section',
            'indent'    => true
        ],
        [
        	'title'		=> esc_html__( 'Header Style', 'jawad' ),
            'subtitle'  => esc_html__( 'Select the header style.', 'jawad' ),
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
            'title'     => esc_html__( 'Show Header Call Us section', 'jawad' ),
            'id'        => 'header_call_us_enable',
            'type'      => 'switch',
            'default'   => 1,
        ],
        [
        	'title'		=> esc_html__( 'Call us number', 'jawad' ),
        	'id'		=> 'header_call_us_number',
        	'type'		=> 'text',
        	'default'	=> '+8801XXXXXXXXX',
        ],
        [
        	'title'		=> esc_html__( 'Call us text', 'jawad' ),
        	'id'		=> 'header_call_text',
        	'type'		=> 'text',
        	'default'	=> 'Call Us Now',
        ],
        [
            'title'     => esc_html__( 'Show Header My Account', 'jawad' ),
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