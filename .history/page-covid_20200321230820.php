<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");

	$args = array(
		'post_type'         => 'covid',
	);

    $query = new WP_Query( $args );
	$count = 0;
    
	while ( $query -> have_posts() ) : $query -> the_post();
	$stdurl = get_home_url() . '/covid/';
	$conf = get_field("confirmados");
	$country = str_replace('/','',str_replace($stdurl,"",get_permalink()));
	$conf = '"#'.$country . '-conf"';

echo <<<JS
<script>
document.addEventListener('DOMContentLoaded', function(){ 
	document.querySelector('.imapsContainer').addEventListener("mouseover", () => {document.querySelector({$conf}).innerText = {$} });
}, false);
</script>
JS;

	endwhile; wp_reset_postdata();
	
	get_footer(); 

?>