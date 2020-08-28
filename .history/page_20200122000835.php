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
			$his = array(
				'cat' => 7
			);
			$int = array(
				'cat' => 1
			);

			// Custom query.
			$qDest = new WP_Query( $dest );
			$qCra = new WP_Query( $cra );
			$qNac = new WP_Query( $nac );
			$qInt = new WP_Query( $int );
			$qHis = new WP_Query( $his );
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
							<div class="noticia-destacada <?php echo 'dest-' . $i ?>">
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


			</div>
		</div>
		<!--  NACIONALES  -->
		<h3 class='title'>
			Nacionales
		</h3>
		<div class="nacionales cuatro">
			<?php
				if ( $qNac->have_posts() ): ?>
					<?php
					$i = 1;
					?>
					<?php 
					while($i <= 4) : $qNac -> the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<div class="noticia-nacionales <?php echo 'nac-' . $i ?>">
								<?php the_post_thumbnail('fb') ?>
								<h5>
									<?php the_title(); ?>
								</h5>
								<hr>
								<p class='extracto'>
									<?php the_excerpt(); ?>
								</p>
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
		<!--  VIDEOS  -->
		<h3 class='title'>
			Videos
		</h3> 
		<div class="video">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/b2DQok1GbrI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<!-- NEWSLETTER -->
		<div class="newsletter">
			<p>SUSCRIBITE A NUESTRO BOLETÍN</p><div>Email</div><button>></button>
		</div>
		<!--  Historia  -->
		<h3 class='title'>
			Internacionales
		</h3>
		<div class="internacionales cuatro">
			<?php
				if ( $qInt->have_posts() ): ?>
					<?php
					$i = 1;
					?>
					<?php 
					while($i <= 4) : $qInt -> the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<div class="noticia-internacionales <?php echo 'int-' . $i ?>">
								<?php the_post_thumbnail('fb') ?>
								<h5>
									<?php the_title(); ?>
								</h5>
								<hr>
								<p class='extracto'>
									<?php the_excerpt(); ?>
								</p>
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
		<!--  INTERNACIONALES  -->
		<h3 class='title'>
			Internacionales
		</h3>
		<div class="historia cuatro">
			<?php
				if ( $qHis->have_posts() ): ?>
					<?php
					$i = 1;
					?>
					<?php 
					while($i <= 4) : $qHis -> the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<div class="noticia-historia <?php echo 'his-' . $i ?>">
								<?php the_post_thumbnail('fb') ?>
								<h5>
									<?php the_title(); ?>
								</h5>
								<hr>
								<p class='extracto'>
									<?php the_excerpt(); ?>
								</p>
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
	</main>
<?php

get_footer();
