<?php
namespace ICON_STARTER\Inc\Helpers;

/**
 * Autoloader function.
 *
 * @param string $resource Source namespace.
 *
 * @return void
 */
function autoloader( $resource = '' ) {
    $namespace_root = 'ICON_STARTER\\';
    $resource       = trim( $resource, '\\' );

    // Remove the root namespace
    if ( strpos( $resource, $namespace_root ) === 0 ) {
        $resource = str_replace( $namespace_root, '', $resource );
    }

    $path = explode(
        '\\',
        str_replace( '_', '-', strtolower( $resource ) )
    );

    if ( empty( $path[0] ) || empty( $path[1] ) ) {
        return;
    }

    $directory = '';
    $file_name = '';

    if ( 'inc' === $path[0] ) {
        if ( isset( $path[2] ) ) {
            // Handle multiple subdirectories like 'inc/elementor/class-elementoraddons.php'
            $directory = $path[1]; 
            $file_name = sprintf( 'class-%s', trim( strtolower( $path[2] ) ) );
        } else {
            // Handle 'inc/classes/class-theme.php'
            $directory = 'classes';
            $file_name = sprintf( 'class-%s', trim( strtolower( $path[1] ) ) );
        }
    
        // Build the full file path
        $resource_path = sprintf( '%s/inc/%s/%s.php', untrailingslashit( ICON_STARTER_PATH ), $directory, $file_name );
    
        if ( file_exists( $resource_path ) ) {
            require_once( $resource_path );
        } else {
            error_log( "Autoloader: Failed to include file at $resource_path" );
        }
    }
    
}

// Register the autoloader function
spl_autoload_register( 'ICON_STARTER\Inc\Helpers\autoloader' );