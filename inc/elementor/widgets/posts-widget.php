<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;

class Icon_Posts extends Widget_Base {

    public function get_name() {
        return 'post_widget';
    }

    public function get_title() {
        return __('icon Posts', 'iconstarter');
    }

    public function get_icon() {
        return 'eicon-archive-posts';
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
                'label' => __('Query', 'iconstarter'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'post_category',
            [
                'label' => __('Select Category', 'textdomain'),
                'type' => Controls_Manager::SELECT2,
                'options' => $this->get_all_categories(),
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
						'icon'  => 'fas fa-sort-amount-down',
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

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'image',
                'exclude' => ['custom'],
                'default' => 'medium',
                'condition' => [
                    'icon_show_image' => 'yes',
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
                    'icon_show_image' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'icon_show_title',
            [
                'label' => __('Show Title', 'iconstarter'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'iconstarter'),
                'label_off' => __('Hide', 'iconstarter'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'title_tag',
            [
                'label'       => __('Title Tag', 'iconstarter'),
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
                'label' => __('Title Length', 'iconstarter'),
                'type' => Controls_Manager::NUMBER,
                'condition' => [
                    'icon_show_title' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'icon_show_read_more',
            [
                'label' => __('Show Read More', 'iconstarter'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'iconstarter'),
                'label_off' => __('Hide', 'iconstarter'),
                'return_value' => 'yes',
                'default' => 'yes',
                
            ]
        );

        $this->add_control(
            'icon_read_more_text',
            [
                'label' => esc_html__('Label Text', 'iconstarter'),
                'type' => Controls_Manager::TEXT,
                'dynamic'     => [ 'active' => true ],
                'label_block' => false,
                'default' => esc_html__('Read More', 'iconstarter'),
                'condition' => [
                    'icon_show_read_more' => 'yes',
                ],
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
                            'image' => $image_path . 'one.jpg'
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

        $this->end_controls_section();
    }
    

    protected function render() {
        $settings   = $this->get_settings_for_display();
        $params['preset_style']         = $settings['icon_post_preset_style'];
    
        // Build query arguments
        icon_post_show($params);
        
        
        
       
    }
    
}