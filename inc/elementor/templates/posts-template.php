<?php
if (!function_exists('icon_post_show')) {
   function icon_post_show($params) {
    
    $style   = $params['preset_style'];
    if ( $style === 'one' ) {
    ?>
<section class="main_section my-5">
    <div class="container">
        <div class="flex -mx-1">
            <?php
    $args = array(
        'posts_per_page' => 4, // Number of posts to show
        'post_status'    => 'publish',
    );
    $query = new WP_Query($args);

    if ($query->have_posts()):
        $count = 0;
        while ($query->have_posts()):
            $query->the_post();
            $count++;
            $image = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: ICON_STARTER_URL . '/images/news1.jpg';
            $category = get_the_category();
            $category_name = !empty($category) ? esc_html($category[0]->name) : 'Uncategorized';
            ?>

            <?php if ($count == 1): ?>
            <div class="px-1 w-full md:w-1/2">
                <div class="post-content relative overflow-hidden">
                    <div class="thumb-container">
                        <a class="relative before:bg-linear-to-r before:bg-black/25 before:absolute before:inset-0 before:z-10"
                            href="<?php the_permalink(); ?>">
                            <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>">
                        </a>
                    </div>
                    <div class="meta-info absolute left-0 bottom-0 p-6 cursor-pointer z-20">
                        <span
                            class="cat_name bg-black px-1 text-uppercase text-white text-sm"><?php echo $category_name; ?></span>
                        <h2 class="text-white my-3 text-2xl"><a
                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="author-name flex text-xs my-3 text-white">
                            <?php the_author(); ?>
                            <div class="mx-2"> - </div>
                            <span class="post-date">
                                <time><?php echo get_the_date(); ?></time>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif ($count == 2): ?>
            <div class="px-1 w-full md:w-1/2">
                <div class="post-top mb-2">
                    <div
                        class="post-content relative overflow-hidden h-[240px] bg-[url(<?php echo esc_url($image); ?>)]">
                        <div class="thumb-container">
                            <a class="relative before:bg-linear-to-r before:bg-black/25 before:absolute before:inset-0 before:z-10"
                                href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>">
                            </a>
                        </div>
                        <div class="meta-info absolute left-0 bottom-0 p-3 cursor-pointer z-20">
                            <span
                                class="cat_name bg-black px-1 text-uppercase text-white text-sm"><?php echo $category_name; ?></span>
                            <h2 class="text-white my-3 text-2xl"><a
                                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                    </div>
                </div>
                <div class="flex -mx-1">
                    <?php else: ?>
                    <div class="px-1 w-full md:w-1/2">
                        <div class="post-content relative overflow-hidden">
                            <div class="thumb-container h-[180px]">
                                <a class="relative before:bg-linear-to-r before:bg-black/25 before:absolute before:inset-0 before:z-10"
                                    href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>">
                                </a>
                            </div>
                            <div class="meta-info absolute left-0 bottom-0 p-3 cursor-pointer z-20">
                                <span
                                    class="cat_name bg-black px-1 text-uppercase text-white text-sm"><?php echo $category_name; ?></span>
                                <h2 class="text-white my-3"><a
                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php endwhile; ?>
                </div> <!-- Closing .flex for small posts -->
            </div> <!-- Closing .w-full for the right column -->
        </div> <!-- Closing main flex -->
        <?php endif; wp_reset_postdata(); ?>

    </div>
</section>
<?php
    } else if ( $style === 'two' ) {
        ?>
<!-- news widgets -->
<div class="news-widget">
    <div class="heading">
        <h4 class="border-orange-500"><span class="bg-orange-500">Don't miss</span></h4>
    </div>
    <div class="trow">
        <div class="trow-gap w-full">
            <div class="trow">
                <div class="trow-gap w-1/2">
                    <?php
                                                $args = array(
                                                    'post_type'      => 'post',
                                                    'posts_per_page' => 4, 
                                                    'order'          => 'DESC',
                                                );
                                                $query = new WP_Query($args);
                                                
                                                if ($query->have_posts()) : $query->the_post(); 
                                            ?>
                    <div class="news post-item">
                        <div class="post-thumb relative">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large', ['class' => 'w-full h-auto']); ?>
                            </a>
                            <span class="cat_name">
                                <?php
                                                            $category = get_the_category();
                                                            if (!empty($category)) {
                                                                echo esc_html($category[0]->name);
                                                            }
                                                        ?>
                            </span>
                        </div>
                        <div class="content my-3">
                            <h3>
                                <a class="title text-xl" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="author-name flex text-xs my-2">
                                <span class="font-semibold"><?php the_author(); ?></span>
                                <div class="mx-2"> - </div>
                                <span class="post-date text-gray-400">
                                    <time><?php echo get_the_date( 'F j, Y', get_the_ID() ); ?></time>
                                </span>
                                <div class="ml-2 post-comments">
                                    <i class="ri-discuss-fill mr-2"></i><?php echo get_comments_number(); ?>
                                </div>
                            </div>
                            <div class="excerpt text-sm text-gray-500">
                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="trow-gap w-1/2">
                    <div class="posts">
                        <?php
                                                    $count = 0;
                                                    while ($query->have_posts()) :
                                                        $query->the_post();
                                                        $count++;
                                                ?>


                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="#">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <span class="text-xs text-gray-500"><?php echo get_the_date('F j, Y'); ?></span>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="trow-gap w-full md:w-1/2"></div>
    </div>
</div>
<?php wp_reset_postdata(); ?>
<?php

    }  else if ( $style === 'three' ) {
        ?>
<div class="news-widget">
    <div class="heading">
        <h4 class="border-green-800"><span class="bg-green-800">Lifestyle News</span></h4>
    </div>
    <div class="trow">
        <div class="trow-gap w-full">
            <div class="trow">
                <?php
                                        $args = array(
                                            'post_type'      => 'post',
                                            'posts_per_page' => 4, 
                                        );

                                        $query = new WP_Query($args);

                                        
                                        $count = 0;
                                        while ($query->have_posts()) : $query->the_post();
                                            if ($count < 2) :
                                    ?>
                <div class="trow-gap w-1/2">
                    <div class="news">
                        <div class="post-item">
                            <div class="post-thumb relative">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                                <span class="cat_name">
                                    <?php
                                                            $category = get_the_category();
                                                            if (!empty($category)) {
                                                                echo esc_html($category[0]->name);
                                                            }
                                                        ?>
                                </span>
                            </div>
                            <div class="content my-3">
                                <h3>
                                    <a class="title text-xl" href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <div class="author-name flex text-xs my-2">
                                    <span class="font-semibold"><?php the_author(); ?></span>
                                    <div class="mx-2"> - </div>
                                    <span class="post-date text-gray-400">
                                        <time><?php echo get_the_date('F j, Y'); ?></time>
                                    </span>
                                    <div class="ml-2 post-comments">
                                        <i class="ri-discuss-fill mr-2"></i><?php echo get_comments_number(); ?>
                                    </div>
                                </div>
                                <div class="excerpt text-sm text-gray-500">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- Related Posts -->
                        <div class="posts">
                            <?php
                                                    $related_args = array(
                                                        'post_type'      => 'post',
                                                        'posts_per_page' => 2, // Show 2 related posts
                                                        'offset'         => 2,
                                                    );

                                                    $related_query = new WP_Query($related_args);

                                                    if ($related_query->have_posts()) :
                                                        while ($related_query->have_posts()) : $related_query->the_post();
                                                ?>
                            <div class="post-item">
                                <div class="post-thumb">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </a>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a class="title" href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <span class="text-xs text-gray-500">
                                        <?php echo get_the_date('F j, Y'); ?>
                                    </span>
                                </div>
                            </div>
                            <?php
                                                    endwhile;
                                                        wp_reset_postdata();
                                                    endif;
                                                ?>
                        </div>
                    </div>
                </div>
                <?php
                                            endif;
                                            $count++;
                                        endwhile;
                                        wp_reset_postdata();
                                    
                                    ?>
            </div>



        </div>
        <div class="trow-gap w-full md:w-1/2"></div>
    </div>

</div>
<?php
    } else if ( $style === 'four' ) {
        ?>
<div class="news-widget">
    <div class="heading">
        <h4 class="border-slate-600"><span class="bg-slate-600">HOUSE DESIGN</span></h4>
    </div>
    <div class="trow-gap w-full">
        <div class="trow">
            <div class="news news-carousel overflow-hidden pb-10 -mx-2">
                <?php
                                        $args = array(
                                            'post_type'      => 'post', 
                                            'posts_per_page' => 4, 
                                            'orderby'        => 'date',
                                            'order'          => 'DESC',
                                        );

                                        $query = new WP_Query($args);

                                        if ($query->have_posts()) :
                                            while ($query->have_posts()) : $query->the_post();
                                    ?>
                <div class="post-item">
                    <div class="post-thumb relative">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', ['class' => 'attachment-large size-large wp-post-image']); ?>
                            <?php else : ?>
                            <img width="800" height="534" src="YOUR_DEFAULT_IMAGE_URL_HERE"
                                class="attachment-large size-large wp-post-image">
                            <?php endif; ?>
                        </a>
                        <?php 
                                                $categories = get_the_category();
                                                if (!empty($categories)) {
                                                    echo '<span class="cat_name">' . esc_html($categories[0]->name) . '</span>';
                                                }
                                            ?>
                    </div>
                    <div class="content my-3">
                        <h3>
                            <a class="title font-medium" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                    </div>
                </div>
                <?php
                                        endwhile;
                                        wp_reset_postdata();
                                        else :
                                            echo '<p>No posts found.</p>';
                                        endif;
                                    ?>
            </div>

        </div>
    </div>
</div>
<?php
    } else if ( $style === 'five' ) {
?>
<div class="news-widget">
    <div class="heading">
        <h4 class="border-gray-800"><span class="bg-gray-800">Performance Training</span></h4>
    </div>
    <div class="trow-gap w-full">
        <div class="trow">
            <div class="news">
                <!-- Related Posts -->
                <div class="posts">
                    <?php
                                            $args = array(
                                                'post_type'      => 'post',
                                                'posts_per_page' => 4, 
                                            );

                                            $query = new WP_Query($args);

                                            if ($query->have_posts()) :
                                                while ($query->have_posts()) : $query->the_post();
                                        ?>
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a class="title text-2xl" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <div class="meta-info flex my-3 justify-between">
                                <div class="author-name flex text-xs">
                                    <span class="font-semibold ml-1"><?php the_author(); ?></span>
                                    <div class="mx-2"> - </div>
                                    <span class="post-date text-gray-400">
                                        <time><?php echo get_the_date( 'F j, Y', get_the_ID() ); ?></time>
                                    </span>
                                </div>
                                <div class="flex text-xs">
                                    <div class="post-comments">
                                        <i class="ri-discuss-fill mr-2"></i><?php echo get_comments_number(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="excerpt text-sm text-gray-500">
                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                                            endwhile;
                                                wp_reset_postdata();
                                            endif;
                                        ?>
                </div>
            </div>
        </div>



    </div>
</div>
<?php
    } else if ( $style === 'six' ) {
        ?>
<div class="news-widget">
    <div class="heading">
        <h4 class="border-slate-600"><span class="bg-slate-600">LATEST ARTICLES</span></h4>
    </div>

    <div class="trow news overflow-hidden">
        <?php
                                        $args = array(
                                            'post_type'      => 'post', 
                                            'posts_per_page' => 10, 
                                            'orderby'        => 'date',
                                            'order'          => 'DESC',
                                        );

                                        $query = new WP_Query($args);

                                        if ($query->have_posts()) :
                                            while ($query->have_posts()) : $query->the_post();
                                    ?>
        <div class="trow-gap post-item w-1/2 mb-4">
            <div class="post-thumb relative">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', ['class' => 'attachment-large size-large wp-post-image']); ?>
                    <?php else : ?>
                    <img width="800" height="534" src="YOUR_DEFAULT_IMAGE_URL_HERE"
                        class="attachment-large size-large wp-post-image">
                    <?php endif; ?>
                </a>
                <?php 
                                                $categories = get_the_category();
                                                if (!empty($categories)) {
                                                    echo '<span class="cat_name">' . esc_html($categories[0]->name) . '</span>';
                                                }
                                            ?>
            </div>
            <div class="content my-3">
                <h3>
                    <a class="title" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
            </div>
            <div class="author-name flex text-xs my-2">
                <span class="font-semibold"><?php the_author(); ?></span>
                <div class="mx-2"> - </div>
                <span class="post-date text-gray-400">
                    <time><?php echo get_the_date('F j, Y'); ?></time>
                </span>
                <div class="ml-2 post-comments">
                    <i class="ri-discuss-fill mr-2"></i><?php echo get_comments_number(); ?>
                </div>
            </div>
        </div>
        <?php
                                        endwhile;
                                        wp_reset_postdata();
                                        else :
                                            echo '<p>No posts found.</p>';
                                        endif;
                                    ?>
    </div>
</div>
<?php
    }
}
};