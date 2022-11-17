<!-- Start Footer & Subscribe Section -->
	<section class="footer-subscribe-wrapper">

		<!-- Start Footer Area -->
		<div class="footer-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<div class="footer-heading">
								<h3>About Us</h3>
							</div>
							<p><?php echo get_field('footer_content','options');?></p>
							<ul class="footer-social">

							<?php if (get_field('socials','options')): ?>
								<?php foreach (get_field('socials','options') as $key => $value): ?>
								<li>
									<a href="<?php echo $value['social_link'];?>"> <i class="fab fa-<?php echo $value['social_icon'];?>"></i>
									</a>
								</li>
								<?php endforeach ?>
							<?php endif ?>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<div class="footer-heading">
								<h3>Our Services</h3>
							</div>
							<ul class="footer-quick-links">
								<?php

								 $args = array(
									'order'                  => 'ASC',
									'orderby'                => 'menu_order',
									'post_type'              => 'nav_menu_item',
									'post_status'            => 'publish',
									'output'                 => ARRAY_A,
									'output_key'             => 'menu_order',
									'nopaging'               => true,
									'update_post_term_cache' => false );

			  					 $items = wp_get_nav_menu_items( 'Our Services', $args );
			  					 $page_url = get_permalink();
			  					 foreach($items as $item ) :
								?>
								<li> <a href="<?php echo $item->url;?>"><?php echo $item->title;?></a></li>
								<?php endforeach;?>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<div class="footer-heading">
								<h3>Useful Links</h3>
							</div>
							<ul class="footer-quick-links">
								<?php

								 $args = array(
									'order'                  => 'ASC',
									'orderby'                => 'menu_order',
									'post_type'              => 'nav_menu_item',
									'post_status'            => 'publish',
									'output'                 => ARRAY_A,
									'output_key'             => 'menu_order',
									'nopaging'               => true,
									'update_post_term_cache' => false );

			  					 $items = wp_get_nav_menu_items( 'Useful Links', $args );
			  					 $page_url = get_permalink();
			  					 foreach($items as $item ) :
								?>
								<li> <a href="<?php echo $item->url;?>"><?php echo $item->title;?></a></li>
								<?php endforeach;?>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<div class="footer-heading">
								<h3>Contact Info</h3>
							</div>
							<div class="footer-info-contact"> <i class="flaticon-phone-call"></i>
								<h3>Phone</h3>
								<span><a href="tel:<?php echo get_field('footer_phone','options'); ?>"><?php echo get_field('footer_phone','options'); ?></a></span>
							</div>
							<div class="footer-info-contact"> <i class="flaticon-envelope"></i>
								<h3>Email</h3>
								<span><a href="mailto:<?php echo get_field('footer_email','options'); ?>"><?php echo get_field('footer_email','options'); ?></a></span>
							</div>
							<div class="footer-info-contact"> <i class="flaticon-placeholder"></i>
								<h3>Address</h3>
								<span><?php echo get_field('footer_address','options'); ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Section -->
	</section>
	<!-- End Footer & Subscribe Section -->

	<!-- Start Copy Right Section -->
	<div class="copyright-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12 col-md-12">
					<p> <i class="far fa-copyright"></i><?php echo get_field('copyright_text','options'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Copy Right Section -->

	<!-- Start Go Top Section -->
	<div class="go-top">
		<i class="fas fa-chevron-up"></i>
		<i class="fas fa-chevron-up"></i>
	</div>
	<!-- End Go Top Section -->

<?php wp_footer(); ?>
</body>
</html>
