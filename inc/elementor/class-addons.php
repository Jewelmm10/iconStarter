<?php
namespace ICON_STARTER\Inc\Elementor;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class ADDONS {
    public function __construct() {
        if (!did_action('elementor/loaded')) {
            return;
        }
        add_action('elementor/widgets/register', [$this, 'register_widgets']);
        add_action('elementor/elements/categories_registered', [$this, 'add_category']);
        add_action('elementor/editor/after_enqueue_styles', [$this, 'editor_after_register_scripts']);
    }

    public function editor_after_register_scripts() {
        $editor_css_url = ICON_STARTER_URL . '/assets/css/admin/editor.css';
        wp_enqueue_style('icon-editor', $editor_css_url, [], filemtime(ICON_STARTER_PATH . '/assets/css/admin/editor.css'));
    }


    private function include_widgets_files() {
        $widgets = ['query', 'heading', 'posts'];

        $templates = ['query', 'heading'];

        $widgets_dir   = ICON_STARTER_PATH . '/inc/elementor/widgets';
        $templates_dir = ICON_STARTER_PATH . '/inc/elementor/templates';
 
        // Include widgets
        foreach ($widgets as $widget) {
            $widget_file = "$widgets_dir/{$widget}-widget.php";
            if (file_exists($widget_file)) {
                require_once $widget_file;
            } else {
                error_log("Widget file not found: $widget_file");
            }
        }

        // Include templates
        foreach ($templates as $template) {
            $template_file = "$templates_dir/{$template}-template.php";
            if (file_exists($template_file)) {
                require_once $template_file;
            } else {
                error_log("Template file not found: $template_file");
            }
        }
    }

    public function register_widgets($widgets_manager) {
        $this->include_widgets_files();

        $widget_classes = [
            'query'         => 'Icon_Query_Widget',
            'heading'       => 'icon_Heading_Widget',
            'posts'         => 'Icon_Posts',
        ];

        foreach ($widget_classes as $class_name) {
            if (class_exists($class_name)) {
                $widgets_manager->register(new $class_name());
            } else {
                error_log("Widget class not found: $class_name");
            }
        }
    }

    public function add_category($elements_manager) {
        $elements_manager->add_category(
            'icon-elements',
            [
                'title' => esc_html__('ICON Elements', 'iconstarter'),
                'icon'  => 'fa fa-plug',
            ]
        );
    }
}