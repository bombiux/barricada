
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
		<div class="sec-nav">
			<div>
				<p>
					<?php echo date('Y')-1979 ?> años digulgando la verdad revolucionaria
				</p>
				<p>
					ÓRGANO OFICIAL DEL FRENTE SANDINISTA DE LIBERACIÓN NACIONAL (F.S.L.N.)
				</p>
				<P>
					<?php echo date_i18n( __( 'l\, j \d\e F \d\e Y', 'textdomain' ) ); ?>
				</P>
			</div>
		</div>
		<div class="site-branding">
			<?php
			the_custom_logo();
			 ?>
		</div><!-- .site-branding -->
		<nav class="navbar" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
				<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>
			</div>			
			<?php
				wp_nav_menu( array(
					'theme_location'    => 'menu-1',
					'depth'             => 0,
					'container'         => false,
					// 'items_wrap'        => 'div',
					'menu_class'        => 'navbar-menu',
					'menu_id'           => 'primary-menu',
					'after'             => "</div>",
					'walker'            => new Navwalker())
				);
			?>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
