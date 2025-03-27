<?php 

class Product_by_cat extends WP_widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        $widget_ops = array( 
            'classname'     => 'product_from_cat',
            'description'   => __( 'Displays posts from selected category.', 'mugdho' )
        );
        parent::__construct( 'product_from_cat', __( 'Mugdho:Product by Cat', 'mugdho' ), $widget_ops );
    }

    public function widget( $args, $instance) { 
        extract( $args );
        if( empty( $instance ) ) {
            return ;
        }

        $title          = empty( $instance['title'] ) ? '' : $instance['title'];
        $cat_id         = empty( $instance['cat_id'] ) ? '' : $instance['cat_id'];
        $style          = empty( $instance['block_layout'] ) ? '0' : $instance['block_layout'];
        $post_count     = empty( $instance['post_limit'] ) ? '5' : $instance['post_limit'];

        ?>

        <?php
            echo $before_widget; 
            $args = [
                'post_type'       => 'product',
                'posts_per_page'  => $post_count,
                'tax_query'       => [
                  [
                      'taxonomy'      => 'product_cat',
                      'field'         => 'id',
                      'terms'         => $cat_id,
                      'operator'      => 'IN'
                  ]
                ]
            ];
            $cat_post = new WP_Query($args);
        
        if ( $style == 'layout1' ) {          
        ?>
        <div class="bg-gray-100 py-16 relative">
            <div class="blob w-12 h-32 bg-primary rounded-full blur-3xl opacity-40 absolute left-32 -top-0"></div>
            <div class="blob w-12 h-32 bg-secondary rounded-full blur-3xl opacity-30 absolute right-32 -bottom-0"></div>
            <div class="container">
                <div class="flex flex-col md:flex-row items-center space-y-4">
                    <div class="w-full md:w-1/3">
                        <h3 class=" font-semibold text-3xl">Weekly Best <br> Products for you</h3>
                        <p class="text-textDark my-5 max-w-sm">A top-rated product designed to meet your needs, offering quality and value. Don't miss out!</p>
                        <a class="btn flex items-center justify-between bg-primary text-white rounded-full max-w-[220px] uppercase font-semibold" href="#">See all products <span class="bg-white flex justify-center items-center w-8 h-8 text-center rounded-full"><i class="text-primary ri-arrow-right-s-line"></i></span></a>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="grid grid-cols-2 gap-4">
                            <?php 
                                while( $cat_post->have_posts() ) : $cat_post->the_post(); 
                                global $product;
                                $generic 	    = get_the_terms(  get_the_ID(), 'mc_generic'  );

                                if( empty( $generic[0]->name ) ){
                                    $link = home_url();
                                    $gen  = 'not found';
                                }else {
                                    $link = get_term_link( $generic[0]->slug, 'mc_generic' );
                                    $gen  = $generic[0]->name;
                                }
                            ?>
                            <div class="produt bg-white p-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="w-full mb-5 md:max-w-[190px]">
                                    <div class="produc_thumb overflow-hidden">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                    </div>
                                </div>
                                <div class="enty_content mb-3">
                                    <div class="entry-meta flex text-darkLight text-sm">
                                        <p class="entry-date mr-4">GEN:<a class="ml-2" href="<?php echo $link; ?>"><?php echo $gen; ?></a></p>
                                    </div>
                                    <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <div class="description text-darkLight">
                                        <div class="flex font-semibold">
                                            <?php echo $product->get_price_html(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                endwhile; 
                                wp_reset_postdata();
                            ?>            
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>
        <?php 
           } else if ( $style == 'layout2' ) {
        ?> 
        <div class="flex border"><h3 class="heading-title m-0"><?php echo $title; ?></h3></div>
        <div class="prod-caro my-5">

             <?php 
                $args = [
                    'post_type'       => 'product',
                    'posts_per_page'  => $post_count,
                    'tax_query'       => [
                      [
                          'taxonomy'      => 'product_cat',
                          'field'         => 'id',
                          'terms'         => $cat_id,
                          'operator'      => 'IN'
                      ]
                    ]
                ];

                $query = new WP_Query( $args );
                while( $query->have_posts() ) : $query->the_post();
                global $product;
                $generic = get_the_terms(get_the_ID(), 'mc_generic');
             ?>
             <div class="item">
                <div class="border p-2">
                    <div class="thumb overflow-hidden">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="h-[45px] title capitalize font-semibold text-black my-2 hover:underline">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     </div>                    
                    <div class="flex font-semibold">
                        <?php echo $product->get_price_html(); ?>
                    </div>
                    <div><?php echo do_shortcode( '[add_to_cart Class="cart-btn" style="border:0; padding:0"  show_price="false" id=' . $product->id . ']' ) ?></div>
                </div>
            </div> 
             <?php 
                endwhile;
                wp_reset_postdata();
             ?>             
        </div>
        <div class="flex justify-center"><a class="btn uppercase border border-primary text-primary hover:bg-primary hover:text-white" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">Show All</a></div>
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
                'widget_form_title' => __( 'Title', 'mugdho' ),
                'widget_form_type'  => 'text'
            ),

            'category_id'   => array(
                'widget_id'             => 'cat_id',
                'widget_form_title'     => __( 'Select Category', 'mugdho' ),
                'widget_form_type'      => 'select',
                'widget_form_options'   => product_cat_list()
            ),            

            'block_layout' => array(
                'widget_id'           => 'block_layout',
                'widget_form_title'   => __( 'Block Layouts', 'news-portal' ),
                'widget_default'      => 'layout1',
                'widget_form_type'    => 'selector',
                'widget_form_options' => array(
                    'layout1' => esc_url( get_template_directory_uri() . '/assets/img/layout1.png' ),
                    'layout2' => esc_url( get_template_directory_uri() . '/assets/img/layout2.png' ),
                )
            ),

            'limit_post'    => array(
                'widget_id'          => 'post_limit',
                'widget_form_title' => __( 'Number of posts:', 'mugdho' ),
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