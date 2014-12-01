<?php while (have_posts()) : the_post(); ?>

<div class="well">
	<div class="row">
	
		<?php if ( get_field('img_heading') ) {?>
			<div class="col-sm-12 col-lg-5">
				<?php $attachment_id = get_field('img_heading');
				$size = "main"; // (thumbnail, medium, large, full or custom size)
				$image = wp_get_attachment_image_src( $attachment_id, $size );
				// url = $image[0];
				// width = $image[1];
				// height = $image[2];
				?>
				<img src="<?php echo $image[0]; ?>" class="img-rounded">
			</div>
		<?php }?>

		<div class="col-sm-12 col-lg-7">
			<h3><?php if ( get_field('main_heading') ) {?>
			<?php the_field('main_heading'); ?>
			<?php }?></h3>
			<p><?php if ( get_field('parrafo') ) {?>
			<?php the_field('parrafo'); ?>
			<?php }?></p>
		</div>
	</div><!-- /row -->
</div><!-- /well -->
<div class="row">
	<div class="col-sm-12">
		<?php the_content(); ?>
	</div>
</div>
<!-- Paneles -->
<div class="row">

	<?php if( have_rows('panel_0') ): ?>

<div class="row">

		<?php if ( get_field('panel_img0') ) {?>
			<div class="col-sm-12 col-lg-6">
				<?php $attachment_id = get_field('panel_img0');
				$size = "main"; // (thumbnail, medium, large, full or custom size)
				$image = wp_get_attachment_image_src( $attachment_id, $size );
				// url = $image[0];
				// width = $image[1];
				// height = $image[2];
				?>
				<img src="<?php echo $image[0]; ?>" class="img-rounded">
			</div>
		<?php }?>

	<div class="col-sm-12 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">
			    <?php if ( get_field('panel_header_0') ) {?>
				<?php the_field('panel_header_0'); ?>
				<?php }?>
		    </h3>
		  </div>
		  <div class="panel-body">
			    <dl>
			    <?php while ( have_rows('panel_0') ) : the_row(); ?>
			        
			        <dt><?php the_sub_field('feature_title_x'); ?></dt>
			        <dd><?php the_sub_field('feature_x'); ?></dd>
			    
			    <?php endwhile; ?>
			    </dl>
		  </div>
		</div>
	</div>
</div><!-- fin row nuevo -->
	<?php else : ?>
	<?php endif; ?>


	<?php if( have_rows('panel_1') ): ?>

	<div class="row">

		<?php if ( get_field('panel_img1') ) {?>
			<div class="col-sm-12 col-lg-6">
				<?php $attachment_id = get_field('panel_img1');
				$size = "main"; // (thumbnail, medium, large, full or custom size)
				$image = wp_get_attachment_image_src( $attachment_id, $size );
				// url = $image[0];
				// width = $image[1];
				// height = $image[2];
				?>
				<img src="<?php echo $image[0]; ?>" class="img-rounded">
			</div>
		<?php }?>

	<div class="col-sm-12 col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">
			    <h3 class="panel-title">
				    <?php if ( get_field('panel_header') ) {?>
					<?php the_field('panel_header'); ?>
					<?php }?>
			    </h3>
			</div>
			<div class="panel-body">
				<dl>
				    <?php while ( have_rows('panel_1') ) : the_row(); ?>
				        <dt><?php the_sub_field('feature_title_x'); ?></dt>
				        <dd><?php the_sub_field('feature_x'); ?></dd>
				    <?php endwhile; ?>
				</dl>
			</div>
		</div>
	</div>
</div><!-- fin row nuevo -->
	<?php else : ?>
	<?php endif; ?>
	

	
	<?php if( have_rows('panel_2') ): ?>
		<?php if ( get_field('panel_img2') ) {?>
			<div class="col-sm-12 col-lg-6">
				<?php $attachment_id = get_field('panel_img2');
				$size = "main"; // (thumbnail, medium, large, full or custom size)
				$image = wp_get_attachment_image_src( $attachment_id, $size );
				// url = $image[0];
				// width = $image[1];
				// height = $image[2];
				?>
			<img src="<?php echo $image[0]; ?>" class="img-rounded">
			</div>
	<?php }?>

	<div class="col-sm-12 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">
			    <?php if ( get_field('panel_header_2') ) {?>
				<?php the_field('panel_header_2'); ?>
				<?php }?>
		    </h3>
		  </div>
		  <div class="panel-body">
 			    <dl>
			    <?php while ( have_rows('panel_2') ) : the_row(); ?>
			 
			        <dt><?php the_sub_field('feature_title_x'); ?></dt>
			        <dd><?php the_sub_field('feature_x'); ?></dd>
			 
			    <?php endwhile; ?>
			    </dl>
		  </div>
		</div>
	</div>

	<?php else : ?>
	<?php endif; ?>


<?php if( have_rows('panel_3') ): ?>
		<?php if ( get_field('panel_img3') ) {?>
			<div class="col-sm-12 col-lg-6">
				<?php $attachment_id = get_field('panel_img3');
				$size = "main"; // (thumbnail, medium, large, full or custom size)
				$image = wp_get_attachment_image_src( $attachment_id, $size );
				// url = $image[0];
				// width = $image[1];
				// height = $image[2];
				?>
			<img src="<?php echo $image[0]; ?>" class="img-rounded">
			</div>
	<?php }?>

	<div class="col-sm-12 col-lg-6">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">
			    <?php if ( get_field('panel_header_3') ) {?>
				<?php the_field('panel_header_3'); ?>
				<?php }?>
		    </h3>
		  </div>
		  <div class="panel-body">
 			    <dl>
			    <?php while ( have_rows('panel_3') ) : the_row(); ?>
			 
			        <dt><?php the_sub_field('feature_title_x'); ?></dt>
			        <dd><?php the_sub_field('feature_x'); ?></dd>
			 
			    <?php endwhile; ?>
			    </dl>
		  </div>
		</div>
	</div>

	<?php else : ?>
	<?php endif; ?>
	
</div><!-- /row -->			
				
<?php //the_content(); ?>
  
  <?php edit_post_link(); ?>
  <?php //wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>


<?php //get_template_part('templates/content', 'page-home-productos'); ?>