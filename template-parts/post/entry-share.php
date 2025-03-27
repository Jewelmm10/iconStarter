<?php
/**
 * Displays the post sharing options
 *
 * @package Mugdho
 */
?>

<div class="share-button">                               
    <span>Shares:</span>
    <a class="fb-share share-btn" target="_top" rel="nofollow" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"><i class="fab fa-facebook-f me-3"></i>Share</a>
    <a class="tw-share share-btn" target="_top" rel="nofollow" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>"><i class="fab fa-twitter me-3"></i>Tweet</a>
</div>