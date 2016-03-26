<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wonderlust2016
 */

?>

<article id="event-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h2 class="date"><?php the_field('date'); ?></h2>
    <?php the_post_thumbnail('full'); ?>
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <h2 class="location"><?php the_field('location'); ?></h2>
    <h2 class="price"><?php the_field('price'); ?></h2>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wonderlust2016' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-## -->
