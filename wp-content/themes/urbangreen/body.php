<section class="body-content">
<div class="container">
	<div class="row">
		<div class="col-md-12">
      <div class="col-md-12">
        <div class="body-wrap">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      	    <?php the_content(); ?>

            <?php endwhile; else :?>
        	  <p><?php _e( 'Sorry, nothing here!' ); ?></p>

          <?php endif; ?>

        </div>
      </div>
		</div>
	</div>
</div>
</section>
