<?php
/**
 * The template for displaying post meta info.
 *
 * @package mugdho
 */

    $the_id   = get_the_ID();

    if ( is_single() ) { ?>
        <div class="entry-meta">
            <ul class="meta d-flex align-items-center">
                <li class="d-flex">
                    <?php            
                        $tags_terms = wp_get_post_terms( $the_id, [ 'category' ] );
                        if ( empty( $tags_terms ) || ! is_array( $tags_terms ) ) {
                            return;
                        }
                        foreach ( $tags_terms as $key => $tag_term ) {
                    ?>
                    <a class="post-cat" href="<?php echo esc_url( get_term_link( $tag_term ) ); ?>"><?php echo esc_html( $tag_term->name ); ?></a>                    
                    <?php
                        }
                    ?>
                </li>
                <li class="list-inline-item">
                    <span class="author-vcard">
                        লিখেছেন
                        <?php mugdho_posted_by(); ?>                        
                    </span>
                </li>
                <li>
                    <div class="post-publish">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="mx-2 posted-on"><?php mugdho_posted_on(); ?></span>
                    </div>                                        
                </li>
            </ul>                           
        </div>
    <?php }else { ?>

    <p class="entry-meta">    
        <span class="meta-heading">Tags:</span>

        <?php            
            $tags_terms = wp_get_post_terms( $the_id, [ 'post_tag' ] );
            if ( empty( $tags_terms ) || ! is_array( $tags_terms ) ) {
                return;
            }
            foreach ( $tags_terms as $key => $tag_term ) {
        ?>
        <span class="tag">
            <a href="<?php echo esc_url( get_term_link( $tag_term ) ); ?>"><?php echo esc_html( $tag_term->name ); ?></a>
        </span>
        <?php
            }
        ?>
    </p>

<?php  }  ?>