<?php
/**
 * Options available for Social Media sub menu of Theme Options
 *
 */

$social_options 	= apply_filters( 'jawad_social_media_options_args',[
	'title'     => esc_html__('Social Media', 'jawad'),
	'icon'      => 'fas fa-share-square',
	'id'		=> 'social',
	'fields'    	=> [
		[
            'title'     => esc_html__( 'Social media share buttons', 'jawad' ),
            'subtitle'	=> esc_html__( 'Enable Social media for displaying icons that share your page on social media', 'jawad' ),
            'id'        => 'social_share',
            'type'      => 'section',
            'indent'    => true,
        ],
		[
            'id'        => 'share_fb',
            'title'     => esc_html__( 'Share in facebook', 'jawad' ),
            'type'      => 'switch',
            'default'   => 1,
        ],
        [
            'id'        => 'share_twitter',
            'title'     => esc_html__( 'Share in twitter', 'jawad' ),
            'type'      => 'switch',
            'default'   => 1,
        ],
        [
            'id'        => 'share_linkedin',
            'title'     => esc_html__( 'Share in linkedin', 'jawad' ),
            'type'      => 'switch',
            'default'   => 1,
        ],
        [
            'id'        => 'share_pinterest',
            'title'     => esc_html__( 'Share in pinterest', 'jawad' ),
            'type'      => 'switch',
            'default'   => 1,
        ],
        [
            'id'        => 'social_share_end',
            'type'      => 'section',
            'indent'    => false,
        ],
        [
            'title'     => esc_html__( 'Social media links', 'jawad' ),
            'id'        => 'social_follow',
            'type'      => 'section',
            'subtitle'	=> esc_html__( 'Give complete link for your social pages and leave empty to hide.', 'jawad' ),
            'indent'    => true,
        ],
        [
			'title'     => esc_html__('Facebook', 'jawad'),
			'id'        => 'fb_link',
			'type'      => 'text',
			'icon'      => 'fab fa-facebook',
		],
		[
			'title'     => esc_html__('Twitter', 'jawad'),
			'id'        => 'twitter_link',
			'type'      => 'text',
			'icon'      => 'fab fa-twitter',
		],
		[
			'title'     => esc_html__('Github', 'jawad'),
			'id'        => 'github_link',
			'type'      => 'text',
			'icon'      => 'fab fa-github',
		],
		[
			'title'     => esc_html__('LinkedIn', 'jawad'),
			'id'        => 'linkedin_link',
			'type'      => 'text',
			'icon'      => 'fab fa-linkedin',
		],
        [
            'title'     => esc_html__('Pinterest', 'jawad'),
            'id'        => 'pinterest_link',
            'type'      => 'text',
            'icon'      => 'fab fa-pinterest',
        ],
		[
            'id'        => 'social_follow_end',
            'type'      => 'section',
            'indent'    => false,
        ],

	],
] );