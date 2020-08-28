<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");

	$args = array(
		'post_type'         => 'covid',
	);

    $query = new WP_Query( $args );
    
	while ( $query -> have_posts() ) : $query -> the_post();
	$stdurl = get_home_url() . '/covid/';
	$conf = get_field("confirmados");
	$country = str_replace('/','',str_replace($stdurl,"",get_permalink()));
	$count = 0;
	echo <<<JS
<script>
document.querySelector('.imapsContainer').addEventListener("mouseover", () => {document.querySelector({$country}'-conf').innerText = 'test'{$count} });
document.addEventListener('DOMContentLoaded', function(){ 
}, false);
</script>
JS;

	endwhile; wp_reset_postdata();
	
	get_footer(); 

?>