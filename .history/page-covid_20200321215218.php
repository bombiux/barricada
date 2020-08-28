<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");?>



<script>
	

	document.querySelector('g.imapsContainer').addEventListener("mouseover", () => {document.querySelector('#ni-conf').innerText = 'ola k ase';});
	
</script>
<?php get_footer(); ?>

