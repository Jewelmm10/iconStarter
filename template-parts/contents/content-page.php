<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package mugdho
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content inner-bottom-sm">
		<?php the_content(); ?>
    	<?php 
    		wp_link_pages( array( 
    			'before' 		=> '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'mugdho' ) . '</span>', 
    			'after' 		=> '</div>', 
    			'link_before' 	=> '<span>', 
    			'link_after' 	=> '</span>' 
			) ); 
		?>

	</div>
</div>