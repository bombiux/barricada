<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");

	$args = array(
		'post_type'         => 'coronavirus',
	);

    $query = new WP_Query( $args );
    
    while ( $query -> have_posts() ) : $query -> the_post();
	
	echo <<<JS
	<h5>ola k ase</h5>
	<script>
		document.addEventListener('DOMContentLoaded', function(){ 
			document.querySelector('.imapsContainer').addEventListener("mouseover", () => {document.querySelector('#ni-conf').innerText = {echo get_field('confirmados')} ;});
		}, false);
	</script>
JS;	

	endwhile; wp_reset_postdata();
	
	get_footer(); 

?>