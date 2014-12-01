<?php if(!is_front_page() ) { ?>
	
	<div class="page-header text-center">
		
		<?php if ( has_post_thumbnail()) : ?>
		<div>
			<figure>
				<?php the_post_thumbnail('icopeque', array('class' => 'img-rounded')); ?>
				<!-- <figcaption class="caption wp-caption-text">sdgsd</figcaption> -->
			</figure>
		</div>
	<?php endif; ?>
		<h1><?php echo roots_title(); ?></h1>
	</div>
	
<?php } ?>