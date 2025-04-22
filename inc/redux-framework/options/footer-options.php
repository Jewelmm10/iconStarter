<?php 
/**
 * Footer theme options.
 * 
 */
$footer_options = apply_filters( 'jawad_options_sections_args', [
	'title'			=> esc_html__( 'Footer', 'jawad' ),
	'icon'			=> 'fab fa-facebook-f',
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
            'title'     => esc_html__( 'Footer Address Block', 'jawad' ),
            'id'        => 'footer_contact_start',
            'type'      => 'section',
            'indent'    => true,
        ],
        [
            'title'     => esc_html__( 'Show Footer Address Area', 'jawad' ),
            'id'        => 'footer_address_enable',            
            'type'      => 'switch',
            'default'   => 1,
        ],
        [
            'title'     => esc_html__( 'Address section title', 'jawad' ),
            'id'        => 'address_sec_title',
            'type'      => 'text',
            'default'   => esc_html__( 'STAY CONNECTED', 'jawad' ),
            'required'  => [ 'footer_address_enable', 'equals', 1 ],
        ],
        [
            'title'     => esc_html__( 'Footer Description (Version #2)', 'jawad' ),
            'id'        => 'footer_details',
            'type'      => 'editor',
            'default'   => 'We provide innovative solutions to elevate businesses, driving success through cutting-edge technology and exceptional service.',
            'required'  => [ 'footer_address_enable', 'equals', 1 ],
        ],
        [
            'title'     => esc_html__( 'Footer address', 'jawad' ),
            'id'        => 'footer_address',
            'type'      => 'editor',
            'default'   => 'Niketon ,Gulshan - 1, Dhaka 1212 , Dhaka, Bangladesh',
            'required'  => [ 'footer_address_enable', 'equals', 1 ],
        ],
        [
            'title'     => esc_html__( 'Footer number', 'jawad' ),
            'id'        => 'footer_number',
            'type'      => 'text',
            'default'   => '+88019XXXXXXXX',
            'required'  => [ 'footer_address_enable', 'equals', 1 ],
        ],
        [
            'title'     => esc_html__( 'Schedule', 'jawad' ),
            'id'        => 'footer_schedule',
            'type'      => 'text',
            'default'   => 'Sat-Thus 10am-6pm',
            'required'  => [ 'footer_address_enable', 'equals', 1 ],
        ],
        [
            'title'     => esc_html__( 'Footer email address', 'jawad' ),
            'id'        => 'footer_email',
            'type'      => 'text',
            'default'   => 'demo@gmail.com',
            'required'  => [ 'footer_address_enable', 'equals', 1 ],
        ],    
          
        [
            'id'     => 'footer_contact_end',
            'type'   => 'section',
            'indent' => false,
        ],
        [
            'title'     => esc_html__( 'Footer Media Widgets', 'jawad' ),
            'subtitle'  => esc_html__( 'The Footer Media Widgets is available in Footer v1.', 'jawad' ),
            'id'        => 'footer_media_start',
            'type'      => 'section',
            'indent'    => true,
        ],
        [
            'title'     => esc_html__( 'Footer Media Title #1', 'jawad' ),
            'id'        => 'footer_media_title1',
            'type'      => 'text', 
            'default'   => esc_html__( 'We accept your payment', 'jawad' ),
        ],  
        [
            'title'     => esc_html__( 'Footer media upload', 'jawad' ),
            'subtitle'  => esc_html__( 'Upload media', 'jawad' ),
            'id'        => 'footer_media1',
            'type'      => 'media',
        ],
        [
            'title'     => esc_html__( 'Footer Media Title #2', 'jawad' ),
            'id'        => 'footer_media_title2',
            'type'      => 'text', 
            'default'   => esc_html__( 'Shipping partner', 'jawad' ),
        ],  
        [
            'title'     => esc_html__( 'Footer media 2 upload', 'jawad' ),
            'subtitle'  => esc_html__( 'Upload media', 'jawad' ),
            'id'        => 'footer_media2',
            'type'      => 'media',
        ],
        [
            'id'     => 'footer_media_end',
            'type'   => 'section',
            'indent' => false,
        ],  
        [
            'title'     => esc_html__( 'Footer Logo', 'jawad' ),
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
            'id'     => 'footer_bottom_end',
            'type'   => 'section',
            'indent' => false,
        ],  
        [
            'id'        => 'footer_social_start',
            'type'      => 'section',
            'indent'    => true,
            'title'     => esc_html__( 'Footer Social Media', 'jawad' ),
        ],
        [
            'id'        => 'footer_social_enable',
            'type'      => 'switch',
            'title'     => esc_html__( 'Show Footer Social Media', 'jawad' ),
            'default'   => 1,            
        ],
        [
            'id'        => 'footer_social_media',
            'type'      => 'sortable',
            'title'     => 'Social Icons (Footer v1)',
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
            'required'  => [ 'footer_social_enable', 'equals', 1 ],
        ],  
        [
            'id'     => 'footer_social_end',
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