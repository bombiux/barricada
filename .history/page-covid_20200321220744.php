<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");?>



<<<JS
	document.addEventListener('DOMContentLoaded', function(){ 
		document.querySelector('.imapsContainer').addEventListener("mouseover", () => {document.querySelector('#ni-conf').innerText = '33';});
}, false);


JS;
<?php get_footer(); ?>

