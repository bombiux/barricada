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
				<?php
				$i = 1;
				while($i > 0) : $query -> the_post(); ?>
				<p><?php echo $cat->cat_name ; ?></p>
					<?php the_post_thumbnail('fb') ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php the_content(); ?></p> <?php
					$i--;
				endwhile;
			endif; 
			// Restore original post data.
			wp_reset_postdata();

			?>
		</div>

	</main>

<?php

get_footer();
