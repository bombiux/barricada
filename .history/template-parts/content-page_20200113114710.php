<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Barricada
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		\
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		get_post($post, $output, $filter)
		?>
	</div><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->
