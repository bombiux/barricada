<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");

	$args = array(
		'post_type'         => 'covid',
	);

    $query = new WP_Query( $args );
	$stdurl = get_home_url() . '/covid/';
    
	while ( $query -> have_posts() ) : $query -> the_post();
	$country = '"#'. str_replace('/','',str_replace($stdurl,"",get_permalink()));
	$conf = get_field("confirmados") ?: NULL;
	$muer = get_field("muertes") ?: NULL;
	$rec = get_field("recuperados") ?: '0' ;

echo <<<JS
<script>
document.addEventListener('DOMContentLoaded', function(){ 
	document.querySelector('.imapsContainer').addEventListener("mouseover", () => {
			document.querySelector($country-conf").innerText = {$conf};	
			document.querySelector($country-muert").innerText = {$muer};
			document.querySelector($country-cur").innerText = {$rec};
		}
	);
}, false);
</script>
JS;

	endwhile; wp_reset_postdata();
	
	get_footer(); 

?>