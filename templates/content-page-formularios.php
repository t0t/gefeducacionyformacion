<?php while (have_posts()) : the_post(); ?>

	<div class="row">
	<?php if( have_rows('ticks') ): ?>

	<div class="col-sm-6">

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


	
				<div class="col-sm-6">
				
				<?php $attachment_id = get_field('img_heading');
				$size = "category-thumb"; // (thumbnail, medium, large, full or custom size)
				$image = wp_get_attachment_image_src( $attachment_id, $size );
				// url = $image[0];
				// width = $image[1];
				// height = $image[2];
				?>
				<img src="<?php echo $image[0]; ?>" class="img-rounded">
		
					<?php echo do_shortcode('[contact-form-7 id="29" title="Formulario de contacto 1"]'); ?>
					<?php //the_content(); ?>
				</div>
				
				<div class="clearfix"></div>
					
					<div class="row">
						
						<div class="col-sm-4 col-sm-offset-2">
						
							<div class="panel panel-default">
							  <div class="panel-heading">
							    <h3 class="panel-title">Delegación de Castilla la Mancha</h3>
							  </div>
							  <div class="panel-body">
							    <address>Cristina Casanova Gilabert<br>
							    Tel: 617954680</address>
							    <a href="mailto:cristina@gefeducacionyformacion.com" class="btn btn-default">
								    <span class="glyphicon glyphicon-envelope"></span> Email
							    </a>
							  </div>
							</div>
																		
						</div>
						
						<div class="col-sm-4">
						
							<div class="panel panel-default">
							  <div class="panel-heading">
							    <h3 class="panel-title">Delegación de la Región de Murcia</h3>
							  </div>
							  <div class="panel-body">
							    <address>Anna Casanova Sánchez<br>
							    Tel: 605430320</address>
							    <a href="mailto:anna@gefeducacionyformacion.com" class="btn btn-default">
								    <span class="glyphicon glyphicon-envelope"></span> Email
							    </a>
							  </div>
							</div>
																		
						</div>
						
				</div>
  
  <?php edit_post_link(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
