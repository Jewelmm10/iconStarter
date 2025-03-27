<?php

/**
 * The template for displaying the header
 *
 * Contains the closing of the #content div and all content after.
 * 
 * @package Mugdho
 */

?>
<!DOCTYPE html>

<html lang="<?php language_attributes(); ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Katen - Minimal Blog &amp; Magazine HTML Theme">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- <header class="bg-white sticky -top-20 z-30 mb-2">
        <div class="hidden md:block head-top border-b border-t-4 border-t-primary mb-2">
            <div class="container flex justify-end items-center">
                <div class="header-notice"> 
                    <p class="text-xs">Need help? <span>Contact us:</span>  
                    <a class="font-semibold hover:text-primary" href="mailto:bdinsiya@gmail.com">bdinsiya@gmail.com</a></p>
                </div>
                <div class="social flex space-x-3 border-l pl-3 ml-3 py-3">
                    <a href="#"><i class="ri-facebook-fill"></i></a>
                    <a href="#"><i class="ri-twitter-x-line"></i></a>
                    <a href="#"><i class="ri-linkedin-fill"></i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex justify-between items-center py-1">
                <div class="logo w-[100px]">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </div>
                <form action="<?php echo esc_url(home_url('/')); ?>" method="get" autocomplete="off" class="hidden search_product">
                    <input id="search-input" class="input_search" type="text" placeholder="Search by name, category, brand" name="s" id="keyword">
					<input type="hidden" name="post_type" value="product" />
                    <button type="submit" class="search-btn"><i class="text-gray-800 ri-search-line"></i></button>
                    <div class="search_result absolute top-10 left-0 bg-gray-800 p-4 w-full z-50">
                        <ul class="text-white">
                            <li>Please wait..</li>
                        </ul>
                    </div>
                </form>
                <div class="hidden md:flex divide-x-2">
                    <div class="w-1/2">
                        <div class="flex items-center">
                            <i class="text-2xl text-primary mr-3 ri-phone-line"></i>
                            <div class="text flex flex-col">
                                <p class="text-sm">Call Us Now</p>
                                <strong class="text-sm">01918762310</strong>
                            </div>
                        </div>
                    </div> 
                    <div class="w-1/2">
                        <div class="ml-6 flex items-center">
                            <i class="text-2xl text-primary mr-3 ri-user-line"></i>
                            <a href="<?php echo esc_url(home_url('/')); ?>my-account" class="text flex flex-col">
                                <strong class="text-sm">Account</strong>
                                <p class="text-sm text-nowrap">Login Or Register</p>
                            </a>
                        </div>
                    </div>        
                </div>
                <div class="menu md:hidden cursor-pointer w-10 h-10 text-xl flex items-center justify-center mr-2 text-gray-500">
                    <i class="ri-menu-line"></i>
                </div>
            </div>            
        </div>
        <nav class="hidden md:block bg-secondary border border-t-gray-200 border-b-gray-700 lg-nav">
            <div class="container">
                <?php 
                    wp_nav_menu(
                        [
                            'theme_location'    => 'primary',
                            'menu_class'        => 'flex',
                            'container'         => '',
                        ]
                    );  
                ?> 
            </div>
        </nav>
        <div class="search bg-orange-50 p-1 md:hidden my-1">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" autocomplete="off" class="search_product">
                <input id="search-input" class="input_search" type="text" placeholder="Search by name, category, brand" name="s" id="keyword">
                <input type="hidden" name="post_type" value="product" />
                <button type="submit" class="search-btn"><i class="text-gray-800 ri-search-line"></i></button>
                <div class="search_result absolute top-10 left-0 bg-gray-800 p-4 w-full z-50">
                    <ul class="text-white">
                        <li>Please wait..</li>
                    </ul>
                </div>
            </form>
        </div>
        <div class="mobile_nav bg-gray-200 py-6 px-3 fixed top-0 -left-full transition-all duration-300 ease-in-out h-full w-full md:hidden z-50">
            <div class="text-center flex justify-between">

               <div class="w-1/4">
               <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                ?>
               </div>

                <span class="close_menu cursor-pointer block w-10 h-10 text-4xl text-gray-400"><i class="ri-close-line"></i></span>
            </div>
            <nav class="my-6">
                <?php 
                    wp_nav_menu(
                        [
                            'theme_location'    => 'primary',
                            'menu_class'        => 'flex flex-col',
                            'container'         => '',
                        ]
                    );  
                ?> 
            </nav>
        </div>
    </header> -->

    <?php get_header('v2'); ?>

   