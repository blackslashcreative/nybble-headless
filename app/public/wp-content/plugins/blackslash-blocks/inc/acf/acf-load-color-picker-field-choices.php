<?php
/**
 * Load colors dynamically into select field from @param array $field field options.
 *
 * @return array new field choices.
 * @see get_theme_colors().
 */

namespace blackslash;

function acf_load_color_picker_field_choices( $field ) {
	// Reset choices.
	$field['choices'] = [];

	// Grab our colors array.
	$colors = get_theme_colors();

	// Loop through colors.
	foreach ( $colors as $key => $color ) {
		// Create display markup.
		$color_output = '<div style="display: flex; align-items: center;"><span style="background-color:' . esc_attr( $color ) . '; border: 1px solid #ccc;display:inline-block; height: 15px; margin-right: 10px; width: 15px;"></span>' . esc_html( $key ) . '</div>';

		// Set values.
		$field['choices'][ sanitize_title( $key ) ] = $color_output;
	}

	// Return the field.
	return $field;
}

add_filter( 'acf/load_field/name=color_picker', __NAMESPACE__ . '\acf_load_color_picker_field_choices' );


function acf_load_gradient_picker_field_choices( $field ) {
	// Reset choices.
	$field['choices'] = [];

	// Grab our colors array.
	$colors = get_theme_gradients();
	
	// Loop through colors.
	foreach ( $colors as $key => $color ) {
		// Create display markup.
		$color_output = '<div style="display: flex; align-items: center;"><span style="background:' . esc_attr( $color ) . '; border: 1px solid #ccc;display:inline-block; height: 15px; margin-right: 10px; width: 15px;"></span>' . esc_html( $key ) . '</div>';

		// Set values.
		$field['choices'][ sanitize_title( $key ) ] = $color_output;
	}

	// Return the field.
	return $field;
}

add_filter( 'acf/load_field/name=gradient', __NAMESPACE__ . '\acf_load_gradient_picker_field_choices' );