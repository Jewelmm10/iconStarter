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
                'v3' => 'Header v3'
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
        	'title'		=> esc_html__( 'Call us icon', 'jawad' ),
        	'subtitle'	=> esc_html__( 'Use font Awesome 5 free', 'jawad'),
        	'id'		=> 'header_call_us_icon',
        	'type'		=> 'text',
        	'default'	=> 'fas fa-phone-alt',
        ],
        [
        	'title'		=> esc_html__( 'Call us number', 'jawad' ),
        	'id'		=> 'header_call_us_number',
        	'type'		=> 'text',
        	'default'	=> '+8801XXXXXXXXX',
        ],
        [
            'id'     => 'masthead_end',
            'type'   => 'section',
            'indent' => false,
        ],
		
	]
] );