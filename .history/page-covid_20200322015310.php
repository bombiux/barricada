<?php get_header();

echo <<<HTML
	<div id='covid-title'>
		<h6>INFORME DE LA SITUACIÓN DE CENTROAMÉRICA</h6>
		<h4>ANTE EL COVID-19</h4>
	</div>
	<div class="stats">
		<p>casos confirmados de centro</p>
	</div>
HTML;

	echo do_shortcode("[display-map id='261290']");

	$args = array(
		'post_type'         => 'covid',
	);

    $query = new WP_Query( $args );
	$stdurl = get_home_url() . '/covid/';
	$count = -1;
	$script = '';
	$countries = array('REPÚBLICA DOMINICANA','PANAMÁ','COSTA RICA','EL SALVADOR','GUATEMALA','HONDURAS','NICARAGUA');
    
	while ( $query -> have_posts() ) : $query -> the_post();
	$country = '"#'. str_replace('/','',str_replace($stdurl,"",get_permalink()));
	$conf = get_field("confirmados") ?: '0';
	$muer = get_field("muertes") ?: '0';
	$rec = get_field("recuperados") ?: '0' ;
	$act = $conf - $muer - $rec;
	$count++;
	
	$script .= 'iMapsData.data[0].roundMarkers[' . $count . '].tooltipContent';
	$script .= ' = ';
	$script .= ' \'<p style="text-align: center;"><strong>' . $countries[$count] . '</strong></p><br /> Confirmados <i id='. $country .'-conf">' . $conf . '</i><br /> Muertes <i id='. $country .'-mu">' . $muer . '</i><br /> Recuperados <i id='. $country .'-rec">' . $rec . '</i><br /> Activos <i id='. $country .'-act">' . $act . '</i>\'; ';

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