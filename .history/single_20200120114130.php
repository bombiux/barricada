<?php get_header(); ?>
if ( have_posts() ) : while ( have_posts() ) : the_post();
  the_content();
endwhile;
else:
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
endif;
<?php get_footer();