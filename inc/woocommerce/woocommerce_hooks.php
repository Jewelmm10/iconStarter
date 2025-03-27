<?php
/**
 * WooCommerce Hooks
 */
 
/**
 * Archive Product
 */

add_action( 'wc_theme_thumbnail',                       'woocommerce_template_loop_product_thumbnail',       10 );
add_action( 'wc_shop_loop_item_title',                  'wc_template_loop_product_title',                    10 );
add_action( 'wc_shop_loop_item_title',                  'woocommerce_template_loop_price',                   10 );
add_action( 'wc_shop_loop_item_title',                  'woocommerce_template_loop_rating',                  10 );
add_action( 'wc_shop_loop_item_title',                  'woocommerce_template_loop_add_to_cart',             10 );
add_action( 'woocommerce_before_main_content',          'theme_content_wrapper',                             10 );
add_action( 'woocommerce_after_main_content',           'theme_content_wrapper_end',                         20 );
add_action( 'woocommerce_before_shop_loop',             'shop_loop_head',                                    10 );
add_action( 'woocommerce_before_shop_loop',             'theme_shop_loop',                                   20 );
add_action( 'woocommerce_after_shop_loop',              'theme_shop_loop_end',                               20 );

add_action( 'shop_loop_head',                           'theme_sorting',                      20);



//single shop page


remove_action( 'woocommerce_single_product_summary', 		'woocommerce_template_single_title', 	 5 );
remove_action( 'woocommerce_single_product_summary',        'woocommerce_template_single_meta',     40 );
remove_action( 'woocommerce_product_thumbnails',            'woocommerce_show_product_thumbnails',  20 );


add_action( 'woocommerce_single_product_summary', 		 	'custom_wc_template_single_title',       5 );
//add_action( 'woocommerce_single_product_summary', 		 	'custom_wc_template_single_price',     	10 );
add_action( 'woocommerce_before_single_product',         	'custom_wc_single_wrap',			    10 );
add_action( 'woocommerce_after_single_product',          	'custom_wc_sinlge_wrap_end',			10 );

add_action( 'woocommerce_before_single_product_summary',     'summary_wrap',		5 );
add_action( 'woocommerce_after_single_product_summary',     'summary_wrap_end',		 5 );

add_action( 'woocommerce_after_single_product_summary',     'tabs_related_product_wrap',		 5 );
add_action( 'woocommerce_after_single_product_summary',     'tabs_related_product_wrap_end',		30 );
add_action( 'woocommerce_checkout_before_customer_details',     'wc_customer_details',		    5 );
add_action( 'woocommerce_checkout_after_customer_details',      'wc_customer_details_end',		5 );
add_action( 'woocommerce_checkout_after_customer_details',      'wc_order_review',		10 );
add_action( 'woocommerce_checkout_after_order_review',      	'wc_order_review_end',		10 );
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
add_action( 'woocommerce_checkout_shipping', 'woocommerce_checkout_payment', 20 );

function wc_customer_details() {
	?>
	<div class="customer_details">
	<?php
}
function wc_customer_details_end() {
	?>
	</div>
	<?php
}

function wc_order_review() {
	?>
	<div class="order_review">
	<?php
}
function wc_order_review_end() {
	?>
	</div>
	<?php
}


function summary_wrap() {
	?>
	<div class="summary_wrap">
	<?php
}

function summary_wrap_end() {
	?>
	</div>
	<?php
}


function tabs_related_product_wrap() {
	?>
	<div class="tabs_related_product_wrap">
	<?php
}
function tabs_related_product_wrap_end() {
	?>
	</div>
	<?php
}
function custom_wc_single_wrap() {
	?>
	<div class="single_product overflow-hidden">
	<?php
}

function custom_wc_sinlge_wrap_end() {
	?>
	</div>
	<?php
}


function custom_wc_template_single_title() {
	the_title( '<h2 class="product-title capitalize text-xl md:text-2xl mb-3">', '</h2>' );
}

