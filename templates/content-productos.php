<article <?php //post_class(); ?>>

			

	<div class="well">
		
			<header>
			    <h3 class="text-center">
			    	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			    </h3>
		    </header>

		<?php if ( get_field('img_heading') ) {?>
			<div class="col-sm-12 col-md-6">
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

		
		
		<div class="row">
		
			<div class="col-sm-12 col-md-6 text-center">
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php //the_post_thumbnail('thumbnail'); ?>
					<p><?php the_post_thumbnail('thumbnail', array('class' => 'img-rounded')); ?></p>
				</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
				
			</div>
			
			<div class="col-sm-12 col-md-6">
				<?php if ( get_field('main_heading') ) {?>
				<p>
					<?php the_field('main_heading'); ?>
				</p>
				<?php }?>
				<a href="<?php the_permalink(); ?>" class="btn btn-default" role="button">
					<span class="glyphicon glyphicon-zoom-in"></span> info</a>
			</div>
			
		</div>
 
	</div>
	
</article>