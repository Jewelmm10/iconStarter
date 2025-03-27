<?php

/**
 * @Author: Juwel
 * @Date:   2024-02-15 12:15:04
 * @Last Modified by:   Juwel
 * @Last Modified time: 2024-02-24 12:45:40
 */


function ajax_search_func() {
    $query = sanitize_text_field( $_POST['keyword'] );
    $the_query = new WP_Query( [
        'post_type'         => 'product',
        'posts_per_page'    => 5,
        's'                 => $query,
    ] );





    if ( $the_query->have_posts() ) {
        $html = '';
        $html .= '<ul>';
        while( $the_query->have_posts() ) : $the_query->the_post();
            $post_id    = get_the_ID();
            $brand  = get_post_meta( $post_id, '_brand', true );
            $generic    = get_post_meta( $post_id, '_generic', true );
            $add_to_cart = do_shortcode('[add_to_cart_url id="'.$post->ID.'"]');
           
            $html .= '<li><a class="text-white hover:text-orange-500 block py-3" href="'. esc_url( post_permalink() ) .'">
                       '. get_the_title() .'</a></li>';

        endwhile;
        $html .= '</ul>';
        wp_reset_query();
    }else {
        $html .= '<div class="text-white block py-3"> <h6>Can\'t find what you\'re looking for? Knock us on Facebook/Instagram for Pre-order</h6></div>';
    }
    
    echo "$html";
	
	die();
}