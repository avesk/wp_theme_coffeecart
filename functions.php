<?php 

add_theme_support('menus');
add_theme_support('post-thumbnails');

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

	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts', 'coffe_cart_theme_scripts');

// function google_fonts() {
// 	$query_args = array(
// 		'family' => 'Raleway'
// 		'subset' => 'latin,latin-ext',
// 	);
// 	wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
// }
            
// add_action('wp_enqueue_scripts', 'google_fonts');


function coffee_cart_theme_js_scripts(){

	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

}

add_action('wp_enqueue_scripts', 'coffee_cart_theme_js_scripts');







?>