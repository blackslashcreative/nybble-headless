<?php
/**
 * Get the theme colors for this project. Set these first in the theme.json and/or Sass partial,
 * then migrate them over here.
 *
 * @return array The array of our color names and hex values.
 */

namespace blackslash;

function get_theme_colors() {
	$theme_colors    = [];
	$theme_json_file = get_theme_file_path( 'theme.json' );

	if ( file_exists( $theme_json_file ) ) {
		$theme_json_contents = file_get_contents( $theme_json_file );
		$theme_json_data     = json_decode( $theme_json_contents, true );

		if ( ! empty( $theme_json_data ) && ! empty( $theme_json_data['settings']['color']['palette'] ) ) {
			foreach ( $theme_json_data['settings']['color']['palette'] as $color ) {
				$color_name  = esc_html__( $color['name'], THEME_TEXT_DOMAIN );
				$color_value = $color['color'];

				$theme_colors[ $color_name ] = $color_value;
			}
		}

		if ( ! empty( $theme_colors ) ) {
			return $theme_colors;
		}
	}

	// If we are not using theme.json file, then setup theme colors here.
	return [
		esc_html__( 'Primary', THEME_TEXT_DOMAIN )    => '#013a56',
		esc_html__( 'Secondary', THEME_TEXT_DOMAIN )  => '#97A3AE',
		esc_html__( 'Yellow', THEME_TEXT_DOMAIN ) => '#fdd700',
		esc_html__( 'Green', THEME_TEXT_DOMAIN )   => '#24b34b',
		esc_html__( 'Key Lime', THEME_TEXT_DOMAIN ) => '#bad532',
		esc_html__( 'Pear', THEME_TEXT_DOMAIN )    => '#dee21e',
		esc_html__( 'Pale Blue', THEME_TEXT_DOMAIN )    => '#edf4f5',
		esc_html__( 'Teal', THEME_TEXT_DOMAIN )    => '#02aea8',
		esc_html__( 'Blue', THEME_TEXT_DOMAIN )    => '#046388',
		esc_html__( 'Purple', THEME_TEXT_DOMAIN )    => '#150e40',
		esc_html__( 'Black', THEME_TEXT_DOMAIN )    => '#000',
		esc_html__( 'White', THEME_TEXT_DOMAIN )    => '#fff',
		esc_html__( 'River Bed', THEME_TEXT_DOMAIN )    => '#415364'
	];
}


function get_theme_gradients() {
	$theme_colors    = [];
	$theme_json_file = get_theme_file_path( 'theme.json' );

	if ( file_exists( $theme_json_file ) ) {
		$theme_json_contents = file_get_contents( $theme_json_file );
		$theme_json_data     = json_decode( $theme_json_contents, true );

		if ( ! empty( $theme_json_data ) && ! empty( $theme_json_data['settings']['color']['gradients'] ) ) {
			foreach ( $theme_json_data['settings']['color']['gradients'] as $color ) {
				$color_name  = esc_html__( $color['name'], THEME_TEXT_DOMAIN );
				$color_value = $color['gradient'];

				$theme_colors[ $color_name ] = $color_value;
			}
		}

		if ( ! empty( $theme_colors ) ) {
			return $theme_colors;
		}
	}

	// If we are not using theme.json file, then setup theme colors here.
	return [
		esc_html__( 'Horizontal Main', THEME_TEXT_DOMAIN )    => 'linear-gradient(90deg, #fdd700 0%, #dee21e 25%, #bad532 50%, #02aea8 77%, #046388 100%)',
		esc_html__( 'Horizontal Blue', THEME_TEXT_DOMAIN )    => 'linear-gradient(90deg, #046388 0%, #150e40 100%)',
	];
}