<?php 

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

function wpt_excerpt_length($length){
	return 16;
}

add_filter('excerpt_length', 'wpt_excerpt_length', 999);

function register_theme_menus(){
	
	register_nav_menus(
		array('primary-menu' => __('Primary Menu'))

		);
}
//when wordpress is first initializing we are gonna call this function
add_action('init', 'register_theme_menus');


function coffe_cart_theme_scripts(){
	//Enqueue Custom CSS scripts
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');

}

add_action('wp_enqueue_scripts', 'coffe_cart_theme_scripts');


function coffee_cart_theme_js_scripts(){

	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

}

add_action('wp_enqueue_scripts', 'coffee_cart_theme_js_scripts');

//Change custom logo class to 
// function change_logo_class( $html ) {

//     $html = str_replace( 'custom-logo', 'non-front-bhn-logo', $html );
//     // $html = str_replace( 'custom-logo-link', 'your-custom-class', $html );

//     return $html;
// }

// add_filter( 'get_custom_logo', 'change_logo_class' );






?>