function custom_wc_template_single_price() {
?>

    <div class="py-5 border-y flex my-3">
	<?php
		global $product;  
		// Ensure product is set.
		if ( isset( $product ) ) {
			$regular_price = $product->get_regular_price();
			$sale_price    = $product->get_sale_price();
		
			if ( ! empty( $regular_price ) && empty( $sale_price ) ) {
				?>
				<p class="price"><?php echo wc_price( $regular_price ); ?></p>
				<?php
			} else {
				?>
				<p class="price">
					<?php
					if ( $product->is_on_sale() ) {
						echo '<del>' . wc_price( $regular_price ) . '</del> <ins>' . wc_price( $sale_price ) . '</ins>';
					} else {
						echo wc_price( $regular_price );
					}
					?>
				</p>
				<?php
			}
		}

		// Ensure product is set.
		if ($product && $product->is_type('variable')) {
			// Get available variations
			$variations = $product->get_available_variations();

			if (!empty($variations)) {
				foreach ($variations as $variation) {
					// Get variation object
					$variation_obj = wc_get_product($variation['variation_id']);
					
					// Get variation price
					$variation_regular_price = $variation_obj->get_regular_price();
					$variation_sale_price = $variation_obj->get_sale_price();

					// Check if on sale
					if (!empty($variation_sale_price)) {
						echo '<p class="price">' . $variation_obj->get_price_html() . '</p>';
					} else {
						echo '<p class="price">' . wc_price($variation_regular_price) . '</p>';
					}
				}
			}
		}


	?>
    </div>
<?php
}


//add_action( 'woocommerce_single_product_summary', 'organio_woocommerce_sg_social_share', 50 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 50 );
function organio_woocommerce_sg_social_share() { 
	
	 ?>
		<div class="woocommerce-social-share">
			<label><?php echo esc_html__('Share:', 'organio'); ?></label>
			<a class="text-2xl mr-3 fb-social" title="<?php echo esc_attr__('Facebook', 'organio'); ?>" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="ri-facebook-fill"></i></a>
	        <a class="text-2xl mr-3 tw-social" title="<?php echo esc_attr__('Twitter', 'organio'); ?>" target="_blank" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>%20"><i class="ri-twitter-line"></i></a>
	        <a class="text-2xl mr-3 pin-social" title="<?php echo esc_attr__('Pinterest', 'organio'); ?>" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&description=<?php the_title(); ?>%20"><i class="ri-pinterest-line"></i></a>
	        <a class="text-2xl mr-3 lin-social" title="<?php echo esc_attr__('LinkedIn', 'organio'); ?>" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>%20"><i class="ri-linkedin-line"></i></a>
    </div>
<?php }

add_action( 'woocommerce_no_products_found', function(){
    remove_action( 'woocommerce_no_products_found', 'wc_no_products_found', 10 );

    // HERE change your message below
    $message = __( 'Can\'t find what you\'re looking for? Knock us on Facebook/Instagram for Pre-order.', 'woocommerce' );

    echo '<p class="woocommerce-info">' . $message .'</p>';
}, 9 );



/**
 * Customize product description tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_custom_product_tabs' );
function woo_custom_product_tabs( $tabs ) {

    unset( $tabs['additional_information'] );  

    //Attribute Description tab
    $tabs['gallery'] = array(
        'title'     => __( 'Gallery', 'woocommerce' ),
        'priority'  => 20,
        'callback'  => 'woo_attrib_desc_tab_content'
    );

    return $tabs;

}

// New Tab contents

function woo_attrib_desc_tab_content() {
    global $product;

	$attachment_ids = $product->get_gallery_image_ids();

	if ( $attachment_ids && $product->get_image_id() ) {
		?>
		<div class="photo_gallery">
			<?php
			foreach ( $attachment_ids as $attachment_id ) { ?>			
			<a class="gallery-item" href="<?php echo wp_get_attachment_image_url( $attachment_id, 'large' ); ?>"  data-lightbox="photos">
	        	<img src="<?php echo wp_get_attachment_image_url( $attachment_id, 'large' ); ?>" alt="photo">
	      	</a> 
	      <?php } ?>
		</div>
		<?php
	} else {
		echo "<h4>No images in this gallery yet!</h4>";
	}
}

// add single product page image
add_action( 'woocommerce_single_product_summary', 'contact_numb', 40 );
function contact_numb(){
    ?>
	<div class="flex flex-col space-y-3">
		<a class="bg-primary hover:bg-secondary text-2xl font-semibold w-2/3 p-3 rounded-md text-white text-center" href="tel:01918762310"><i class="ri-phone-line mr-2"></i>+880 1918-762310</a>
		<a class="bg-secondary hover:bg-primary text-2xl font-semibold w-2/3 p-3 rounded-md text-white text-center" href="https://wa.me/8801918762310"><i class="ri-whatsapp-line mr-2"></i>+880 1918-762310</a>
	</div>
	
	<?php
}

add_filter( 'wc_product_sku_enabled', '__return_false' );