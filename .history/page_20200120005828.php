<?php get_header(); ?>

	<main class="container pagina seccion con-sidebar">

		<div class="contenido-principal">
		<?php
 
			$args = array(
				'cat' => 'Internacionales'
			);

			// Custom query.
			$query = new WP_Query( $args );

			// Check that we have query results.
			if ( $query->have_posts() ): ?>
				<p><?php echo $cat->cat_name ; ?></p> <?
			
			   while($query -> have_posts()) : $query -> the_post(); ?>
				  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				  <?php the_post_thumbnail('fb', $attr) ?>
				  <p><?php the_content(); ?></p> <?php
			   endwhile;
			endif; 
			// Restore original post data.
			wp_reset_postdata();

			?>
		</div>

	</main>

<?php

get_footer();
