<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;

class icon_Heading_Widget extends Widget_Base {
    
    // Widget Slug
    public function get_name() {
        return 'icon_heading';
    }

    // Widget Title
    public function get_title() {
        return __('icon Heading', 'iconstarter');
    }

    // Widget Icon
    public function get_icon() {
        return 'eicon-t-letter-bold';
    }

    // Widget Categories
    public function get_categories() {
        return ['icon-elements'];
    }

    // Register Widget Controls
    protected function _register_controls() {
        $this->start_controls_section(
			'section-title',
			[
				'label' => esc_html__( 'icon Heading', 'iconstarter' ),
			]
		);
		$this->add_control(
            'heading_type',
            [
                'label' => esc_html__('Content Style', 'iconstarter'),
                'type' => Controls_Manager::SELECT,
                'default' => 'basic',
                'label_block' => false,
                'options' => [
                    'basic'  => esc_html__('Basic', 'iconstarter'),
                    'stand'  => esc_html__('Standard', 'iconstarter'),
                ],
            ]
        );
        $this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'iconstarter' ),
				'type' => Controls_Manager::TEXTAREA,
				'ai' => [
					'type' => 'text',
				],
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your title', 'iconstarter' ),
				'default' => esc_html__( 'Need a Project?', 'iconstarter' ),
			]
		);
        $this->add_control(
			'sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'iconstarter' ),
				'type' => Controls_Manager::TEXTAREA,
				'ai' => [
					'type' => 'text',
				],
				'dynamic' => [
					'active' => true,
				],
				'placeholder'   => esc_html__( 'Enter your title', 'iconstarter' ),
				'default'       => esc_html__( 'Let\'s work together', 'iconstarter' ),
				'condition'     => [
                    'heading_type' => ['basic', 'modern'],
                ],
			]
		);
		$this->add_control(
            'title_img',
            [
                'label'   => __('Title Pre-Image', 'iconstarter'),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
				'condition' => [
                    'heading_type' => ['stand'],
                ],
            ]
        );
        
        $this->end_controls_section();
    }

    // Render Widget Output
    protected function render() {

        $settings = $this->get_settings_for_display();      

        $params['heading_type']   = $settings['heading_type'];
		$params['title']    	  = $settings['title'];
        $params['sub_title']   	  = $settings['sub_title'];
        $params['title_img']   	  = $settings['title_img'];

       
        
    }
}
?>