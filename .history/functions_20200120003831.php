<?php
function barricada_setup() {
	add_theme_support('post-thumbnails');
	add_image_size('fb', 1200, 630, true);
}
add_action('after_setup_theme', 'barricada_setup');

function mytheme_menus() {
	register_nav_menus(array(
		'menu-principal' => __('Menu Principal', 'mytheme')
	));
}
add_action('init', 'mytheme_menus');

function barricada_scripts_styles() {
	wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.css', array(), '1.0.10');
	wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '0.0.6');
	wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');
	wp_enqueue_style('style', get_stylesheet_uri(), array('reset','googleFonts','slicknavCSS'), '1.0.0');
	wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/slicknav.js', array('jquery'), '1.0.10', true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'mytheme_scripts_styles');