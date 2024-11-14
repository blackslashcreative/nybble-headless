<?php
/**
 * BLOCK TEMPLATE: Client Logos
 *
 * @link    https://developer.wordpress.org/block-editor/
 *
 * @param array        $block      The block settings and attributes.
 * @param array        $content    The block inner HTML (empty).
 * @param bool         $is_preview True during AJAX preview.
 * @param (int|string) $post_id    The post ID this block is saved to.
 *
 * @package blackslash
 */

// use function blackslash\get_acf_fields;
// use function blackslash\get_formatted_args;
// use function blackslash\setup_block_defaults;
// use function blackslash\print_design_options;
// use function blackslash\print_element;
// use function blackslash\print_module;

// Load values and assign defaults.
// $heading             = !empty(get_field( 'heading' )) ? get_field( 'heading' ) : 'Your heading here...';
// $quote_attribution = '';
$logos = get_field( 'logos' );

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'client-logos';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

if ( $logos ) : ?>

	<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?> block">
		<?php foreach ( $logos as $logo ) : ?>
			<div class="logo"><img src="<?php echo $logo["logo"]; ?>" /></div>
		<?php endforeach; ?>
	</div>

<?php 
endif;