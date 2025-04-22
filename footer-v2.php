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
<footer class="style2">
    <div class="container overflow-hidden">
        <div class="flex space-y-3 md:space-x-3 flex-col md:flex-row justify-between">
            <div class="w-1/4">
                <h3 class="widget_title"><?php echo $text = apply_filters('icon_address_sec_title', ' About us'); ?>
                </h3>
                <p class="text-gray-300 mx-w-sm mb-2"><?php echo $text = apply_filters('icon_footer_details', ''); ?>
                </p>
                <div class="contact space-y-2">
                    <p>
                        <i class="icon ri-map-pin-line"></i>
                        <span><?php echo $text = apply_filters('icon_footer_address', ''); ?></span>
                    </p>
                    <p>
                        <i class="icon ri-phone-fill"></i>
                        <span><?php echo $text = apply_filters('icon_footer_number', ''); ?></span>
                    </p>
                    <p>
                        <i class="icon ri-mail-line"></i>
                        <span><?php echo $text = apply_filters('icon_footer_email', ''); ?></span>
                    </p>
                </div>

            </div>
            <div class="footer-link">
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
                <h3 class="widget_title">Social Link</h3>
                <ul class="footer_menu">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms And Condition</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>

            </div>

            <div class="footer-link">
                <h3 class="widget_title">News Letter</h3>
                <p class="text-sm text-gray-400">Mail us for latest news</p>
                <form action="">
                    <label class="font-semibold text-sm text-gray-400">Email</label>
                    <input class="w-full p-2 bg-gray-50 outline-none my-2" type="email">
                    <input class="border border-gray-50 uppercase bg-gray-600 w-full text-gray-50 py-2 cursor-pointer"
                        type="submit" value="subscribe">
                </form>
            </div>
        </div>
    </div>
    <div class="border-t border-gray-500 py-3 mt-10">
        <div class="container overflow-hidden">
            <p class="text-sm text-gray-400 text-center"><?php echo $text = apply_filters('icon_footer_credit', ''); ?>
            </p>
        </div>
    </div>
</footer>
</body>

</html>