<?php
/*
Template Name: Home Productos
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<?php //$loop3 = new WP_Query( array( 'post_type' => 'page', 'category_name' => '', 'posts_per_page' => 6 )); ?>
			
<?php $loop2 = new WP_Query( array( 'post_type' => 'page', 'post_parent' => 74, 'category_name' => '', 'orderby' => 'menu_order', 'order' => 'ASC' )); ?>

<div class="row">	      
	<?php while ($loop2->have_posts()) : $loop2->the_post(); ?>
	<div class="col-sm-6 col-md-12">
		<?php get_template_part('templates/content-productos', get_post_format()); ?>
	</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
</div>