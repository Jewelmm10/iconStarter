<?php
/**
 * Template part for displaying posts
 *
 * @package mugdho
 */
?>


<article class="single basis-3/4">     
    <h2 class="text-2xl mb-5 entry-title"><?php the_title(); ?></h2>
    <?php get_template_part( 'template-parts/post/entry-header' ); ?>           
    <div class="entry-content my-3"><?php get_template_part( 'template-parts/post/entry-content' ); ?></div>   
</article>    

   <!-- post comments -->
    <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }
    ?>  
<?php get_sidebar(); ?>
