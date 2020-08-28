<?php get_header(); ?>

	<main class="container pagina seccion">

		<div class="contenido-principal">
		<?php
			$Internacionales = 1;
			$Nacionales = 4;
			$Destacadas = 6;
			$Historia = 7;
			$Arte = 8;
			$Efemerides = 9;
			$Comunicados = 10;
			$Analisis = 18;
			$Economia = 20;
			$Cra = 29;
			$args = array(
				'cat' => 29
			);

			// Custom query.
			$query = new WP_Query( $args );

			// Check that we have query results.
			if ( $query->have_posts() ): ?>
				<?php
				$i = 1;
				?>
				<div class="destacadas">
				<?php 
				while($i <= 3) : $query -> the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<div class="noticia-destacada <?php echo 'post-' . $i ?>">
							<?php the_post_thumbnail('fb') ?>
							<h2>
								<?php the_title(); ?>
							</h2>
						</div>
					</a>
					<?php
						$i++;
					endwhile;
					?>
				</div>
			<?php
			endif; 
			// Restore original post data.
			wp_reset_postdata();

			?>
			<?php
				
				$args = array(
					'cat' => 'Discursos'
				);

				// Custom query.
				$query = new WP_Query( $args );

				// Check that we have query results.
				if ( $query->have_posts() ): ?>
					<?php
					$i = 1;
					?>
					<div class="Cra">
					<?php 
					while($i > 0) : $query -> the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<div class="noticia-destacada <?php echo 'post-' . $i ?>">
								<?php the_post_thumbnail('fb') ?>
								<h2>
									<?php the_title(); ?>
								</h2>
							</div>
						</a>
						<?php
							$i--;
						endwhile;
						?>
					</div>
				<?php
				endif; 
				// Restore original post data.
				wp_reset_postdata();

				?>
		</div>

	</main>

<?php

get_footer();
