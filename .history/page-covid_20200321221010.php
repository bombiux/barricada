<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");







      $args = array(
        'post_type'         => 'coronavirus',
      );

    $query = new WP_Query( $args );
    
    while ( $query -> have_posts() ) : $query -> the_post();
    ?>
    <div>
    ola k ase
    <?php 
     echo get_field('confirmados');
<<<JS

	document.addEventListener('DOMContentLoaded', function(){ 
		document.querySelector('.imapsContainer').addEventListener("mouseover", () => {document.querySelector('#ni-conf').innerText = '33';});
}, false);


JS;

get_footer(); ?>

