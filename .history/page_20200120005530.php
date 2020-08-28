<?php get_header(); ?>

	<main class="container pagina seccion con-sidebar">

		<div class="contenido-principal">
		<?php
 
 $args = array(
	 // Arguments for your query.
 );
  
 // Custom query.
 $query = new WP_Query( $args );
  
 // Check that we have query results.
 if ( $query->have_posts() ) {
  
	 // Start looping over the query results.
	 while ( $query->have_posts() ) {
  
		 $query->the_post();
  
		 // Contents of the queried post results go here.
  
	 }
  
 }
  
 // Restore original post data.
 wp_reset_postdata();
  
 ?>
		</div>

	</main>

<?php

get_footer();
