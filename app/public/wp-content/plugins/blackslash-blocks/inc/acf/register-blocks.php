<?php
/**
 * Register custom blocks for the project.
 *
 * @package blackslash
 */

//namespace blackslash;

/**
 * Register our custom blocks.
 *
 * @return void
 */

function blackslash_register_acf_blocks() {
	$blocks_path =  WP_PLUGIN_DIR . '/blackslash-blocks/blocks';

	if ( file_exists( $blocks_path ) ) {
		$block_dirs = array_filter( glob( $blocks_path . '/*' ), 'is_dir' );

		foreach ( $block_dirs as $block ) {
			register_block_type( $block );
		}
	}
}

blackslash_register_acf_blocks();