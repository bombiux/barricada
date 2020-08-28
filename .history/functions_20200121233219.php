<?php
function barricada_setup() {
	add_theme_support('post-thumbnails');
	add_image_size('fb', 1200, 630, true);
}
add_action('after_setup_theme', 'barricada_setup');

function barricada_menus() {
	register_nav_menus(array(
		'menu-principal' => __('Menu Principal', 'barricada')
	));
}
add_action('init', 'barricada_menus');

function barricada_scripts_styles() {
	wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.css', array(), '1.0.10');
	wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '0.0.6');
	wp_enqueue_style('gothamFonts', get_template_directory_uri() . '/fonts/Gotham/stylesheet.css', array(), '1.0.0');
	wp_enqueue_style('style', get_stylesheet_uri(), array('reset','gothamFonts','slicknavCSS'), '1.0.0');
	wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/slicknav.js', array('jquery'), '1.0.10', true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'barricada_scripts_styles');

add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

// Display search icon in menus and toggle search form 
function add_search_form($items, $args) {
if( $args->theme_location == 'menu-principal' )
	   $items .= '<li class="search">
					<a class="search_icon">
						<span class="spicewpsearch_icon"></span>
					</a>
					<div style="display:none;" class="spicewpsearchform">'. get_search_form(false) .'</div>
				</li>';
       return $items;
}

function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'...';
	} else {
	$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
  //Limitar con la funcion get_the_content
function content($limit) {
	$content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
	array_pop($content);
	$content = implode(" ",$content).'...';
	} else {
	$content = implode(" ",$content);
	}
	$content = preg_replace('/[.+]/','', $content);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]>', $content);
	return $content;
}

function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 100);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
	$excerpt = $excerpt .'...';
	return $excerpt;
}