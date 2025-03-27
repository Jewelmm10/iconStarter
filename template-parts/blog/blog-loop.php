<?php 
if ( have_posts() ) {

    while ( have_posts() ) : the_post() ;
    ?>
<div class="blog__item mt-5 border-b border-dashed pb-5">
    <h3 class="text-2xl mb-3 hover:text-primary transition-all duration-150">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>
    <div class="meta-info">
        <?php
            $categories = get_the_category();
            if (!empty($categories)) {
                echo '<span class="bg-black p-1 text-uppercase text-white">' . esc_html($categories[0]->name) . '</span>';
            }
        ?>

        <div class="author-name flex text-xs my-3">
            <?php the_author(); ?>
            <div class="mx-2"> - </div>
            <span class="post-date text-gray-400">
                <time><?php echo get_the_date( 'F j, Y', get_the_ID() ); ?></time>
            </span>
            <div class="ml-2 post-comments">
                <i class="ri-discuss-fill mr-2"></i><?php echo get_comments_number(); ?>
            </div>
        </div>
    </div>
    <div class="post-thumb overflow-hidden rounded-md mb-3">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('full'); ?>
        </a>
    </div>
    <div class="content">
        <p class="fz-16 ptext"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
        <a href="<?php the_permalink(); ?>" class="inline-block bg-black px-3 py-1 rounded-sm text-white mt-5">
            Read More<i class="ml-2 ri-arrow-right-long-line"></i>
        </a>
    </div>
</div>
<?php endwhile; 
} else {

    get_template_part( 'template-parts/blog/content', 'none' );
}