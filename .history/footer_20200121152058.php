	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			
			<span class="year"></span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Barricada %1$s por %2$s', 'barricada' ), 'barricada', '<a href="http://barricada.com.ni/">Barricada</a>' );
				echo " " . date('Y')
				?>
				Todos los derechos Reservados | 
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
