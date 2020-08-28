<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");

	$args = array(
		'post_type'         => 'covid',
	);

    $query = new WP_Query( $args );
	$stdurl = get_home_url() . '/covid/';
	$conf = get_field("confirmados");
    
	while ( $query -> have_posts() ) : $query -> the_post();
	$country = ;
	$currentCountry = '"#'. $country . '-conf"';

echo <<<JS
<script>
document.addEventListener('DOMContentLoaded', function(){ 
	document.querySelector('.imapsContainer').addEventListener("mouseover", () => {document.querySelector({$currentCountry}).innerText = {$field}; });
}, false);
</script>
JS;

	endwhile; wp_reset_postdata();
	
	get_footer(); 

?>