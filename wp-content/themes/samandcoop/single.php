<?php
/**
* @package WordPress
* @subpackage Sam and Coop
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <h1><?php the_title(); ?></h1>
      <?php the_content( 'Read the rest of this entry &raquo;' ); ?>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <h2 class="center"><?php _e( 'Not found', 'cleanhome' ); ?></h2>
  <p class="center"><?php _e( "Sorry, but you are looking for something that isn't here.", 'cleanhome' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
