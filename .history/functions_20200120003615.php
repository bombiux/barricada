<?php
function barricada_setup() {
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'barricada_setup');

function mytheme_menus() {
	register_nav_menus(array(
		'menu-principal' => __('Menu Principal', 'mytheme')
	));
}