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
        add_action('elementor/editor/after_enqueue_styles', [$this, 'editor_enqueue_styles']);
        add_action('elementor/editor/after_enqueue_scripts', [$this, 'editor_enqueue_scripts']);

    }

    // Split into separate style and script handlers
    public function editor_enqueue_styles() {
        $editor_css_url = ICON_STARTER_URL . '/assets/css/admin/editor.css';
        $slick_theme = ICON_STARTER_ASSETS . '/css/slick-theme.css';
        $slick_url = ICON_STARTER_ASSETS . '/css/slick.css';

        wp_enqueue_style('icon-editor', $editor_css_url, [], filemtime(ICON_STARTER_PATH . '/assets/css/admin/editor.css'));
        wp_enqueue_style('slick-theme', $slick_theme, [], filemtime(ICON_STARTER_PATH . '/assets/css/slick-theme.css'));
        wp_enqueue_style('slick', $slick_url, [], filemtime(ICON_STARTER_PATH . '/assets/css/slick.css'));
    }

    public function editor_enqueue_scripts() {
        $slick_js = ICON_STARTER_ASSETS . '/js/slick.min.js';
        $main = ICON_STARTER_ASSETS . '/js/script.js';

        // Add jQuery dependency and verify file paths
        wp_enqueue_script('slick_js', $slick_js, ['jquery'], filemtime(ICON_STARTER_PATH . '/assets/js/slick.min.js'), ['jquery'], '1.8.1', true);
        wp_enqueue_script('main', $main, ['jquery', 'slick_js'], filemtime(ICON_STARTER_PATH . '/assets/js/script.js'), ['jquery'], '1.8.1', true);
    }


    private function include_widgets_files() {
        $widgets = ['featured', 'block-grid', 'large-block', 'posts'];

        $templates = ['posts', 'heading'];

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
            'featured'    => 'Icon_Featured',
            'block_grid'  => 'Icon_Block_Grid',
            'large_block' => 'Icon_Large_Block',
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