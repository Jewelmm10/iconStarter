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
                <?php 
                    if ( apply_filters( 'icon_enable_searchbar_switch', true ) ) {
                   
                ?>
                <form action="" method="get" class="search_product">
                    <input id="search_input" class="input_search" type="text"
                        placeholder="<?php echo $text = apply_filters('icon_searchbar_text',''); ?>" name="s"
                        id="keyword">
                    <input type="hidden" name="post_type" value="product" />
                    <button type="submit" class="search_btn"><i class="text-gray-800 ri-search-line"></i></button>
                    <div class="search_result">
                        <ul class="text-white">
                            <li>Please wait..</li>
                        </ul>
                    </div>
                </form>
                <?php } ?>
                <div class="hidden md:flex">
                    <a href="#">Sign In/ Sign Up</a>
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
                <?php if ( has_nav_menu( 'primary' ) ) : 
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'primary',
                                'container_class' => 'container',
                                'menu_class'      => 'flex flex-col',
                            )
                        );
                    ?>
                <?php endif; ?>

            </nav>
        </div>
    </header>