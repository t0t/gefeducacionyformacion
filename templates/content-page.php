<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php edit_post_link(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
