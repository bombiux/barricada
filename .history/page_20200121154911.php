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
			$Compa = 29;

			$dest = array(
				'cat' => 6
			);
			$cra = array(
				'cat' => 29
			);
			$nac = array(
				'cat' => 4
			);
			// Custom query.
			$qDest = new WP_Query( $dest );
			$qCra = new WP_Query( $cra );
			$qNac = new WP_Query( $nac );
			// Check that we have query results.
			?>
			<div class="destacadas">
			<?php
				if ( $qDest->have_posts() ): ?>
					<?php
					$i = 1;
					?>
					<?php 
					while($i <= 3) : $qDest -> the_post(); ?>
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
				<?php
				endif;

				if ( $qCra->have_posts() ): ?>
					<?php
					$i = 1;
					?>
					<?php 
					while($i > 0) : $qCra -> the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<div class="noticia-destacada">
							<img src="https://barricada.com.ni/wp-content/uploads/2019/03/rosario.jpg" alt="Cra Rosario">
								<h2>
									<?php the_title(); ?>
								</h2>
							</div>
						</a>
						<?php
							$i--;
						endwhile;
						?>
				<?php
				endif; 

			// Restore original post data.
			wp_reset_postdata();
			?>


<div class="nacionales">
	<?php
		if ( $qNac->have_posts() ): ?>
			<?php
			$i = 1;
			?>
			<?php 
			while($i <= 4) : $qNac -> the_post(); ?>
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
		<?php
		endif;
		wp_reset_postdata();
	?>
</div>
			</div>
		</div>

	</main>

<?php

get_footer();
