

	<div class="text-center" data-0="position:relative;" data-100="position:fixed; top:80px;">

<?php dynamic_sidebar('sidebar-primary'); ?>
<?php $loop2 = new WP_Query( array( 'post_type' => 'page', 'post_parent' => 74, 'category_name' => '', 'post__not_in' =>array($post->ID), 'orderby' => 'menu_order', 'order' => 'ASC' )); ?>


	<?php while ($loop2->have_posts()) : $loop2->the_post(); ?>
	
	<div class="col-xs-6 col-sm-12">

		<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('thumbnail', array('class' => 'img-rounded')); ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			<h5><?php the_title(); ?></h5></div>
	<?php //get_template_part('templates/content', 'page-home'); ?>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	</div>