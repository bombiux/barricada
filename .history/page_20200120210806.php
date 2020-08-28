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
				$i = 3;
				?>
				<div class="destacadas">
				<?php 
				while($i > 0) : $query -> the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<div class="<?php echo 'post-' . $i ?>">
							<?php the_post_thumbnail('fb') ?>
							<h2>
								<?php the_title(); ?>
							</h2>
						</div>
					</a>
					<?php
						$i--;
					endwhile;
				</div>
			endif; 
			// Restore original post data.
			wp_reset_postdata();

			?>
		</div>

	</main>

<?php

get_footer();
