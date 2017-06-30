<?php
    /**
    * Template Name: Index
    */
?>

<?php get_header(); ?>

<!-- SLIDER -->
<section id="slider">
	<div id="home-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
		<div class="carousel-inner">
			<div class="item active" style="background-image: url(<?php echo get_field('slider_image_1')['url']; ?>)">
				<div class="carousel-caption container">
					<div class="row">
						<div class="col-sm-7">
							<h2><?php echo get_field('slider_headline_1'); ?></h2>
							<p><?php echo get_field('slider_text_1'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="item" style="background-image: url(<?php echo get_field('slider_image_2')['url']; ?>)">
				<div class="carousel-caption container">
					<div class="row">
						<div class="col-sm-7">
							<h2><?php echo get_field('slider_headline_2'); ?></h2>
							<p><?php echo get_field('slider_text_2'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="item" style="background-image: url(<?php echo get_field('slider_image_3')['url']; ?>)">
				<div class="carousel-caption container">
					<div class="row">
						<div class="col-sm-7">
							<h2><?php echo get_field('slider_headline_3'); ?></h2>
							<p><?php echo get_field('slider_text_3'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			<a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
		</div>
	</div> <!--/#home-carousel-->
</section>
<!-- /SLIDER -->

<?php get_template_part( 'body'); ?>

<!-- SERVICES -->
<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
        <div class="col-md-12">
  				<div class="section-title">
  					<h1>Services</h1>
  					<span class="st-border"></span>
  				</div>
          <p>Here are the services we offer at the moment sort of thing...</p>
        </div>
			</div>

			<div class="portfolio-wrapper" >
			<div class="portfolio-items">

				<div class="col-lg-4 col-sm-12 work-grid">
					<div class="portfolio-content">
						<img class="img-responsive" src="wp-content/themes/tomkinseyfencingandlandscaping/images/works/portfolio-4.jpg" alt="">
						<div class="portfolio-overlay">
							<a href="./images/works/portfolio-4.jpg"><i class="fa fa-camera-retro"></i></a>
							<h5>Web Development</h5>
							<p>Design, Develop</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12 work-grid">
					<div class="portfolio-content">
						<img class="img-responsive" src="wp-content/themes/tomkinseyfencingandlandscaping/images/works/portfolio-5.jpg" alt="">
						<div class="portfolio-overlay">
							<a href="./images/works/portfolio-5.jpg"><i class="fa fa-camera-retro"></i></a>
							<h5>Web Development</h5>
							<p>Design, Develop</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12 work-grid">
					<div class="portfolio-content">
						<img class="img-responsive" src="wp-content/themes/tomkinseyfencingandlandscaping/images/works/portfolio-6.jpg" alt="">
						<div class="portfolio-overlay">
							<a href="./images/works/portfolio-6.jpg"><i class="fa fa-camera-retro"></i></a>
							<h5>Web Development</h5>
							<p>Design, Develop</p>
						</div>
					</div>
				</div>

			</div>
			</div>

		</div>
	</div>
</section>
<!-- /SERVICES -->

<?php get_template_part( 'testimonials'); ?>
<?php get_template_part( 'contact'); ?>
<?php get_footer(); ?>
