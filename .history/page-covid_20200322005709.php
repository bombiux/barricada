<?php get_header(); 

	echo do_shortcode("[display-map id='261290']");

	$args = array(
		'post_type'         => 'covid',
	);

    $query = new WP_Query( $args );
	$stdurl = get_home_url() . '/covid/';
	$count = -1;
	$script = '';
	$countries = array('GUATEMALA','HONDURAS','EL SALVADOR','NICARAGUA','COSTA RICA','PANAMÁ');
    
	while ( $query -> have_posts() ) : $query -> the_post();
	$country = '"#'. str_replace('/','',str_replace($stdurl,"",get_permalink()));
	$conf = get_field("confirmados") ?: '0';
	$muer = get_field("muertes") ?: '0';
	$rec = get_field("recuperados") ?: '0' ;
	$act = $conf - $muer - $rec;
	$count++;
	
	$script .= iMapsData.data[0].roundMarkers[$count].tooltipContent;
	$script .= ''
	$script .= <<<HTML
<p style="text-align: center;"><strong>$countries[$count]</strong></p><br /> Confirmados <i id="gt-conf"> $conf </i><br /> Muertes <i id="gt-mu"> $muer </i><br /> Recuperados <i id="gt-rec"> $rec </i><br /> Activos <i id="gt-act"> $act </i>
HTML;

	endwhile; wp_reset_postdata();
	
	get_footer(); 
echo <<<JS

<script>
document.addEventListener('DOMContentLoaded', function(){ 
	document.querySelector('.imapsContainer').addEventListener("mouseover", () => {
		$script
		}
	);
}, false);
</script>
JS;
?>