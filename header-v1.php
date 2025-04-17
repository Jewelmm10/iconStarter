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

    <header class="style1">
        <div class="head_top">
            <div class="container flex justify-end items-center">
                <div class="header-notice">
                    <p class="text-xs top_text"><?php echo apply_filters('icon_top_bar_text', ''); ?></p>
                </div>
                <?php $socials = apply_filters('icon_top_social_icons', '');
                echo "<pre>";
                    var_dump($socials['top_social_icons']);
                echo "</pre>";
                     
                ?>
                <div class="social">
                    <a href="#"><i class="ri-facebook-fill"></i></a>
                    <a href="#"><i class="ri-twitter-x-line"></i></a>
                    <a href="#"><i class="ri-linkedin-fill"></i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main_head">
                <div class="logo">
                    <?php
				if( has_custom_logo() ) {
					$logo     = get_theme_mod( 'custom_logo' );
					$logo_url = wp_get_attachment_image_url( $logo, 'full' );
				?>
                    <a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo $logo_url ?>">
                    </a>
                    <?php
					} elseif( class_exists( 'Redux' ) ) {			
				?>
                    <a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php 
						$default_logo_html = '<img src="' . get_template_directory_uri() . '/images/je.png">';
						echo apply_filters( 'iconstarter_display_logo', $default_logo_html );
					?>
                    </a>
                    <?php } else { ?>
                    <h2>
                        <a class="logo-link"
                            href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo bloginfo( 'name' ); ?></a>
                    </h2>

                    <?php } ?>
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
                    <?php
                        $enable = apply_filters( 'icon_header_account_enable', true ); 
                        if( $enable ) {
                    ?>
                    <div class="w-1/2">
                        <div class="ml-6 flex items-center">
                            <i class="text-2xl text-primary mr-3 ri-user-line"></i>
                            <a href="" class="text flex flex-col">
                                <strong class="text-sm">Account</strong>
                                <p class="text-sm text-nowrap">Login Or Register</p>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="menu_show">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </div>
        <nav class="nav_menu">
            <?php if ( has_nav_menu( 'primary' ) ) : 
            wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'container_class' => 'container',
                )
            );
        ?>
            <?php endif; ?>
        </nav>

        <div class="search">
            <form action="" method="get" autocomplete="off" class="!block search_product">
                <input id="search-input" class="input_search" type="text" placeholder="Search by name, category, brand"
                    name="s" id="keyword">
                <input type="hidden" name="post_type" value="product" />
                <button type="submit" class="search_btn"><i class="text-gray-800 ri-search-line"></i></button>
                <div class="search_result">
                    <ul class="text-white">
                        <li>Please wait..</li>
                    </ul>
                </div>
            </form>
        </div>
        <div class="mobile_side_menu">
            <div class="text-center flex justify-between">
                <div class="logo">
                    <?php
				if( has_custom_logo() ) {
					$logo     = get_theme_mod( 'custom_logo' );
					$logo_url = wp_get_attachment_image_url( $logo, 'full' );
				?>
                    <a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo $logo_url ?>">
                    </a>
                    <?php
					} elseif( class_exists( 'Redux' ) ) {			
				?>
                    <a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php 
						$default_logo_html = '<img src="' . get_template_directory_uri() . '/images/je.png">';
						echo apply_filters( 'iconstarter_display_logo', $default_logo_html );
					?>
                    </a>
                    <?php } else { ?>
                    <h2>
                        <a class="logo-link"
                            href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo bloginfo( 'name' ); ?></a>
                    </h2>

                    <?php } ?>
                </div>
                <span class="close_menu"><i class="ri-close-line"></i></span>
            </div>
            <nav class="my-6">
                <?php if ( has_nav_menu( 'primary' ) ) : 
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'menu_class'      => 'flex flex-col',
                            'container_class' => ' ',
                        )
                    );
                ?>
                <?php endif; ?>
            </nav>
        </div>
    </header>