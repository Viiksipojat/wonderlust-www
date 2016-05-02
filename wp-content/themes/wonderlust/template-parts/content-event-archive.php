<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wonderlust2016
 */

?>

<article id="event-<?php the_ID(); ?>" <?php post_class('event-archive'); ?>>
  <header class="entry-header">
    <h2 class="date"><?php the_field('date'); ?></h2>
    <?php the_post_thumbnail('full'); ?>
    <a href="" class="entry-title"><?php the_title(); ?></a>
    <h2 class="location"><?php the_field('location'); ?></h2>
    <h2 class="price"><?php the_field('price'); ?></h2>
  </header><!-- .entry-header -->
</article><!-- #post-## -->
