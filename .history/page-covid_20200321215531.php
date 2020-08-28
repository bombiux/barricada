<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");?>



<script>
	document.addEventListener('DOMContentLoaded', function(){ 
		document.querySelector('.imapsContainer').addEventListener("mouseover", () => {document.querySelector('#ni-conf').innerText = 'ola k ase';});
}, false);


	
	
</script>
<?php get_footer(); ?>

