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

    <header class="style3">
        <div class="container">
            <div class="main_head">
                <div class="logo">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </div>
                <form action="" method="get" class="search_product">
                    <input id="search_input" class="input_search" type="text"
                        placeholder="Search by name, category, brand" name="s" id="keyword">
                    <input type="hidden" name="post_type" value="product" />
                    <button type="submit" class="search_btn"><i class="text-gray-800 ri-search-line"></i></button>
                    <div class="search_result">
                        <ul class="text-white">
                            <li>Please wait..</li>
                        </ul>
                    </div>
                </form>
                <div class="hidden md:flex">
                    <a href="#">Sign In/ Sign Up</a>
                </div>
                <div class="menu_show">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </div>
        <nav class="nav_menu">
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>
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