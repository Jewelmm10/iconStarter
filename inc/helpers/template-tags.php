<?php
/**
 * Custom template tags for this theme
 *
 * @package mugdho
 */

function get_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $add_attr = []  ) {
	$custom_thumbnail = '';

	if ( null === $post_id ) {
		$post_id = get_the_ID();
	}

	if ( has_post_thumbnail( $post_id ) ) {
		$default_attributes = [
			'loading'	=> 'lazy',
		];

		$attributes = array_merge( $add_attr, $default_attributes );

		$custom_thumbnail = wp_get_attachment_image(
			get_post_thumbnail_id( $post_id ),
			$size,
			false,
			$attributes
		);
	}
	return $custom_thumbnail;
}

/**
 * Renders Custom Thumbnail with Lazy Load.
 *
 */
function the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attributes = [] ) {
	echo get_custom_thumbnail( $post_id, $size, $additional_attributes );
}

/**
 * Prints HTML with meta information for the content post-date/time.
 * 
 * @return void
 */
if ( ! function_exists( 'mugdho_posted_on' ) ) :
	function mugdho_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1s">%2s</time>';

	// Post is modified ( when post publish time is not equal to post modified time )
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1s">%2s</time><time class="updated" datetime="%3s">%4s</time>';
	}
	$time_string =  sprintf( $time_string, 
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_attr( get_the_date('d F, Y') ),
		esc_attr( get_the_modified_date( DATE_W3C ) ),
		esc_attr( get_the_modified_date( 'd F, Y' ) )
	);

	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', 'mugdho' ),
		'<a href="' . esc_url( get_permalink() ) . '">' . $time_string. '</a>'
	);
	
	echo '<span class="posted-on">' . $posted_on . '</span>';
	}
endif;

/**
 * Prints HTML with meta information for the current author.
 * 
 * @return void
 */
if ( ! function_exists( 'mugdho_posted_by' ) ) : 
	function mugdho_posted_by () {
	 	
	 	$byline = sprintf(
	 		esc_html_x( '%1$s', 'post author', 'mugdho' ),
	 		'<a class="mx-2 d-flex align-items-center text-uppercase" href="'.
	 			esc_url( get_author_posts_url(
	 			get_the_author_meta( 'ID' )	) ) .'">
	 			<span class="author-img"><img src="' . get_avatar_url( get_the_author_meta('ID') ) . '" class="rounded-circle"></span>'.
	 			esc_html( get_the_author() ) . '</a>'
	 	);

	 	echo $byline;
	}
endif;

// Show Post Content (excerpt or full post)
//...............................................
if ( ! function_exists( 'mugdho_excerpt' ) ) :
	function mugdho_excerpt( $trim_character_count = 0 ) {
		if ( has_excerpt() || 0 === $trim_character_count ) {
			the_excerpt();
			return;
		}

		$excerpt = wp_html_excerpt( get_the_excerpt(), $trim_character_count, '...' );

		echo $excerpt;
	}
endif;

// Display Post Excerpt
//...............................................
if ( ! function_exists( 'mugdho_excerpt_more' ) ) :
	function mugdho_excerpt_more( $more = '' ) {

		if ( ! is_single() ) {
			$more = sprintf( '<a class="more-link" href="%1$s">%2$s<i class="fa fa-angle-right"></i></a>',
				get_permalink( get_the_ID() ),
				__( 'Read more', 'mugdho' )
			);
		}
		echo $more;
	}
endif;
/**
 * Mugdho Pagination.
 *
 * @return void
 */
if ( ! function_exists( 'mugdho_pagination' ) ) :
	function mugdho_pagination() {

		$args = [
			'prev_text' 			=> '<i class="ri-arrow-left-s-line"></i>',
			'next_text' 			=> '<i class="ri-arrow-right-s-line"></i>',
			'before_page_number'	=> '<span class="page-link">',
			'after_page_number' 	=> '</span>',
		];

		$pagination = sprintf( '<nav class="pagination flex gap-3 my-10">%1$s</nav>',
			paginate_links( $args )
		);

		echo $pagination;
	}
endif;