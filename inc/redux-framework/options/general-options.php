<?php 
/**
 * General theme options.
 * 
 */
$general_options = apply_filters( 'jawad_options_sections_args', [
	'title'			=> esc_html__( 'General', 'jawad' ),
	'icon'			=> 'far fa-dot-circle',
	'fields'		=> [
		[
			'title' 	=> __('Favicon', 'jawad'),
			'subtitle' 	=> __('<em>Upload your custom Favicon image. <br>.ico or .png file required.</em>', 'jawad'),
			'id' 		=> 'favicon',
			'type' 		=> 'media',
			'default' 	=> [
				'url' 	=> get_template_directory_uri() . '/images/favicon.png',
			],
		],
		[
			'title'		=> esc_html__( 'Upload logo', 'jawad' ),
			'subtitle'	=> esc_html__( 'Upload your site header logo image', 'jawad' ),
			'id'		=> 'logo',
			'type'		=> 'media'
		],
		[
			'title'		=> esc_html__( 'Select Default breadcrumb image', 'jawad' ),
			'id'		=> 'breadcrumb_img',
			'type'		=> 'media'
		],		
		[
			'title' 	=> __('Scroll to Top', 'jawad'),
			'id' 		=> 'scroll_to_top',
			'on' 		=> __('Enabled', 'jawad'),
			'off' 		=> __('Disabled', 'jawad'),
			'type' 		=> 'switch',
			'default' 	=> 1,
		],
	]
] );