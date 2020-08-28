<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <?php the_post_thumbnail('fb') ?>
        <h2>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
        </a>
        <?php the_title(); ?>
        </h2>
        <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

        <div class="entry">
            <?php the_content(); ?>
        </div>

        <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
    </div>
    <?php endwhile; endif; ?>

<?php get_footer();