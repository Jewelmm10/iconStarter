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
                    <h3 class="widget_title">STAY CONNECTED</h3>                    
                    <p class="text-gray-200 mx-w-sm">Niketon ,Gulshan - 1, Dhaka 1212 , Dhaka, Bangladesh</p>
                    <p class="company-phone py-2"><a class="text-2xl font-semibold text-primary" href="tel:88019XXXXX">+880 19XX-XXXXXX</a></p>
                    <small class="text-primary">10AM - 7PM</small>
                    <p class="text-primary">Email: <a class="text-gray-200" href="mailto:bdinsiya@gmail.com">demo@gmail.com</a></p>
                </div>                
                <div class="footer_link  basis-1/2">
                    <h3 class="widget_title">Useful Links</h3>                   
                    <ul class="footer_menu">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms And Condition</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-link">
                    <h3 class="widget_title">We accept your payment</h3>
                    <div class="flex mb-8">
                        <img src="images/payment.png" alt="payment">
                    </div>
                    <h3 class="widget_title">Shipping partner</h3>
                    <div class="flex">
                        <img src="images/ship.png" alt="shipping">
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-10">
            <div class="border-y border-gray-600 py-4 flex items-center">
                <p class="text-gray-300 mr-2">Follow us:</p>
                <ul class="flex space-x-2">
                    <li><a class="social_link" href="#"><i class="ri-facebook-fill"></i></a></li>
                    <li><a class="social_link" href="#"><i class="ri-linkedin-fill"></i></a></li>
                    <li><a class="social_link" href="#"><i class="ri-instagram-line"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="bg-gray-900 py-3 mt-10">
            <div class="container overflow-hidden">
                <?php jawad_footer_credit(); ?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>