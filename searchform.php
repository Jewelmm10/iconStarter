<?php global $s;
/**
 * The template for the search widget
 */

// The value of the field
?>
<div class="g-search">
	<form role="search" method="get" class="post-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="g-search-field" placeholder="<?php echo __( 'Type to search', 'mugdho' ); ?>" value="<?php echo $s;?>" name="s" title="Search for:">								
		<button type="submit" class="g-submit">
			<i class="fa fa-search"></i>
		</button>
	</form>
</div>
