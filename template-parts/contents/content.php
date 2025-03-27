<?php
/**
 * Template part for displaying posts
 *
 * @package mugdho
 */

?>

<div class="blog-item">
	<article class="grid gap-5 grid-cols-1">
		<div class="full-blog">
			<div class="w-full rounded-md overflow-hidden h-[260px]">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
		<div class="enty_content mb-3">
			<div class="entry-meta flex text-darkLight text-sm">
				<p class="entry-date mr-4 uppercase"><?php the_time( 'M d, Y' ); ?></p>
				<p class="entry-comment"><i class="mr-3 text-secondary ri-chat-4-line"></i>
					<?php comments_popup_link( esc_html__( '0', 'jawad' ), '1 Comment', '% Comments' ); ?>
				</p>
			</div>
			<h2><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="description text-darkLight">
				<?php echo wp_trim_words(get_the_excerpt(), 10); ?>
			</div>
			<a class="read_me" href="<?php the_permalink(); ?>">Read More</a>
		</div>
	</article>  
</div>        
