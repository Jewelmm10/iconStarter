<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Icon_Large_Block extends Widget_Base {

    public function get_name() {
        return 'Large_block_widget';
    }

    public function get_title() {
        return __('Icon Large Block', 'iconstarter');
    }

    public function get_icon() {
        return 'eicon-elementor';
    }

    public function get_categories() {
        return ['icon-elements'];
    }
    private function get_all_categories() {
        $cats = get_categories();
        $options = [];
        foreach ($cats as $cat) {
            $options[$cat->term_id] = $cat->name;
        }
        return $options;
    }
    protected function register_controls() {
        
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Posts Source', 'iconstarter'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'post_category',
            [
                'label'    => __('Select Category', 'textdomain'),
                'type'     => Controls_Manager::SELECT2,
                'options'  => $this->get_all_categories(),
                'multiple' => true,
            ]
        );
        $this->add_control(
            'post_count',
            [
                'label'   => __('Posts Per Page', 'iconstarter'),
                'type'    =>Controls_Manager::NUMBER,
                'default' => 4,
            ]
        );   
        $this->add_control(
			'order',
			[
				'label'   => __( 'Order By', 'iconstarter' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [
					'asc' => [
						'title' => esc_html__( 'Ascending', 'iconstarter' ),
						'icon'  => 'fas fa-sort-amount-up-alt',
					],
					'desc' => [
						'title' => esc_html__( 'Descending', 'iconstarter' ),
						'icon'  => 'eicon-sort-amount-desc',
					],
				],
				'default' => 'desc',
				'toggle'  => false,
			]
		);   
        $this->end_controls_section();

        $this->start_controls_section(
            'layout_section',
            [
                'label' => __('Layout Settings', 'iconstarter'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $image_path = ICON_STARTER_ASSETS . '/img/layout-preview/layout-';
        $this->add_control(
                'icon_post_preset_style',
                [
                    'label'       => esc_html__( 'Select Style', 'iconstarter' ),
                    'type'        => Controls_Manager::CHOOSE,
                    'options'     => [
                        'one' => [
                            'title' => esc_html__('Default', 'iconstarter'),
                            'image' => $image_path . 'one.jpg',
                            'icon' => 'ri-arrow-down-box-fill',
                            
                        ],
                        'two' => [
                            'title' => esc_html__('Two', 'iconstarter'),
                            'image' => $image_path . 'two.jpg'
                        ],
                        'three' => [
                            'title' => esc_html__('Three', 'iconstarter'),
                            'image' => $image_path . 'three.jpg'
                        ],
                        'four' => [
                            'title' => esc_html__('Four', 'iconstarter'),
                            'image' => $image_path . 'four.jpg'
                        ],
                        'five' => [
                            'title' => esc_html__('Five', 'iconstarter'),
                            'image' => $image_path . 'five.jpg'
                        ],
                        'six' => [
                            'title' => esc_html__('Six', 'iconstarter'),
                            'image' => $image_path . 'six.jpg'
                        ],
                    ],
                    'default'     => 'one',
                    'label_block' => true,
                    'toggle'      => false,
                    'image_choose'=> true,
                    'render_type' => 'image',
                ]
        );

        $this->add_control(
            'excerpt',
            [
                'label'     => __('Show Excerpt', 'iconstarter'),
                'type'      => Controls_Manager::SWITCHER,
                'label_on'  => __('Show', 'iconstarter'),
                'label_off' => __('Hide', 'iconstarter'),
                'return_value' => 'yes',
                'default' => 'yes',
                
            ]
        ); 
        $this->add_control(
            'icon_show_image',
            [
                'label' => __('Show Image', 'iconstarter'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'iconstarter'),
                'label_off' => __('Hide', 'iconstarter'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        // Custom media ratio for featured grids.
        $this->add_control(
            'has_ratio',
            [
                'label'        => esc_html__('Use Aspect Ratio', 'iconstarter'),
                'description' => esc_html__('Keep an aspect ratio for main item(s) over devices. Disable to use a fixed height instead.', 'iconstarter'),
                'type'         => Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'iconstarter'),
                'label_off' => __('Hide', 'iconstarter'),
                'return_value' => 'yes',
                'default' => 'yes',
            ] 
        );   
        $this->add_control(
            'css_media_ratio',
            [
                'label'      => __('Image Ratio', 'iconstarter'),
                'type'       =>Controls_Manager::NUMBER,
                'min' => 0.25,
                'max' => 4.5,
                'step' => 0.1,
                'default' => 1,
                'selectors'  => [
                    '{{WRAPPER}} .icon-entry-thumbnail' => '--main-ratio: {{SIZE}};',
                ],
                'condition' => [
                    'has_ratio' => 'yes'
                ],
            ]
        );
         
        $this->add_control(
            'post_block_image_height',
            [
                'label'      => __('Image Height', 'iconstarter'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 600,
                        'step' => 1,
                    ],
                ],
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .icon-entry-thumbnail' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'has_ratio!' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'icon_show_title',
            [
                'label'         => __('Show Title', 'iconstarter'),
                'type'          => Controls_Manager::SWITCHER,
                'label_on'      => __('Show', 'iconstarter'),
                'label_off'     => __('Hide', 'iconstarter'),
                'return_value'  => 'yes',
                'default'       => 'yes',
            ]
        );

        $this->add_control(
            'title_tag',
            [
                'label'       => __('SEO: Title Tag', 'iconstarter'),
				'label_block' => true,
				'type'        => Controls_Manager::CHOOSE,
				'options'     => [
					'h1' => [
						'title' => esc_html__( 'H1', 'iconstarter' ),
						'icon'  => 'eicon-editor-h1',
					],
					'h2' => [
						'title' => esc_html__( 'H2', 'iconstarter' ),
						'icon'  => 'eicon-editor-h2',
					],
					'h3' => [
						'title' => esc_html__( 'H3', 'iconstarter' ),
						'icon'  => 'eicon-editor-h3',
					],
					'h4' => [
						'title' => esc_html__( 'H4', 'iconstarter' ),
						'icon'  => 'eicon-editor-h4',
					],
					'h5' => [
						'title' => esc_html__( 'H5', 'iconstarter' ),
						'icon'  => 'eicon-editor-h5',
					],
					'p' => [
						'title' => esc_html__( 'P', 'iconstarter' ),
						'text'  => 'P',
					],
				],
                'default'   => 'h2',
				'toggle'    => false,
                'condition' => [
                    'icon_show_title' => 'yes',
                ],
			]
		);

        $this->add_control(
            'icon_title_length',
            [
                'label'     => __('Title Length', 'iconstarter'),
                'type'      => Controls_Manager::NUMBER,
                'condition' => [
                    'icon_show_title' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'icon-post-meta',
            [
                'label' => esc_html__( 'Post Meta', 'iconstarter' ),
                'type' => Controls_Manager::HEADING,                
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'icon_show_meta',
            [
                'label'         => __('Show Meta', 'iconstarter'),
                'type'          => Controls_Manager::SWITCHER,
                'separator'     => 'before',
                'label_on'      => __('Show', 'iconstarter'),
                'label_off'     => __('Hide', 'iconstarter'),
                'return_value'  => 'yes',
                'default'       => 'yes',
                
            ]
        );
        $this->add_control(
            'meta_cat_style',
            [
				'label'        => esc_html__('Category Style', 'iconstarter'),
				'type'         => Controls_Manager::SELECT,
				'options'      => [
					'text'      => esc_html__('Plain Text', 'iconstarter'),
					'labels'    => esc_html__('Label', 'iconstarter'),
				],
				'default'      => 'text',
                'condition'     => [
                    'icon_show_meta' => 'yes',
                ],
			],
        );
        $this->add_control(
            'icon_author_img',
            [
                'label'         => __('Show Author Image', 'iconstarter'),
                'type'          => Controls_Manager::SWITCHER,
                'label_on'      => __('Show', 'iconstarter'),
                'label_off'     => __('Hide', 'iconstarter'),
                'return_value'  => 'yes',
                'default'       => 'yes',
                'condition'     => [
                    'icon_show_meta' => 'yes',
                ],
                
            ]
        );        
           
        $this->add_control(
            'icon_show_read_more',
            [
                'label'         => __('Show Read More', 'iconstarter'),
                'type'          => Controls_Manager::SWITCHER,
                'label_on'      => __('Show', 'iconstarter'),
                'label_off'     => __('Hide', 'iconstarter'),
                'return_value'  => 'yes',
                'default'       => 'yes',
                'condition'     => [
                    'icon_show_meta' => 'yes',
                ],
                
            ]
        );
        
        $this->end_controls_section();
    }
    
    protected function render() {
        $settings   = $this->get_settings_for_display();
        $params['preset_style']         = $settings['icon_post_preset_style'];
    
        // Build query arguments
        echo "hello";

       
    }
    
}