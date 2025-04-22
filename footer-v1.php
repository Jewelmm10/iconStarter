<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 * 
 * @package Mugdho
 */

?>


<!-- footer -->
<footer class="style1">
    <div class="container overflow-hidden">
        <div class="footer_top">
            <div class="footer-link md:border-r border-gray-600 pr-10">
                <h3 class="widget_title"><?php echo $text = apply_filters('icon_address_sec_title', ''); ?></h3>
                <p class="text-gray-200 mx-w-sm"><?php echo $text = apply_filters('icon_footer_address', ''); ?></p>
                <p class="company-phone py-2"><a class="text-2xl font-semibold text-primary"
                        href="tel:<?php echo $text = apply_filters('icon_footer_number', ''); ?>"><?php echo $text = apply_filters('icon_footer_number', ''); ?></a>
                </p>
                <small class="text-primary"><?php echo $text = apply_filters('icon_footer_schedule', ''); ?></small>
                <p class="text-primary">Email: <a class="text-gray-200"
                        href="mailto:<?php echo $text = apply_filters('icon_footer_email', ''); ?>"><?php echo $text = apply_filters('icon_footer_email', ''); ?></a>
                </p>
            </div>
            <div class="footer_link  basis-1/2">
                <h3 class="widget_title">Useful Links</h3>

                <?php if ( has_nav_menu( 'useful_link' ) ) : 
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'useful_link',
                            'menu_class'      => 'footer_menu',
                        )
                    );
                    endif; ?>
            </div>
            <div class="footer-link">
                <h3 class="widget_title"><?php echo $text = apply_filters('icon_footer_media_text1', ''); ?></h3>
                <div class="flex mb-8">
                    <?php if( class_exists( 'Redux' ) ) {	
						$default_media = '<img src="https://placehold.co/200x100">';
						echo apply_filters( 'icon_footer_media1', $default_media );
					 } ?>
                </div>
                <h3 class="widget_title"><?php echo $text = apply_filters('icon_footer_media_text2', ''); ?></h3>
                <div class="flex">
                    <?php if( class_exists( 'Redux' ) ) {	
						$default_media2 = '<img src="https://placehold.co/200x100">';
						echo apply_filters( 'icon_footer_media2', $default_media2 );
					 } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-10">
        <div class="border-y border-gray-600 py-4 flex items-center">
            <p class="text-gray-300 mr-2">Follow us:</p>
            <ul class="flex space-x-2">
                <?php $socials = apply_filters('icon_footer_social', '');
                
                    foreach ($socials as $key => $value) {
                        if (!empty($value)) { 

                    ?>

                <a class="social_link" href="<?php echo $value; ?>">
                    <i class="<?php echo $key; ?>"></i>
                </a>
                <?php
                        }
                    }
                     
                    ?>

            </ul>
        </div>
    </div>
    <div class="bg-gray-900 py-3 mt-10">
        <div class="container overflow-hidden">
            <div class="text-center">
                <p class="text-gray-300"><?php echo $text = apply_filters('icon_footer_credit', ''); ?></p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>