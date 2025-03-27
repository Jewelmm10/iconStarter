<?php
if (have_posts()) 
{ 
    while ( have_posts() ) : the_post();
    ?>
<div class="blog__details">
    <h2 class="text-3xl font-normal"><?php the_title(); ?></h2>
    <div class="meta-info flex my-3 justify-between">
        <div class="author-name flex text-xs">
            <span class="text-gray-400">By</span><span class="font-semibold ml-1"><?php the_author(); ?></span>
            <div class="mx-2"> - </div>
            <span class="post-date text-gray-400">
                <time><?php echo get_the_date( 'F j, Y', get_the_ID() ); ?></time>
            </span>
        </div>
        <div class="flex text-xs">
            <div class="view-post mr-6">
                <i class="ri-eye-fill mr-2"></i>4
            </div>
            <div class="post-comments">
                <i class="ri-discuss-fill mr-2"></i><?php echo get_comments_number(); ?>
            </div>
        </div>
    </div>
    <div class="post-share flex items-center mb-3">
        <div class="share-btn border p-2 flex items-center w-fit">
            <div class="btn-icon border-r px-2"><i class="ri-share-fill"></i></div>
            <div class="btn-icon px-2">Share</div>
        </div>
        <ul class="social-share flex ml-4 space-x-2">
            <li><a class="share fb" href="#"><i class="ri-facebook-fill"></i></a></li>
            <li><a class="share tx" href="#"><i class="ri-twitter-x-line"></i></a></li>
            <li><a class="share in" href="#"><i class="ri-instagram-line"></i></a></li>
            <li><a class="share wh" href="#"><i class="ri-whatsapp-line"></i></a></li>
        </ul>
    </div>
    <div class="post-thumb overflow-hidden rounded-md mb-3">
        <?php if( has_post_thumbnail() ); { ?>
        <?php the_post_thumbnail('full'); ?>
        <?php } ?>
    </div>
    <div class="content overflow-hidden">
        <?php the_content(); ?>
    </div>
    <div class="comment-area my-5">
        <?php 
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                } 
            ?>
    </div>

</div>

<?php
    endwhile;
    wp_reset_query();
} else {
    get_template_part( 'template-parts/blog/content', 'none' );
}