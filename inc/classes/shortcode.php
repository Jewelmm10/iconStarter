<?php 
// Add carousel post
function custom_cat_list( $atts , $content = null ) {
    $atts = shortcode_atts( array(
        'cat'    => 'product_cat',
    ), $atts );

    ob_start();
    ?>    
    <ul class="cat_listing">
        <?php 
            $product_categories = get_terms( array(
                'taxonomy'   => $atts['cat'],
                'orderby'    => 'count',
                'order'      => 'DESC',
                'hide_empty' => true,
            ) );

            if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) :

            foreach ( $product_categories as $category ) :
        ?>

        <li><a href="<?php echo get_term_link( $category ); ?>"><?php echo $category->name; ?></a><span><?php echo absint( $category->count ); ?></span></li>
    
        <?php 
            endforeach;
            endif;
        ?>
    </ul>


    <?php
    
 
    return ob_get_clean();
}
add_shortcode( 'wp_cat_list', 'custom_cat_list' );

