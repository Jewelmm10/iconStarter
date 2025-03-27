<?php 

class Cat_Post_Carousel extends WP_widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        $widget_ops = array( 
            'classname'     => 'cat_post_carousel',
            'description'   => __( 'Set post carousel from selected categories.', 'context' )
        );
        parent::__construct( 'cat_post_carousel', __( 'Category Post Carousel', 'context' ), $widget_ops );
    }

    public function widget( $args, $instance) { 
        extract( $args );
        if( empty( $instance ) ) {
            return ;
        }

        $title          = empty( $instance['title'] ) ? '' : $instance['title'];
        $category       = empty( $instance['category_ids'] ) ? '' : $instance['category_ids']; 
        $number         = empty( $instance['post_limit'] ) ? '4' : $instance['post_limit'];
        $footer         = empty( $instance['footer'] ) ? '0' : $instance['footer'];
        
        ?>

        <?php

            echo $before_widget; 
            echo $args['before_title'];
            echo $title;
            echo $args['after_title']; 

        ?>
        <div class="carousel-areaff">
            <div class="<?php echo ( $footer == 1 ? 'second-carousel' : '' ); ?> owl-carousel">

                <?php 

                    $args = array(
                      'post_type'       => 'post',
                      'category__in'    => $category,
                      'order_by'        => 'ASC',
                      'posts_per_page'  => $number
                    );

                    $the_query = new WP_Query( $args ); 
                    while( $the_query->have_posts() ) : $the_query->the_post(); 

                    if( empty( $footer ) ) : ; ?>

                        <div class="item">
                          <div class="carouse-img"><?php the_post_thumbnail(); ?></div>
                        </div>

                    <?php else : ;  ?>

                        <div class="item">
                          <div class="car-img"><?php the_post_thumbnail(); ?></div>
                          <div class="car-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </div>
                        </div>

                    <?php 

                    endif; 
                    endwhile;
                    wp_reset_query();
                ?>                
            </div>
        </div>
           
        <?php
        echo $after_widget;
    }


    private function widget_fields() {
        
        $fields = array(

            'block_title' => array(
                'widget_id'         => 'title',
                'widget_form_title' => __( 'Title', 'context' ),
                'widget_form_type'  => 'text'
            ),

            'category_ids' => array(
                'widget_id'             => 'cat_ids',
                'widget_form_title'     => __( 'Select Categories', 'context' ),
                'widget_form_type'      => 'multicheckboxes',
                'widget_form_options'   => categories_lists()
            ),

            'limit_post'    => array(
                'widget_id'         => 'post_limit',
                'widget_form_title' => __( 'Number of posts:', 'context' ),
                'widget_form_type'  => 'number',
                'widget_default'    => 4,
            ),

            'footer-sidebar' => array(
                'widget_id'         =>'footer',
                'widget_form_title' => __( 'Show widget footer', 'context' ),
                'widget_form_type'  => 'checkbox'
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