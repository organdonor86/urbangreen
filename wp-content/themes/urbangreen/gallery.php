<section class="gallery">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="col-sm-12">
				<?php the_field('page_gallery'); ?>
			</div>
		</div>
	<?php endwhile; else :?>
	<p><?php _e( 'Sorry, nothing here!' ); ?></p>
	<?php endif; ?>
	</div>
</section>
