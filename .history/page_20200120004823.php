<?php get_header(); ?>

	<main class="container pagina seccion con-sidebar">

		<div class="contenido-principal">
			<?php get_post($post, $output, $filter) ?>
		</div>

	</main>

<?php

get_footer();
