<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Barricada
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$barricada_description = get_bloginfo( 'description', 'display' );
			if ( $barricada_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $barricada_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<nav class="navbar" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
				<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>
			</div>

			<div id="navbarBasicExample" class="navbar-menu">
				<div class="navbar-end">
					
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu', // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
							'menu_class'        => 'navbar-menu', // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
							'container'         => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
							'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
							'container_id'      => "", // (string) The ID that is applied to the container.
							/*'before'            => "", // (string) Text before the link markup.
							'after'             => "", // (string) Text after the link markup.
							'link_before'       => "", // (string) Text before the link text.
							'link_after'        => "", // (string) Text after the link text.
							'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
							'depth'             => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
							'walker'            => "", // (object) Instance of a custom walker class.
							'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
							'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.*/
						) );
					?>
					<!-- <a class="navbar-item">
						Home
					</a>

					<a class="navbar-item">
						Documentation
					</a>

					<div class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">
						More
						</a>

						<div class="navbar-dropdown">
							<a class="navbar-item">
								About
							</a>
							<a class="navbar-item">
								Jobs
							</a>
							<a class="navbar-item">
								Contact
							</a>
							<hr class="navbar-divider">
							<a class="navbar-item">
								Report an issue
							</a>
						</div>
					</div> -->
				</div>
			</div>
		</nav>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
