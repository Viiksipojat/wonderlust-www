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
    <a href="<?php the_permalink(); ?>" class="entry-title"><?php the_title(); ?></a>
    <h2 class="location"><?php the_field('location'); ?></h2>
    <h2 class="price"><?php
      if (get_field('purchase_url')):
        echo '<a href="' . get_field('purchase_url') . '">' . get_field('price') . ' ';
        if (get_locale() == 'fi_FI'):
          echo '/ OSTA LIPPU';
        else:
          echo '/ BUY A TICKET';
        endif;
        echo '</a>';
      else:
       the_field('price');
      endif;
    ?></h2>
  </header><!-- .entry-header -->
</article><!-- #post-## -->
