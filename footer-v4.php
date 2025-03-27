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
<footer class="style4 footer pt-20">

    <div class="footer-widget-area relative z-20">
        <div class="container">
            <div class="trow">
                <div class="trow-gap w-full md:w-1/3 lg:w-1/3">
                    <h3 class="footer-title text-white text-xl uppercase mb-5">Editor picks</h3>
                    <div class="posts">
                        <div class="flex mb-5">
                            <div class="f_thumb w-[120px]">
                                <img src="<?php echo ICON_STARTER_URL; ?>/images/news1.jpg">
                            </div>
                            <div class="content flex flex-col">
                                <h3><a class="text-white hover:text-primary transition-all duration-150" href="">Eminem
                                        – Stronger Than I Was</a>
                                </h3>
                                <span class="text-xs text-gray-300">March 10, 2025</span>
                            </div>
                        </div>
                        <div class="flex mb-5">
                            <div class="f_thumb w-[120px]">
                                <img src="<?php echo ICON_STARTER_URL; ?>/images/news2.jpg">
                            </div>
                            <div class="content flex flex-col">
                                <h3><a class="text-white hover:text-primary transition-all duration-150" href="">Eminem
                                        – Stronger Than I Was</a>
                                </h3>
                                <span class="text-xs text-gray-300">March 10, 2025</span>
                            </div>
                        </div>
                        <div class="flex mb-5">
                            <div class="f_thumb w-[120px]">
                                <img src="<?php echo ICON_STARTER_URL; ?>/images/news3.jpg">
                            </div>
                            <div class="content flex flex-col">
                                <h3><a class="text-white hover:text-primary transition-all duration-150" href="">Eminem
                                        – Stronger Than I Was</a>
                                </h3>
                                <span class="text-xs text-gray-300">March 10, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="trow-gap w-full md:w-1/3 lg:w-1/3 mb-3">
                    <h3 class="footer-title text-white text-xl uppercase mb-5">POPULAR POSTS</h3>
                    <div class="posts">
                        <div class="flex mb-5">
                            <div class="f_thumb w-[120px]">
                                <img src="<?php echo ICON_STARTER_URL; ?>/images/news2.jpg">
                            </div>
                            <div class="content flex flex-col">
                                <h3><a class="text-white hover:text-primary transition-all duration-150" href="">Eminem
                                        – Stronger Than I Was</a>
                                </h3>
                                <span class="text-xs text-gray-300">March 10, 2025</span>
                            </div>
                        </div>
                        <div class="flex mb-5">
                            <div class="f_thumb w-[120px]">
                                <img src="<?php echo ICON_STARTER_URL; ?>/images/news3.jpg">
                            </div>
                            <div class="content flex flex-col">
                                <h3><a class="text-white hover:text-primary transition-all duration-150" href="">Eminem
                                        – Stronger Than I Was</a>
                                </h3>
                                <span class="text-xs text-gray-300">March 10, 2025</span>
                            </div>
                        </div>
                        <div class="flex mb-5">
                            <div class="f_thumb w-[120px]">
                                <img src="<?php echo ICON_STARTER_URL; ?>/images/news1.jpg">
                            </div>
                            <div class="content flex flex-col">
                                <h3><a class="text-white hover:text-primary transition-all duration-150" href="">Eminem
                                        – Stronger Than I Was</a>
                                </h3>
                                <span class="text-xs text-gray-300">March 10, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trow-gap w-full md:w-1/3 lg:w-1/3 mb-3">
                    <h3 class="footer-title text-white text-xl uppercase mb-5">POPULAR CATEGORY
                    </h3>
                    <ul class="f_catList">
                        <li>
                            <a href="#">
                                <span class="cat_name">Racing</span>
                                <span class="float-right">12</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="cat_name">Sport</span>
                                <span class="float-right">17</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="cat_name">New Look</span>
                                <span class="float-right">10</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="cat_name">Interiors</span>
                                <span class="float-right">16</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="cat_name">Gadgets</span>
                                <span class="float-right">15</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="cat_name">Make it Modern</span>
                                <span class="float-right">6</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="divider w-4/5 m-auto h-[1px] border-t border-gray-400 my-5"></div>
    <div class="container relative z-20 mt-32">
        <div class="trow gap-8 items-center justify-between">
            <div class="trow-gap w-1/6 items-center">
                <?php
                    if( has_custom_logo() ) {
                        $logo     = get_theme_mod( 'custom_logo' );
                        $logo_url = wp_get_attachment_image_url( $logo, 'full' );
                    ?>
                <a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo ICON_STARTER_URL; ?>/images/logo.png">
                </a>
                <?php } ?>
            </div>
            <div class="trow-gap w-2/6">
                <h3 class="footer-title text-white font-bold text-xl uppercase mb-5">ABOUT US</h3>
                <p class="text-white">Newspaper is your news, entertainment, music fashion website. We provide
                    you with
                    the latest breaking
                    news and videos straight from the entertainment industry.</p>
            </div>
            <div class="trow-gap w-2/6">
                <h3 class="footer-title text-white font-bold text-xl uppercase mb-5">FOLLOW US</h3>
                <ul class="followup flex space-x-2">
                    <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                    <li><a href="#"><i class="ri-twitter-x-line"></i></a></li>
                    <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
                    <li><a href="#"><i class="ri-github-fill"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-black py-3 text-white relative z-20 mt-14">
        <div class="container">
            <p>&copy; 2025 Icon Starter Theme | All reserved</p>
        </div>
    </div>
</footer>