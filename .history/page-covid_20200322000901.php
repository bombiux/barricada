<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");

	/* $args = array(
		'post_type'         => 'covid',
	);

    $query = new WP_Query( $args );
	$stdurl = get_home_url() . '/covid/';
    
	while ( $query -> have_posts() ) : $query -> the_post();
	$country = '"#'. str_replace('/','',str_replace($stdurl,"",get_permalink()));
	$conf = get_field("confirmados") ?: '0';
	$muer = get_field("muertes") ?: '0';
	$rec = get_field("recuperados") ?: '0' ;
	$act = $conf - $muer - $rec; */
	
	$newContent = '"<p style="text-align: center;"><strong>HONDURAS</strong></p><br />
	Confirmados <i id="gt-conf"> 200 </i><br />
	Muertes <i id="gt-mu"> 1 </i><br />
	Recuperados <i id="gt-rec"> 3 </i><br />
	Activos <i id="gt-act"> 197 </i>"';
echo <<<JS

<script>
document.addEventListener('DOMContentLoaded', function(){ 
	document.querySelector('.imapsContainer').addEventListener("mouseover", () => {
			
		}
	);
}, false);
iMapsData.data[0].roundMarkers[0].tooltipContent = `<p style="text-align: center;"><strong>HONDURAS</strong></p><br /> Confirmados <i id="gt-conf"> 200 </i><br /> Muertes <i id="gt-mu"> 1 </i><br /> Recuperados <i id="gt-rec"> 3 </i><br /> Activos <i id="gt-act"> 197 </i>`;
</script>
JS;

	/* endwhile; wp_reset_postdata(); */
	
	get_footer(); 

?>
