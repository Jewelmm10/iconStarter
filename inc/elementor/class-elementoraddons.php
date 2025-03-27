<?php
namespace ICON_STARTER\Inc\Elementor;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class ELEMENTORADDONS {
    public function __construct() {
        if (!did_action('elementor/loaded')) {
            return;
        }
        add_action('elementor/widgets/register', [$this, 'register_widgets']);
        add_action('elementor/elements/categories_registered', [$this, 'add_category']);
        add_action('elementor/editor/after_enqueue_scripts', [$this, 'editor_after_register_scripts']);
    }

    public function editor_after_register_scripts() {
        // Load Editor Script with cache-busting
        $editor_js = ICON_STARTER_PATH . '/assets/admin/editor.js';
        if (file_exists($editor_js)) {
            wp_enqueue_script('editor-aos', WPTB_THEME_URI . '/assets/admin/editor.js', ['jquery', 'aos'], filemtime($editor_js), true);
        }
    }

    private function include_widgets_files() {
        $widgets = [
            'query'
        ];

        $templates = ['query'];

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
            'iconstarter-elements',
            [
                'title' => esc_html__('iconStarter Elements', 'iconstarter'),
                'icon'  => 'fa fa-plug',
            ]
        );
    }
}