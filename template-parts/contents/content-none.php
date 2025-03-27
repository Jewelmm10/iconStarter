<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package mugdho
 */

?>

<section class="no-results not-found">
	<header class="page-header text-center">
		<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'mugdho' ); ?></h1> 
	</header>
	

	<div class="page-content-none text-center">

		<?php if ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'mugdho' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mugdho' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
</section>
