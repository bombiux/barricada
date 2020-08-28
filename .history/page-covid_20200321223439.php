<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");

	$args = array(
		'post_type'         => 'covid',
	);

    $query = new WP_Query( $args );
    
    while ( $query -> have_posts() ) : $query -> the_post();
		<h1><?php echo get_field("confirmados") 
echo <<<JS
<script>
document.addEventListener('DOMContentLoaded', function(){ 
	document.querySelector('.imapsContainer').addEventListener("mouseover", () => {document.querySelector('#ni-conf').innerText = 'try'; });
}, false);
</script>
JS;

	endwhile; wp_reset_postdata();
	
	get_footer(); 

?>