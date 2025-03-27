<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<div class="page_head">
	<div class="container text-center">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>		
	</div>
</div>
<div class="filtering">
	<div class="container">
		<div class="row">
			<div class="cat col-md-4">				
				<select class="form-select">
					<?php 

				        $categories = get_categories();				       
				        foreach( $categories as $category ) { ?>
				        	<option selected value="<?php echo $category->name; ?>"><a href="#"><?php echo $category->name; ?></a></option>
				           
				    <?php  }
					?>
					
				  
				</select>
			</div>
		</div>		
	</div>				
</div>
<?php if ( have_posts() ) : ?>
	<div class="container py-5">
		<div class="archive row row-cols-md-3">

		<?php while ( have_posts() ) :  the_post(); ?>		
	        
	        <div class="col-md-4 single_archive_item">
	        	<div class="single_archive_item_inner">
	        		<a href="<?php the_permalink(); ?>">
	        			<div class="image">
	        				<?php the_post_thumbnail(); ?>
	        			</div>
	        			<div class="content">
	                        <p style="text-transform: capitalize">Bashundhara R/A, Dhaka</p>
	                        <h3><?php the_title(); ?></h3>
	                        <p style="text-transform: capitalize">1500 sq. ft.</p>
	                    </div>
	        		</a>
	        	</div>
	        </div>
	    
		<?php endwhile; ?>
		</div>
	</div>
<?php else : ?>
	<?php get_template_part( 'template-parts/contents/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
