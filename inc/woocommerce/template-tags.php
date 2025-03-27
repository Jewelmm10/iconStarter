<?php

/**
 * shop page content wrapper
 */
function theme_content_wrapper() {
	?>	
	<div class="container woocommerce py-4">
		<div class="row">
	<?php
}

//shop page content wrapper end

function theme_content_wrapper_end() {
	?>
		</div>
	</div>
	<?php
}

function theme_shop_loop() {
	?>
	<div id="contents" class="col-md-9">
		
		
	<?php
}

function theme_shop_loop_end() {
	?>
	</div>
	<div id="aside" class="col-md-3">
		<?php
			dynamic_sidebar( 'shop' );
		?>
	</div>
	<?php
}


//shop loop head
function shop_loop_head() {
	?>
	<div class="product-toolbar">
		<div class="theme-shop-tools">
			<?php do_action( 'theme_breadcrumb' ); ?>
		</div>		
		<div class="theme-shop-tools">
			<?php do_action( 'theme_sorting' ); ?>
		</div>
	</div>	
	<?php
}

/**
 * shop view switcher
 */

if( ! function_exists( 'mugdho_shop_view_switcher' ) ) {
	function mugdho_shop_view_switcher() {
			$active_view = apply_filters( 'mugdho_default_view_switcher_view', 'grid' );
		?>
        <div class="product-toolbar">
        	<ul class="view-switcher nav">
				<li>
					<a class="switch-link active" id="grid-view-tab" data-bs-toggle="tab" data-bs-target="#grid-view"></a>
				</li>
				<li>
					<a class="switch-link" id="list-view-tab" data-bs-toggle="tab" data-bs-target="#list-view"></a>
				</li>
			</ul>
        </div>
		
		<?php
	}
}

/**
 * Output the end of page wrapper
 */
if( ! function_exists( 'mugdho_grid_view' ) ) {
	function mugdho_grid_view() {
		?>
		<div id="grid-view" class="woocommerce active">
		<?php
	}
}

/**
 * Output the end of page wrapper
 */
if( ! function_exists( 'mugdho_grid_view_end' ) ) {
	function mugdho_grid_view_end() {
		?>
		</div>
		<?php
	}
}

if( ! function_exists( 'mugdho_loop_stock_availability' ) ) {
	/**
	 * Outputs product's stock availability
	 */
	function mugdho_loop_stock_availability() {

		global $product;
		$availability = $product->get_availability();
		$stock_status = $availability['class'];
		
		if( $stock_status == 'out-of-stock' ) {
			$label = __( 'Out of Stock', 'mediacenter' ) ;
			$label_class = 'not-available';
		} else {
			$label = __( 'In Stock', 'mediacenter' ) ;
			$label_class = 'available';
		}

		echo apply_filters( 'mugdho_loop_stock_availability_html',
			sprintf( '<div class="availability"><label>%s</label><span class="%s">%s</span></div>',
				__( 'Availability:', 'mediacenter' ),
				$label_class,
				$label
			),
		$product );
	}
}
/**
 * Mugdho Pagination.
 *
 * @return void
 */
if ( ! function_exists( 'mugdho_woo_pagination' ) ) :
	function mugdho_woo_pagination() {

		$args = [
			'prev_text' 			=> '<i class="fa fa-angle-left"></i>',
			'next_text' 			=> '<i class="fa fa-angle-right"></i>',
			'before_page_number'	=> '<span class="link-page">',
			'after_page_number' 	=> '</span>',
		];

		$pagination = sprintf( '<nav class="woo-pagination justify-content-center">%1$s</nav>',
			paginate_links( $args )
		);

		echo $pagination;
	}
endif;


//single shop page 


if ( ! function_exists( 'single_product_main_content_wrap' ) ) {
	function single_product_main_content_wrap() {
	?>
	<div class="product-info-main-content">
		<div class="row">
			<div class="col-md-4">
				<?php do_action( 'single_product_media' ); ?>
			</div>	
			<div class="col-md-5">
				<?php do_action( 'single_product_main_content' ); ?>				
			</div>	
			<div class="col-md-3">
				<div class="selling-feature-sidebar">
					<div class="row align-items-center">
						<div class="col-12 col-sm-6 col-xl-12">
							<div class="d-flex align-items-center list-features">
								<div class="media-left me-3">
									<i class="fas fa-rocket"></i>
								</div>
								<div class="media-body">
									<h3 class="media-heading">Free Delivery</h3>
									<div class="desc">For order&nbsp;over 10,000Tk<br>Standard:&nbsp;50/100Tk<br><hr></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xl-12">
							<div class="d-flex align-items-center list-features">
								<div class="media-left me-3">
									<i class="fas fa-recycle"></i>
								</div>
								<div class="media-body">
									<h3 class="media-heading">3 Days Return</h3>
									<div class="desc">If goods have problems<br><hr></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xl-12">
							<div class="d-flex align-items-center list-features">
								<div class="media-left me-3">
									<i class="fas fa-money-check"></i>
								</div>
								<div class="media-body">
									<h3 class="media-heading h4">Secure Payment</h3>
									<div class="desc">100% secure payment<br><hr></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xl-12">
							<div class="d-flex align-items-center list-features">
								<div class="media-left me-3">
									<i class="far fa-comments"></i>
								</div>
								<div class="media-body">
									<h3 class="media-heading h4">9am-11pm Support</h3>
									<div class="desc">Dedicated support</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>							
		</div>
	</div>
	
	<?php		
	}
}