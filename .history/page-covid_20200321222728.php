<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");

<<<JS
	<h5>ola k ase</h5>
	<script>
		document.addEventListener('DOMContentLoaded', function(){ 
			document.querySelector('.imapsContainer').addEventListener("mouseover", () => {document.querySelector('#ni-conf').innerText = {echo get_field('confirmados')} ;});
		}, false);
	</script>
JS;	

	
	
	get_footer(); 

?>