<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Barricada
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		\
	</header><!-- .entry-header -->

	<div class="entry-content">
	<ul>
    <?php
    global $post;
 
    $myposts = get_posts( array(
        'posts_per_page' => 5,
        'offset'         => 1,
        'category'       => 1
    ) );
 
    if ( $myposts ) {
        foreach ( $myposts as $post ) : 
            setup_postdata( $post ); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
			<?php ?>
        <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
</ul>
	</div><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->
