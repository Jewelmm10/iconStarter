<?php 
/**
 * Blog options.
 * 
 */
$blog_options = apply_filters( 'jawad_options_sections_args', [
	'title'			=> esc_html__( 'Blog', 'jawad' ),
	'icon'			=> 'far fa-list-alt',
	'fields'		=> [
		[
			'title'    => __( 'Blog Page Title', 'jawad' ),
			'id'       => 'blog_page_text',
			'type'     => 'text',
		],
		[
			'title' 	=> __('Blog sidebar', 'jawad'),
			'subtitle' 	=> __('<em>Select blog sidebar to show over right or left side or hide.</em>', 'jawad'),
			'id' 		=> 'blog_sidebar',
			'type' 		=> 'button_set',
			'options'   => [
                'left' 		 => __( 'Left', 'jawad' ),
                'right' 	 => __( 'Right', 'jawad' ),
				'no_sidebar' => __( 'No Sidebar', 'jawad' ),
            ],
            'default'   => 'right'
		],
		[
			'title' 	=> __('Single Post Layout', 'jawad'),
			'subtitle' 	=> __('<em>Select the layout for the Single Post.</em>', 'jawad'),
			'id' 		=> 'single_sidebar',
			'type' 		=> 'button_set',
			'options'   => [
                'left' 		 => __( 'Left', 'jawad' ),
                'right' 	 => __( 'Right', 'jawad' ),
				'no_sidebar' => __( 'No Sidebar', 'jawad' ),
            ],
            'default'   => 'right'
		],
		[
			'title' 	=> __('Blog Post Author Info', 'jawad'),
			'id' 		=> 'blog_author',
			'type' 		=> 'switch',
            'default'   => 1
		],
	]
] );