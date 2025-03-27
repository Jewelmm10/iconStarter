<?php
/**
 * Displays the post entry header
 *
 * @package mugdho
 */ 

$the_post_id   = get_the_ID();
?>
<div class="grid-category">
    <?php

        $article_terms = wp_get_post_terms( $the_post_id, [ 'category' ] );

        if ( empty( $article_terms ) || ! is_array( $article_terms ) ) {
            return;
        }
        foreach ( $article_terms as $key => $article_term ) {
    ?>
    <a class="post-cat fashion" href="<?php echo esc_url( get_term_link( $article_term ) ); ?>">
        <?php echo esc_html( $article_term->name ); ?>
    </a>
    <?php
        }
    ?>
</div>