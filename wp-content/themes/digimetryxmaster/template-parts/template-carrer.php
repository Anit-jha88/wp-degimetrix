<?php
/**
 *  Template Name: Carrer Page
 */
get_header();
?>
<?php echo get_template_part( 'template-parts/header', 'banner' ); ?>
	<!-- Start Contact Box Area -->
	<section class="contact-info-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6>Career</h6>
						<h2>Fill the form</h2>
					</div>
				</div>

				<div class="row align-items-center">
					<div class="col-lg-10 offset-lg-1">
						<div class="contact-form">
							<p class="form-message"></p><br>
<?php echo do_shortcode('[contact-form-7 id="29" title="Contact" html_class="contact-form form" html_id="contact-form"]') ?>
			</div>
					</div>
				</div>

			</div>
		</div>
    </section>
	<!-- End Contact Box Area -->
	<?php get_footer() ?>