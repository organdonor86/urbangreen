<section id="testimonial" style="background-image: url(<?php echo get_theme_file_uri(); ?>/images/tree.jpeg); background-image: cover;">
	<div class="container">
		<div class="row">
			<div class="overlay"></div>
			<div class="col-md-8 col-md-offset-2 col-sm-12">
				<div class="st-testimonials">

					<div class="item active text-center">
						<p><?php the_field('testimonial_1', 128); ?></p>
						<div class="st-border"></div>
						<div class="client-info">
							<h5>Tom Roof</h5>
							<span>CEO of Domain.com</span>
						</div>
					</div>

					<div class="item text-center">
						<p><?php the_field('testimonial_2', 128); ?></p>
						<div class="st-border"></div>
						<div class="client-info">
							<h5>Mustafiz</h5>
							<span>CEO of Domain.com</span>
						</div>
					</div>

					<div class="item text-center">
						<p><?php the_field('testimonial_3', 128); ?></p>
						<div class="st-border"></div>
						<div class="client-info">
							<h5>Sean Hynes</h5>
							<span>CEO of Domain.com</span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
