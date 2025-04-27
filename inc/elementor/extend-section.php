<?php

namespace ICON_STARTER\Inc\Elementor;
use Elementor\Controls_Manager;

/**
 * Extra containers.
 */
class ExtendSection
{

	public function __construct()
	{


		/**
		 * Extend Column Element.
		 */
		// Extend the section in layout section.
		add_action('elementor/element/column/layout/after_section_start', [$this, 'add_column_controls']);
	}



	public function add_column_controls($section) {


		$section->add_control(
			'is_sidebar',
			[
				'label'       => esc_html__('Is Sidebar?', 'iconstarter'),
				'type'        => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('Check if this column is a sidebar.', 'iconstarter'),
				'default'      => '',
				'prefix_class' => '',
				'return_value' => 'main-sidebar',
				'condition'    => ['is_main' => '']
			]
		);

		$section->add_control(
			'sidebar_sticky',
			[
				'label'       => esc_html__('Sticky Sidebar', 'iconstarter'),
				'type'        => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('Check if this column is a sidebar.', 'iconstarter'),
				'default'      => '',
				'prefix_class' => '',
				'return_value' => 'main-sidebar isSticky',
				'condition'    => ['is_sidebar!' => '']
			]
		);

		$section->add_control(
			'is_main',
			[
				'label'       => esc_html__('Is Main Column', 'iconstarter'),
				'type'        => \Elementor\Controls_Manager::SWITCHER,
				'description' => esc_html__('Check if this column is adjacent to a sidebar.', 'iconstarter'),
				'default'      => '',
				'prefix_class' => '',
				'return_value' => 'main-content',
				'condition'    => ['is_sidebar' => '']
			]
		);

	}


}

new ExtendSection;