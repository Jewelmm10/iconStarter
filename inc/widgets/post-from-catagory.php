<?php 

class Context_Post_Cat extends WP_widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        $widget_ops = array( 
            'classname' => 'post_from_cat',
            'description' => __( 'Displays posts from selected category.', 'context' )
        );
        parent::__construct( 'post_from_cat', __( 'ICON:Post from category', 'context' ), $widget_ops );
    }

    public function widget( $args, $instance) { 
        extract( $args );
        if( empty( $instance ) ) {
            return ;
        }

        $title          = empty( $instance['title'] ) ? '' : $instance['title'];
        $category       = empty( $instance['cat_id'] ) ? '' : $instance['cat_id'];
        $style          = empty( $instance['block_layout'] ) ? '0' : $instance['block_layout'];
        $post_count     = empty( $instance['post_limit'] ) ? '4' : $instance['post_limit'];

        ?>

        <?php
            echo $before_widget; 
            echo $args['before_title'];
            echo $title;
            echo $args['after_title'];
            $gategory_args = array(
            	'cat'			   => $category,
            	'posts_per_page'   => $post_count,
            );
            $cat_post = new WP_Query($gategory_args);
        
        if ( $style == 'layout1' ) {          
        ?>

        <ul class="widget-area">
            <?php while( $cat_post->have_posts() ) : $cat_post->the_post(); ?>
            <li>
                <a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium-thumbnail'); ?> </a>
                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                <p><?php the_excerpt(); ?></p>
            </li>
            <?php 
                endwhile; 
                wp_reset_postdata();
            ?>
            
        </ul> 
        <?php 
           } else if ( $style == 'layout2' ) {
        ?> 
        <div class="row g-3">
             <?php 
                $args = array(
                    'cat'              => $category,
                    'posts_per_page'   => $post_count, 
                );

                $query = new WP_Query( $args );
                while( $query->have_posts() ) : $query->the_post();
             ?>
             <div class="col-md-6">
                <article class="b-item bg-white p-2">
                   <div class="thumbnail position-relative">
                      <?php the_post_thumbnail('medium-thumbnail'); ?> 
                      <?php get_template_part( 'template-parts/post/entry-category' ); ?>
                   </div>
                   <div class="entry-body">
                      <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <p class="entry-exserpt"><?php get_template_part( 'template-parts/post/entry-content' ); ?></p>
                      <?php get_template_part( 'template-parts/post/entry-meta' ); ?> 
                   </div>
                </article>
             </div>
             <?php 
                endwhile;
                wp_reset_postdata();
             ?>             
        </div>
        <?php 
           } else if ( $style == 'layout3' ) {
        ?>
        <ul class="list-posts">
            <?php while( $cat_post->have_posts() ) : $cat_post->the_post(); ?>
            <li>
                <div class="widget-post d-flex">
                    <div class="post-media">
                        <a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-thumbnail'); ?> </a>
                    </div>
                    <div class="post-content">
                        <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <div class="post-meta"><span class="post-date"><i class="fa fa-clock me-2"></i><?php the_time( 'd F, Y' ); ?></span></div>
                    </div>
                </div>
            </li>   
            <?php 
                endwhile; 
                wp_reset_postdata();
            ?>
        </ul>
        <?php 
           } else if ( $style == 'layout4' ) {
        ?>
        <div class="row">
            <div class="col-md-12">
                <?php 
                    $args = array(
                        'cat'              => $category,
                        'posts_per_page'   => $post_count,            
                    );

                    $query = new WP_Query( $args );
                    while( $query->have_posts() ) : $query->the_post();
                ?>

                <article class="b-item bg-white p-2">
                   <div class="thumbnail position-relative">
                      <?php the_post_thumbnail('big-thumbnail'); ?>  
                      <?php get_template_part( 'template-parts/post/entry-category' ); ?>
                   </div>
                   <div class="entry-body">
                      <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <p class="entry-exserpt"><?php get_template_part( 'template-parts/post/entry-content' ); ?></p>
                      <?php get_template_part( 'template-parts/post/entry-meta' ); ?> 
                   </div>
                </article>

                <?php 
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
        <?php

            }        
            
        ?>
           
        <?php
        echo $after_widget;
    }


    private function widget_fields() {

        $fields = array(
            'widget_title'  => array(
                'widget_id'         => 'title',
                'widget_form_title' => __( 'Title', 'context' ),
                'widget_form_type'  => 'text'
            ),

            'category_id'   => array(
                'widget_id'             => 'cat_id',
                'widget_form_title'     => __( 'Select Category', 'context' ),
                'widget_form_type'      => 'select',
                'widget_form_options'   => dropdown_category()
            ),            

            'block_layout' => array(
                'widget_id'           => 'block_layout',
                'widget_form_title'   => __( 'Block Layouts', 'news-portal' ),
                'widget_default'      => 'layout1',
                'widget_form_type'    => 'selector',
                'widget_form_options' => array(
                    'layout1' => esc_url( get_template_directory_uri() . '/images/layout-1.png' ),
                    'layout2' => esc_url( get_template_directory_uri() . '/images/layout-2.png' ),
                    'layout3' => esc_url( get_template_directory_uri() . '/images/layout-3.png' ),
                    'layout4' => esc_url( get_template_directory_uri() . '/images/layout-4.png' )
                )
            ),

            'limit_post'    => array(
                'widget_id'          => 'post_limit',
                'widget_form_title' => __( 'Number of posts:', 'context' ),
                'widget_form_type'  => 'number',
                'widget_default'    => 4,
            ),

        );
        
        return $fields;
    }


    public function form( $instance ) {
        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ( $widget_fields as $widget_field ) {

            // Make array elements available as variables
            extract( $widget_field );
            $widget_form_value = !empty( $instance[$widget_id] ) ?  $instance[$widget_id]  : '';
            show_widget_form( $this, $widget_field, $widget_form_value );

        }
    }



    

}