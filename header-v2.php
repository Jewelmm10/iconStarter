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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="style2 border-b">
        <div class="container">
            <div class="flex justify-between items-center p-2 md:p-0">
                <div class="w-2/4 md:w-1/4">
                    <div class="logo">
                        <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                    </div>
                </div>
                <div class="hidden md:block flex-1">
                    <ul class="flex justify-end border-b border-l">
                        <li><a class="block px-3.5 py-2 text-sm text-gray-700 hover:underline" href="#">About us</a>
                        </li>
                        <li><a class="block px-3.5 py-2 text-sm text-gray-700 hover:underline" href="#">Contact us</a>
                        </li>
                        <li><a class="block px-3.5 py-2 text-sm text-gray-700 hover:underline" href="tel:989-9700">Free
                                Phone Consultation +1 (514) 989-9700</a></li>
                    </ul>
                    <nav class="nav_menu !bg-transparent">
                        <ul>
                            <li><a class="active" href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li class="manu_search_btn"><a href="#">search</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="menu_show">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </div>
        <div class="mobile_side_menu">
            <div class="text-center flex justify-between">
                <div class="logo">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </div>
                <span class="close_menu"><i class="ri-close-line"></i></span>
            </div>
            <nav class="my-6">
                <ul class="flex flex-col">
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </nav>
        </div>
    </header>