<?php if (function_exists('wpmd_is_notphone') && wpmd_is_notphone() ) :?>
<?php layerslider(4); ?>
<?php else : ?>
<?php endif; ?>
 

<div class="row">
		<?php if( have_rows('ticks') ): ?>

	<div class="col-sm-5 col-lg-5">
		
		    
<h4>
	<?php if ( get_field('ticks_header') ) {?>
	<?php the_field('ticks_header'); ?>
	<?php }?>
</h4>

<ul class="list-group">

	<?php while ( have_rows('ticks') ) : the_row(); ?>

	<li class="list-group-item">
		<span class="glyphicon glyphicon-ok"></span>
		<?php the_sub_field('tick1'); ?>
	</li>
	
	<?php endwhile; ?>

</ul>

		</div>
			<?php else : ?>
			<?php endif; ?>




<?php if( have_rows('ticks_2') ): ?>

	<div class="col-sm-3 col-lg-3">
		
		    
<h4><?php if ( get_field('ticks_header_2') ) {?>
		<?php the_field('ticks_header_2'); ?>
	<?php }?></h4>

<ul class="list-group">

	<?php while ( have_rows('ticks_2') ) : the_row(); ?>

	<li class="list-group-item">
		<span class="glyphicon glyphicon-ok"></span>
		<?php the_sub_field('tick'); ?>
	</li>
	
	<?php endwhile; ?>

</ul>

		</div>
			<?php else : ?>
			<?php endif; ?>


<?php if ( get_field('img_heading') ) {?>
	<div class="col-sm-4 col-lg-4">
		<?php $attachment_id = get_field('img_heading');
		$size = "main"; // (thumbnail, medium, large, full or custom size)
		$image = wp_get_attachment_image_src( $attachment_id, $size );
		// url = $image[0];
		// width = $image[1];
		// height = $image[2];
		?>
		<img src="<?php echo $image[0]; ?>" />
	</div>
<?php }?>

</div>

<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php edit_post_link(); ?>
  <?php //wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
