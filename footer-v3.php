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
<footer class="style3 footer style-1 relative bg-gray-900">
    <div class="relative pt-16">
        <div class="container">
            <div class="flex flex-col md:flex-row gap-5">
                <div class="w-full md:w-4/12">
                    <div class="footer-widget-box text-white">
                        <div class="footer-logo">
                            <?php if( class_exists( 'Redux' ) ) {			
				            ?>
                            <a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php 
						$default_logo_html = '<img src="https://placehold.co/200x100">';
						echo apply_filters( 'icon_footer_logo_html', $default_logo_html );
					?>
                            </a>
                            <?php } ?>
                        </div>
                        <div class="my-5">
                            <ul class="flex flex-col space-y-2 mt-6">
                                <li><a href="tel:<?php echo $text = apply_filters('icon_footer_number', ''); ?>"><i
                                            class="ri-phone-fill"></i><?php echo $text = apply_filters('icon_footer_number', ''); ?></a>
                                </li>
                                <li><a href="mailto:<?php echo $text = apply_filters('icon_footer_email', ''); ?>"><i
                                            class="ri-send-plane-fill"></i>
                                        <?php echo $text = apply_filters('icon_footer_email', ''); ?></a></li>
                            </ul>
                        </div>
                        <p class="text-sm text-white">Follow Us:</p>
                        <div class="flex items-center mt-2">
                            <ul class="flex space-x-2">
                                <?php $socials = apply_filters('icon_footer_social', '');
                
                foreach ($socials as $key => $value) {
                    if (!empty($value)) { 

                ?>

                                <a class="social-link" href="<?php echo $value; ?>">
                                    <i class="<?php echo $key; ?>"></i>
                                </a>
                                <?php
                    }
                }
                 
                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-3/12 md:ml-[8.333%]">
                    <div class="footer-widget-box">
                        <h3 class="widget_title">Information</h3>
                        <ul class="footer_menu">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms And Condition</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="w-full md:w-2/12">
                    <div class="footer-widget-box">
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
                </div>
                <div class="w-full md:w-3/12">
                    <div class="footer-link">
                        <h3 class="widget_title">Search</h3>
                        <div class="flex">
                            <input
                                class="bg-transparent text-gray-200 border border-gray-200 outline-none py-1.5 px-4 mr-3"
                                type="text" placeholder="Search">
                            <input class="bg-primary px-4 py-1.5 text-white rounded-sm cursor-pointer" type="submit"
                                value="Search">
                        </div>
                        <p class="text-gray-300 text-sm my-5">Consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et and the part of new memory dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-t">
        <div class="container">
            <div class="flex justify-end items-center py-5">
                <div class="mr-20">
                    <p class="text-sm text-gray-400 text-center">
                        <?php echo $text = apply_filters('icon_footer_credit', ''); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>