<?php 
/**
 * Footer theme options.
 * 
 */
$footer_options = apply_filters( 'jawad_options_sections_args', [
	'title'			=> esc_html__( 'Footer', 'jawad' ),
	'icon'			=> 'far fa-arrow-alt-circle-down',
	'fields'		=> [
        [
            'title'     => esc_html__( 'Footer Style', 'jawad' ),
            'id'        => 'footer_style_start',
            'type'      => 'section',
            'indent'    => true,
        ],
        [
        	'title'		=> esc_html__( 'Select Style', 'jawad' ),
            'subtitle'  => esc_html__( 'Select the footer style.', 'jawad' ),
        	'id'		=> 'footer_style',
        	'type'		=> 'select',
            'options'   => array(
                'v1' => 'Footer v1',
                'v2' => 'Footer v2',
                'v3' => 'Footer v3'
            ),
        	'default'	=> 'v2',
        ],	
        [
            'id'     => 'footer_style_end',
            'type'   => 'section',
            'indent' => false,
        ],
		[
            'title'     => esc_html__( 'Footer Contact Block', 'jawad' ),
            'id'        => 'footer_contact_start',
            'type'      => 'section',
            'indent'    => true,
        ],
        [
            'title'     => esc_html__( 'Show Footer Contact Area', 'jawad' ),
            'id'        => 'footer_contact_enable',            
            'type'      => 'switch',
            'default'   => 1,
        ], 
        [
            'title'     => esc_html__( 'Footer call us icon', 'jawad' ),
            'subtitle'  => esc_html__( 'Remix Icon', 'jawad'),
            'id'        => 'footer_call_us_icon',
            'type'      => 'text',
            'default'   => 'phone-fill',
            'required'  => [ 'footer_contact_enable', 'equals', 1 ],
        ],
        [
            'title'     => esc_html__( 'Footer call us number', 'jawad' ),
            'id'        => 'footer_call_us_number',
            'type'      => 'text',
            'default'   => '+88019XXXXXXXX',
            'required'  => [ 'footer_contact_enable', 'equals', 1 ],
        ],
        [
            'title'     => esc_html__( 'Footer call us description', 'jawad' ),
            'id'        => 'footer_call_us_text',
            'type'      => 'text',
            'default'   => 'Sat-Thus 10am-6pm',
            'required'  => [ 'footer_contact_enable', 'equals', 1 ],
        ], 
        [
            'title'     => esc_html__( 'Footer email icon', 'jawad' ),
            'subtitle'  => esc_html__( 'Remix Icon', 'jawad'),
            'id'        => 'footer_email_icon',
            'type'      => 'text',
            'default'   => 'mail-line',
            'required'  => [ 'footer_contact_enable', 'equals', 1 ],
        ],
        [
            'title'     => esc_html__( 'Footer email address', 'jawad' ),
            'id'        => 'footer_email',
            'type'      => 'text',
            'default'   => 'demo@gmail.com',
            'required'  => [ 'footer_contact_enable', 'equals', 1 ],
        ],
        [
            'title'     => esc_html__( 'Footer email description', 'jawad' ),
            'id'        => 'footer_email_text',
            'type'      => 'text',
            'default'   => 'Online support',
            'required'  => [ 'footer_contact_enable', 'equals', 1 ],
        ],
        [
            'title'     => esc_html__( 'Footer address icon', 'jawad' ),
            'subtitle'  => esc_html__( 'Remix Icon', 'jawad'),
            'id'        => 'footer_address_icon',
            'type'      => 'text',
            'default'   => 'map-pin-line',
            'required'  => [ 'footer_contact_enable', 'equals', 1 ],
        ],
        [
            'title'     => esc_html__( 'Footer address', 'jawad' ),
            'id'        => 'footer_address',
            'type'      => 'text',
            'default'   => '11/23 Palton, Dhaka-100',
            'required'  => [ 'footer_contact_enable', 'equals', 1 ],
        ],
        [
            'title'     => esc_html__( 'Footer address description', 'jawad' ),
            'id'        => 'footer_address_text',
            'type'      => 'text',
            'default'   => ' Bangladesh',
            'required'  => [ 'footer_contact_enable', 'equals', 1 ],

        ],     
        [
            'id'     => 'footer_contact_end',
            'type'   => 'section',
            'indent' => false,
        ],
        [
            'title'     => esc_html__( 'Footer Bottom Widgets', 'jawad' ),
            'id'        => 'footer_bottom_start',
            'type'      => 'section',
            'indent'    => true,
        ],
        [
            'title'     => esc_html__( 'Show Footer logo', 'jawad' ),
            'id'        => 'footer_logo_enable',            
            'type'      => 'switch',
            'default'   => 1,
        ],  
        [
            'title'     => esc_html__( 'Footer logo', 'jawad' ),
            'subtitle'  => esc_html__( 'Upload your site footer logo', 'jawad' ),
            'id'        => 'footer_logo',
            'type'      => 'media',
            'required'  => [ 'footer_logo_enable', 'equals', 1],
        ],
        [
            'title'     => esc_html__( 'Footer Description', 'jawad' ),
            'id'        => 'f_desc',
            'type'      => 'textarea'
        ],
        [
            'id'        => 'show_footer_social_icons',
            'type'      => 'switch',
            'title'     => esc_html__( 'Show Footer Social Icons', 'jawad' ),
            'desc'      => esc_html__( 'On enabling footer social icons, please make sure to add all social URLs to theme options > Social Media', 'jawad' ),
            'default'   => 1,
        ],
        [
            'id'     => 'footer_bottom_end',
            'type'   => 'section',
            'indent' => false,
        ],  
        [
            'id'        => 'footer_credit_block_start',
            'type'      => 'section',
            'indent'    => true,
            'title'     => esc_html__( 'Footer Credit Block', 'jawad' ),
            'subtitle'  => esc_html__( 'The Footer Credit Block is available bottom of Footer.', 'jawad' ),
        ],
        [
            'id'        => 'footer_credit_block_enable',
            'type'      => 'switch',
            'title'     => esc_html__( 'Show Footer Credit Block ?', 'jawad' ),
            'default'   => 1,
        ],
        [
            'id'        => 'footer_credit',
            'type'      => 'textarea',
            'title'     => esc_html__( 'Footer Credit', 'jawad' ),
            'default'   => '&copy; <a href="' . esc_url( home_url( '/' ) ) . '">' .  get_bloginfo( 'name' ) . '</a> - All Rights Reserved',
            'required'  => [ 'footer_credit_block_enable', 'equals', 1 ],
        ],
        [
            'id'        => 'footer_credit_block_end',
            'type'      => 'section',
            'indent'    => false
        ],
        
	]
] );