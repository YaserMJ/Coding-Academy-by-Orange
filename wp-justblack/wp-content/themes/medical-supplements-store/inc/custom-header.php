<?php
/**
 * @package Medical Supplements Store
 * @subpackage medical-supplements-store
 * @since medical-supplements-store 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses medical_supplements_store_header_style()
*/

function medical_supplements_store_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'medical_supplements_store_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'medical_supplements_store_header_style',
	) ) );

}

add_action( 'after_setup_theme', 'medical_supplements_store_custom_header_setup' );

if ( ! function_exists( 'medical_supplements_store_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see medical_supplements_store_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'medical_supplements_store_header_style' );
function medical_supplements_store_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        .site_header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'medical-supplements-store-basic-style', $custom_css );
	endif;
}
endif; // medical_supplements_store_header_style