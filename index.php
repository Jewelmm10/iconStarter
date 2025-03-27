<?php
/**
 * Main Template File
 * @package icon_starter
 */
get_header();

?>

<!--<< blog >>-->
<section class="main_section my-5">
    <div class="container">
        <div class="trow">
            <?php
            $sidebar_opt = 'right';
            $blog_type	 =	'trow-gap w-full md:w-3/4 lg:w-3/4';
            if( ! isset( $sidebar_opt ) && $sidebar_opt == 'no-sidebar' ) {               
               $blog_type	=	'trow-gap w-full';	
            } else {
               $blog_type	=	'trow-gap w-full md:w-3/4 lg:w-3/4';	
            }
            if(isset($sidebar_opt) && $sidebar_opt == 'left') {
               get_sidebar();
            }
            // if ( !is_active_sidebar( 'default-sidebar' ) ) {
            //    $blog_type	=	'trow-gap w-full';	
            // }
         ?>
            <div class="<?php echo esc_attr($blog_type); ?> ">
                <div class="blog__wrapper">
                    <?php get_template_part( 'template-parts/blog/blog','loop' ); ?>
                    <?php //wptb_pagination(); ?>
                </div>
            </div>
            <?php
         if(isset($sidebar_opt) && $sidebar_opt == 'right'){
            get_sidebar();
         } else if (isset($sidebar_opt) && $sidebar_opt == '' && is_active_sidebar( 'default-sidebar' )){
            get_sidebar();
         }
        ?>
        </div>
    </div>
</section>
<!--<< blog >>-->
<?php


get_footer();