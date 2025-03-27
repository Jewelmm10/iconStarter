<?php
/**
 * Displays the post entry header
 *
 * @package mugdho
 */ 

$the_post_id   = get_the_ID();
 
    if ( is_single() ) {

    }else {
    ?>
    <header class="enty-header">
    <?php 

        if ( has_post_thumbnail( $the_post_id ) ) {
            ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="inner">
                        <?php 
                        the_post_custom_thumbnail( 
                            $the_post_id, 
                            'featured-thumbnail'
                        ); ?>
                    </div>
                </a>
            <?php
        }
    ?>
    </header>

    

<?php    }
    
?>