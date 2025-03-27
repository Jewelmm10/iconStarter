<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 */

get_header(); ?>

<div id="main-container" class="main-container">
    <div class="container">
        <header class="entry-header text-center text-capitalize">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="row"> 
        <?php 
            // Start the Loop
            while ( have_posts() ) : the_post();

                // Include the page content template.
            	get_template_part( 'template-parts/contents/content', 'page' );

            endwhile;
        ?>
        </div>
    </div>
</div>

<?php
get_footer();
