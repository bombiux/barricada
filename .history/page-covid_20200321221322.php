<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");

	$args = array(
		'post_type'         => 'coronavirus',
	);

    $query = new WP_Query( $args );
    
    while ( $query -> have_posts() ) : $query -> the_post();
   
	echo ;
	<<<JS

		document.addEventListener('DOMContentLoaded', function(){ 
			document.querySelector('.imapsContainer').addEventListener("mouseover", () => {document.querySelector('#ni-conf').innerText = ${get_field('confirmados')};});
	}, false);


	JS;

get_footer(); ?>