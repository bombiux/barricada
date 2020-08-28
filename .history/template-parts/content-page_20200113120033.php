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
		get_posts( $args = null ) {
			$defaults = array(
				'numberposts'      => 5,
				'category'         => 0,
				'orderby'          => 'date',
				'order'            => 'DESC',
				'include'          => array(),
				'exclude'          => array(),
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'post',
				'suppress_filters' => true,
			)
		}
		?>
	</div><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->
