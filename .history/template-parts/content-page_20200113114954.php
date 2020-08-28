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
		function get_posts( $args = null ) {
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
			);
		 
			$parsed_args = wp_parse_args( $args, $defaults );
			if ( empty( $parsed_args['post_status'] ) ) {
				$parsed_args['post_status'] = ( 'attachment' == $parsed_args['post_type'] ) ? 'inherit' : 'publish';
			}
			if ( ! empty( $parsed_args['numberposts'] ) && empty( $parsed_args['posts_per_page'] ) ) {
				$parsed_args['posts_per_page'] = $parsed_args['numberposts'];
			}
			if ( ! empty( $parsed_args['category'] ) ) {
				$parsed_args['cat'] = $parsed_args['category'];
			}
			if ( ! empty( $parsed_args['include'] ) ) {
				$incposts                      = wp_parse_id_list( $parsed_args['include'] );
				$parsed_args['posts_per_page'] = count( $incposts );  // only the number of posts included
				$parsed_args['post__in']       = $incposts;
			} elseif ( ! empty( $parsed_args['exclude'] ) ) {
				$parsed_args['post__not_in'] = wp_parse_id_list( $parsed_args['exclude'] );
			}
		 
			$parsed_args['ignore_sticky_posts'] = true;
			$parsed_args['no_found_rows']       = true;
		 
			$get_posts = new WP_Query;
			return $get_posts->query( $parsed_args );
		 
		}
		Collapse full source code Vie
		?>
	</div><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->
