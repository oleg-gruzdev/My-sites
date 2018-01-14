<?php
/**
 * The template for displaying all pages
 *Template Name: contact-us
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rush_in_Alaskan_Dumplings
 */
	get_header('contact-us');
 ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();
?>
				<div class="entry-content">

					<div class="contact-us-title">
						
						<h1 class="title">contact <span>us</span></h1>
					</div>

					<div class="contact-us-content">
						<div class="container">
							<div class="contact-us-block">
								<div class="contact-us-block__inner">
									<p class="entry-text entry-text--1">First ever Russian pelmeni joint in the heart of Olympia. We serve pelmeni along with other delicious menu items to choose from!</p>
									
									<div class="contacts-item-block">

										<div class="contact-item address">
											<h3 class="contact-item-title">Address</h3>
											<p class="contact-info address-info">205 4th Ave E Olympia, WA 98502</p>
										</div>

										<div class="contact-item work-table">
											<h3 class="contact-item-title">Hours</h3>
											<p class="contact-info days-info">Sunday - Thursday</p>
											<p class="contact-info hours-info">11am - 8pm</p>
											<p class="contact-info days-info">Friday - Saturday</p>
											<p class="contact-info hours-info">11am - 10pm</p>
										</div>

										<div class="contact-item email">
											<h3 class="contact-item-title">Email</h3>
											<p class="contact-info email-info"><a href="mailto: rushinalaskandumplings@gmail.com">rushinalaskandumplings@gmail.com</a></p>
										</div>

										<div class="contact-item phone">
											<h3 class="contact-item-title">Phone number</h3>
											<p class="contact-info phone-info">360-943-1434</p>
										</div>

									</div>

									<div id="googleMap" class="map"></div>
								</div>

								<div class="facebook"><span>Like us on</span> <a href="https://www.facebook.com/rushindumplings/" class="fb-link">facebook</a></div>
								<p class="entry-text entry-text--2">We want to hear from you! Whether it's a new idea for a style of Pelmeni, comment/concern, or you just want to say hello - shoot us a message and we will get back to you as soon as possible!</p>
								<p class="entry-text entry-text--3">Thank you!</p>	

							</div>
							
						</div>
					</div>
		
		
				</div><!-- .entry-content -->

				
<?
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer('contact-us');
