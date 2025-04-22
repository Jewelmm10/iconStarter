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
                </div>
                <div class="hidden md:block flex-1">

                    <?php 
                        if ( has_nav_menu( 'top_menu' ) ) :
                            wp_nav_menu(
                                array(
                                    'theme_location'  => 'top_menu',
                                    'menu_class'      => 'top_menu flex justify-end border-b border-l',
                                )
                            );
                        endif;
                    ?>
                    <nav class="nav_menu !bg-transparent">
                        <?php if ( has_nav_menu( 'primary' ) ) : 
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'primary',
                                'container_class' => 'container',
                            )
                        );
                     endif; ?>

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
                                'container_class' => 'container',
                                'menu_class'      => 'flex flex-col',
                            )
                        );
                    ?>
                <?php endif; ?>
            </nav>
        </div>
    </header>