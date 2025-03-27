<?php
/**
 * Displays the post content
 *
 * @package Mugdho
 */


    if ( is_single() ) {
        the_content(
            sprintf(
                wp_kses(
                /* translators: %s: Name of current post. */
                    __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'mugdho' ),
                    [
                        'span' => [
                            'class' => []
                        ]
                    ]
                ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            )
        );

        wp_link_pages(
            [
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mugdho' ),
                'after'  => '</div>',
            ]
        );

    } else {
        mugdho_excerpt( 110 );
    }

    ?>
