<?php
/**
 * mugdho custom function and work related to widgets.
 *
 * @package mugdho
 * @since 1.0.0
 */


/**
 * Register different widgets
 *
 * @since 1.1.8
 */
/*-----------------------------------------------------------------------------------------------------------------------*/
if( !function_exists( 'dropdown_category' ) ):

    /**
     * Dropdown Category
     *
     * @return array();
     */
    function dropdown_category() {
        $categories = get_categories( array( 'hide_empty' => 1 ) );
        $category_lists = array();
        $category_lists['0'] = esc_html__( 'Select Category', 'context' );
        foreach( $categories as $category ) {
            $category_lists[esc_attr( $category->term_id )] = esc_html( $category->name );
        }
        return $category_lists;
    }
endif;
/*-----------------------------------------------------------------------------------------------------------------------*/

if ( !function_exists( 'categories_lists' ) ) :

    /**
     * Category list
     *
     * @return array();
     */
    function categories_lists() {
        $categories = get_categories( array( 'hide_empty' => 1 ) );
        $categories_lists = array();
        foreach( $categories as $category ) {
            $categories_lists[absint( $category->term_id )] = esc_html( $category->name ) .' ('. absint( $category->count ) .')';
        }
        return $categories_lists;
    }

endif;
 //$category_link = get_category_link( $category );

/**
 * Product category widgets
 *
 * @since 1.1.8
 */

 if ( !function_exists( 'product_cat_list' ) ) :

    /**
     * Category list
     *
     * @return array();
     */
    function product_cat_list() {
        $args = [
            'taxonomy'     => 'product_cat',
            'title_li'     => '',
            'hide_empty'   => 1,
        ]
        ;
        $categories = get_categories( $args );
        $categories_lists = array();
        foreach( $categories as $category ) {
            $categories_lists[absint( $category->term_id )] = esc_html( $category->name ) .' ('. absint( $category->count ) .')';
        }
        return $categories_lists;
    }

endif;


/*-----------------------------------------------------------------------------------------------------------------------*/
add_action( 'widgets_init', 'mugdho_register_widget' );

function mugdho_register_widget() {

    // Category Post
    register_widget( 'Product_by_cat' );
    
}

/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Load widget required files
 *
 * @since 1.0.0
 */

require get_template_directory() . '/inc/widgets/widget-fields.php';    //  widget form
require get_template_directory() . '/inc/widgets/product_by_cat.php';    


