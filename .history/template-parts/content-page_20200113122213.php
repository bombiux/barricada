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
		<?php
$post_list = get_posts( array(
    'orderby'    => 'menu_order',
    'sort_order' => 'asc'
) );
 
$posts = array();
 
foreach ( $post_list as $post ) {
   $posts[] += $post->ID;
}
 
$current = array_search( get_the_ID(), $posts );
 
$prevID = $posts[ $current-1 ];
$nextID = $posts[ $current+1 ];
?>
 
<div class="navigation">
<?php if ( ! empty( $prevID ) ): ?>
    <div class="alignleft">
        <a href="<?php echo get_permalink( $prevID ); ?>" alt="<?php echo get_the_title( $prevID ); ?>">
            <?php _e( 'Previous', 'textdomain' ); ?>
        </a>
    </div>
<?php endif;
 
if ( ! empty( $nextID ) ) : ?>
    <div class="alignright">
        <a href="<?php echo get_permalink( $nextID ); ?>" alt="<?php echo get_the_title( $nextID ); ?>">
            <?php _e( 'Next', 'textdomain' ); ?>
        </a>
    </div>
<?php endif; ?>
</div><!-- .navigation -->
	</div><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->
