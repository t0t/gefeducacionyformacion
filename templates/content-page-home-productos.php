<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php //get_template_part('templates/entry-meta'); ?>
  </header>
  <!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('thumbnail'); ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
  
  <?php edit_post_link(); ?>
  <?php //wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
