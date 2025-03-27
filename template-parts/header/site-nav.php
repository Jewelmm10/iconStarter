<?Php
/**
 * Navigation template
 * @package icon_starter
 */
?>

<header class="style4">
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
						echo apply_filters( 'wptb_display_logo', $default_logo_html );
					?>
                </a>
                <?php } else { ?>
                <h2>
                    <a class="logo-link"
                        href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo bloginfo( 'name' ); ?></a>
                </h2>

                <?php } ?>
            </div>
            <div class="menu_show">
                <i class="ri-menu-line"></i>
            </div>
        </div>
        <nav class="menus">
            <?php if ( has_nav_menu( 'primary' ) ) : 
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'menu_class'      => '',
					'container_class' => '',
				)
			);
		?>
            <?php endif; ?>
        </nav>
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
							echo apply_filters( 'wptb_display_logo', $default_logo_html );
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
            <?php if ( has_nav_menu( 'primary' ) ) : 
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'menu_class'      => 'my-6',
						'container_class' => 'flex flex-col',
					)
				);
			?>
            <?php endif; ?>
        </div>

    </div>
</header>