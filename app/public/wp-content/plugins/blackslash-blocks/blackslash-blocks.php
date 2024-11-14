<?php
/*
 * BLACKSLASH BLOCKS
 *
 * Plugin Name:       BlackSlash Blocks

 * @package blackslash
 * @since   1.0.0
 * 
 * Plugin URI:        https://blacksla.sh
 * Description:       Custom blocks for BlackSlash clients. 
 * Version:           1.0.0
 * Author:            Ghosty
 * Author URI:        https://blacksla.sh/ghosty
 * Update URI:        false
 * Text Domain:       faustwp
 * Domain Path:       /languages
 * Requires PHP:      7.4
 * Requires at least: 6.0
 * Requires Plugins:  advanced-custom-fields-pro
 */

/**
* Setup custom blocks 
*/
function blackslash_setup_custom_blocks() {
	
  $files = [
    'inc/acf/acf.php', // ACF setup and blocks.
  ];

  foreach ( $files as $include ) {
    $include = trailingslashit( WP_PLUGIN_DIR . '/blackslash-blocks' ) . $include;

    // Allows inclusion of individual files or all .php files in a directory.
    if ( is_dir( $include ) ) {
      foreach ( glob( $include . '*.php' ) as $file ) {
        require $file;
      }
    } else {
      require $include;
    }
  } 

} 
add_action( 'init', 'blackslash_setup_custom_blocks' );


/********************************************************************
 * Activate the plugin.
 ********************************************************************/
function blackslash_activate() { 
	// Trigger our function that registers the custom blocks.
	blackslash_setup_custom_blocks(); 
	// Clear the permalinks after the blocks have been registered.
	flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'blackslash_activate' );

/**
 * Deactivation hook.
 */
function blackslash_deactivate() {
	// Do any cleanup needed to delete the block types.
	// 
	// Clear the permalinks to remove our post type's rules from the database.
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'blackslash_deactivate' );