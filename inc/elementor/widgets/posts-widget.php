<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

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
                'label' => __('Show Excerpt', 'iconstarter'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'iconstarter'),
                'label_off' => __('Hide', 'iconstarter'),
                'return_value' => 'yes',
                'default' => 'yes',
                
            ]
        ); 
        $this->end_controls_section();
    }
    

    protected function render() {
        $settings   = $this->get_settings_for_display();
        $post_types = !empty($settings['post_types']) ? $settings['post_types'] : ['post'];
        $post_count = $settings['post_count'];        
        $categories = !empty($settings['category']) ? $settings['category'] : [];
    
        // Build query arguments
        $args = [
            'post_type'      => $post_types,
            'posts_per_page' => $post_count,
        ];
    
        // Call the appropriate function based on view_style
        
       
    }
    
}