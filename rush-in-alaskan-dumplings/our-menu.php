<?php
/**
 * The template for displaying all pages
 *Template Name: our-menu
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rush_in_Alaskan_Dumplings
 */
	get_header();
 ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();
?>
				<div class="entry-content">
					<div class="page-title">
							<h1 class="title">our <span>menu</span></h1>
					</div>
					


					<div class="our-menu-content">
						
							<div class="container">
								<!--DUMPLINGS-->
								<div class="menu-block menu-block--1">

								<?php 
								$food_block_1 = new WP_Query ( array ('post_type' => 'post',
																	  'category_name' => 'dumplings',
																	  'meta_key' => 'number',
									  								  'orderby' => 'meta_value_num',
									 								  'order' => 'ASC',
									   
									 ));

								if ( $food_block_1 -> have_posts()) {
									 ?>

									<h2 class="menu-block-title" id='dumplings'>Dumplings</h2>
									<p class="subtitle">beef/chicken/beef&pork/potato&cheese/potato&mushrooms</p>
									<p class="subtitle-for-mobile">beef/chicken/beef&pork potato&cheese/potato&mushrooms</p>
									<div class="menu-block-content">
										<div class="menu-block__inner">
											<div class="food-block food-block--1">

								<?php
								while (  $food_block_1 -> have_posts() ) {
								 $food_block_1 -> the_post();
								 ?>

									 
												<div class="food-block__inner">
													<div class="food-item">
														<span class="food-name"><?php the_title()?></span>
													</div>
													<span class="food-price"><?php echo get_post_meta( $post->ID, 'price', true ); ?></span>
													<?php the_content()?>
												</div>
											
										<?php
										};
										} else {
											echo 'Posts not founded';
											}?>
										
											</div>
											
								<?php wp_reset_postdata();?>



								<?php		
								$food_block_2 = new WP_Query ( array ('post_type' => 'post',
																	  'category_name' => 'extras',
																	  'meta_key' => 'number',
									  								  'orderby' => 'meta_value_num',
									 								  'order' => 'ASC',
									   
									 ));
								if ( $food_block_2 -> have_posts()) {
									 ?>
											<div class="food-block food-block--2">
												<h3 class="food-block-title">Extras</h3>

												<?php
									while (  $food_block_2 -> have_posts() ) {
									 $food_block_2 -> the_post();
									 ?>

												<div class="food-block__inner">
													<div class="food-item">
														<span class="food-name"><?php the_title()?></span>
													</div>
													<span class="food-price"><?php echo get_post_meta( $post->ID, 'price', true ); ?></span>
													<?php the_content()?>
												</div>

											<?php
											}; 
											} else {
											echo 'Posts not founded';
											}?>
											</div>
								<?php wp_reset_postdata();?>



									<?php		
								$food_block_3 = new WP_Query ( array ('post_type' => 'post',
																	  'category_name' => 'flavored-sour-cream',
																	  'meta_key' => 'number',
									  								  'orderby' => 'meta_value_num',
									 								  'order' => 'ASC',
									   
									 ));
								if ( $food_block_3 -> have_posts()) {
									 ?>
											<div class="food-block food-block--3">
												<h3 class="food-block-title">Flavored sour cream</h3>

												<?php
									while (  $food_block_3 -> have_posts() ) {
									 $food_block_3 -> the_post();
									 ?>

													<div class="food-block__inner">
														<div class="food-item">
															<span class="food-name"><?php the_title()?></span>
														</div>
														<span class="food-price"><?php echo get_post_meta( $post->ID, 'price', true ); ?></span>
														<?php the_content()?>
													</div>

											<?php
											}
											} else { echo 'Posts not founded';
												}?>
											</div>
								<?php wp_reset_postdata();?>
										</div>
									</div>
								</div><!--DUMPLINGS-->



								<!--SOUPS AND SALADS-->
								<div class="menu-block menu-block--2">

								<?php 
								$food_block_4 = new WP_Query ( array ('post_type' => 'post',
																	  'category_name' => 'soups',
																	  'meta_key' => 'number',
									  								  'orderby' => 'meta_value_num',
									 								  'order' => 'ASC',
									   
									 ));

								if ( $food_block_4 -> have_posts()) {
									 ?>

									<h2 id="soups-and-salads" class="menu-block-title">Soups and Salads</h2>
									
									<div class="menu-block-content">
										<div class="menu-block__inner">
											<div class="food-block food-block--4">

								<?php
								while (  $food_block_4 -> have_posts() ) {
								 $food_block_4 -> the_post();
								 ?>

									 
												<div class="food-block__inner">
													<div class="food-item">
														<span class="food-name"><?php the_title()?></span>
													</div>
													<span class="food-price"><?php echo get_post_meta( $post->ID, 'price', true ); ?></span>
													<?php the_content()?>
												</div>
											
										<?php
										}; 
										} else {
											echo 'Posts not founded';
											}?>
										
											</div>
											
								<?php wp_reset_postdata();?>



								<?php		
								$food_block_5 = new WP_Query ( array ('post_type' => 'post',
																	  'category_name' => 'salads',
																	  'meta_key' => 'number',
									  								  'orderby' => 'meta_value_num',
									 								  'order' => 'ASC',
									   
									 ));
								if ( $food_block_5 -> have_posts()) {
									 ?>
											<div class="food-block food-block--5">
											<?php
									while (  $food_block_5 -> have_posts() ) {
									 $food_block_5 -> the_post();
									 ?>

													<div class="food-block__inner">
														<div class="food-item">
															<span class="food-name"><?php the_title()?></span>
														</div>
														<span class="food-price"><?php echo get_post_meta( $post->ID, 'price', true ); ?></span>
														<?php the_content()?>
													</div>

											<?php
											}; 
											} else {
											echo 'Posts not founded';
											}?>
											</div>
								<?php wp_reset_postdata();?>
								
										</div>
									</div>
								</div><!--SOUPS AND SALADS-->



								<!--DESSERTS AND DRINKS-->
								<div class="menu-block menu-block--3">

								<?php 
								$food_block_6 = new WP_Query ( array ('post_type' => 'post',
																	  'category_name' => 'desserts',
																	  'meta_key' => 'number',
									  								  'orderby' => 'meta_value_num',
									 								  'order' => 'ASC',
									   
									 ));

								if ( $food_block_6 -> have_posts()) {
									 ?>

									<h2 id='desserts-and-drinks' class="menu-block-title">Desserts and drinks</h2>
									
									<div class="menu-block-content">
										<div class="menu-block__inner">
											<div class="food-block food-block--4">

								<?php
								while (  $food_block_6 -> have_posts() ) {
								 $food_block_6 -> the_post();
								 ?>

									 
												<div class="food-block__inner">
													<div class="food-item">
														<span class="food-name"><?php the_title()?></span>
													</div>
													<span class="food-price"><?php echo get_post_meta( $post->ID, 'price', true ); ?></span>
													<?php the_content()?>
												</div>
											
										<?php
										}; 
										} else {
											echo 'Posts not founded';
											}?>
										
											</div>
											
								<?php wp_reset_postdata();?>



								<?php		
								$food_block_7 = new WP_Query ( array ('post_type' => 'post',
																	  'category_name' => 'drinks',
																	  'meta_key' => 'number',
									  								  'orderby' => 'meta_value_num',
									 								  'order' => 'ASC',
									   
									 ));
								if ( $food_block_7 -> have_posts()) {
									 ?>
											<div class="food-block food-block--5">
											<?php
									while (  $food_block_7 -> have_posts() ) {
									 $food_block_7 -> the_post();
									 ?>

													<div class="food-block__inner">
														<div class="food-item">
															<span class="food-name"><?php the_title()?></span>
														</div>
														<span class="food-price"><?php echo get_post_meta( $post->ID, 'price', true ); ?></span>
														<?php the_content()?>
													</div>

											<?php
											}; 
											} else {
											echo 'Posts not founded';
											}?>
											</div>
								<?php wp_reset_postdata();?>
								
										</div>
									</div>
								</div><!--DESSERTS AND DRINKS-->


								



							</div>
						
					</div><!-- .container -->

					<div class="pre-footer">
						<h1 class="title">bon <span>appetit</span></h1>
					</div>
		
				</div><!-- .entry-content -->

				
<?
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
