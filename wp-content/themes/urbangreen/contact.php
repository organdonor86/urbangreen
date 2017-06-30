

<!-- CONTACT -->
	<section id="contact">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12">
					<div class="section-title">
						<h1><?php the_field('contact_headline', 128); ?></h1>
						<span class="st-border"></span>
					</div>
					</div>
				</div>
			</div>
			<!-- end title row -->

			<!-- main section row -->
			<div class="row">

				<!-- info column -->
				<div class="col-sm-12 col-lg-4 contact-info">

					<!-- Contact Paragraph -->
					<div class="col-sm-12 col-md-7 col-lg-12">
						<p><?php the_field('contact_text', 128); ?></p>
					</div>

					<!-- contact info grid  -->
					<div class="col-sm-12 col-md-5 col-lg-12">
						<div class="contact-container">
							<div>
								<div class="contact-icon">
									<i class="fa fa-mobile"></i>
								</div>
								<div class="contact-detail">
									<strong><?php the_field('phone_number', 128); ?></strong>
							  </div>
							</div>
							<div>
								<div class="contact-icon">
									<i class="fa fa-envelope-o"></i>
								</div>
								<div class="contact-detail">
									<strong><?php the_field('email_address', 128); ?></strong>
								</div>
							</div>
						</div>
					</div>

				<!-- end info column -->
				</div>

				<!-- form column -->
				<div class="col-sm-12 col-lg-7 col-lg-offset-1 form-col">
					<?php the_field('contact_code', 128); ?>
				</div>

			<!-- end main row -->
			</div>

		</div>
	</section>
	<!-- /CONTACT -->
