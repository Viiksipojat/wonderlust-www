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
    <?php
      if (get_field('programme_image')):
        // <img width="380" height="606" src="http://vu2111.evelyn.1984.is/wp-content/uploads/2016/05/Untitled.png" class="attachment-full size-full wp-post-image" alt="Image courtesy of Nehra Stella" srcset="http://vu2111.evelyn.1984.is/wp-content/uploads/2016/05/Untitled-188x300.png 188w, http://vu2111.evelyn.1984.is/wp-content/uploads/2016/05/Untitled.png 380w" sizes="(max-width: 380px) 100vw, 380px">
        echo '<img width="380" src="' . get_field('programme_image') . '">';
      else:
        the_post_thumbnail('full');
      endif;
    ?>
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
