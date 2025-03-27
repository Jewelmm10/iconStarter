<?php
/**
 * Mugdho engine room
 *
 * @package mugdho
 */

/**
 * Setup.
 * Load Classes. Enqueue styles, register widget regions, etc.
 */

// structure functions
require get_template_directory() . '/inc/structure/header.php';
require get_template_directory() . '/inc/structure/footer.php';

// widget functions
require get_template_directory() . '/inc/widgets/widget-functions.php';
require get_template_directory() . '/inc/widgets/widget-categories.php';

// woocommerce
require get_template_directory() . '/inc/woocommerce/woocommerce_functions.php';
require get_template_directory() . '/inc/woocommerce/woocommerce_hooks.php';
require get_template_directory() . '/inc/woocommerce/woocommerce_template.php';
require get_template_directory() . '/inc/woocommerce/template-tags.php';


/**
 * Redux Framework
 */
// require get_template_directory() . '/inc/redux-framework/functions.php';
// require get_template_directory() . '/inc/redux-framework/hooks.php';
// require get_template_directory() . '/inc/redux-framework/jawad-options.php';