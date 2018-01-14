<?php
/**
 * Template part for displaying front-page content
 * Template Name: front-page
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package havrylovski
 */

get_header(); ?>

	<div id="primary">
		<main id="main" class="site-main">

<!--MAIN SLIDER-->
	<div class="main-slider">
		<div class="slides-counter slides-counter-left"><span id="left-numerator">0</span><span id="left-denominator">3</span></div>
		<div class="slides-counter slides-counter-right"><span id="right-numerator">0</span><span id="right-denominator">2</span></div>
			<div class="fade">

				<div class="slider slider1">
					<div class="container-fluid">
						<div class="slider-content">
							<h2>Архітектура <span>вашої</span> мрії</h2>
							<p>інтер’єри для респектабельних людей на будь-який смак<br>загляньте - можливо простір вашої мрії зовсім поруч?</p>


<?  $architecture_page = new WP_Query ( array ( 'post_type' => 'page',
										  'pagename' => 'arhitektura',
											) 
										);

					if  ( $architecture_page ) { 
						$architecture_page -> the_post();
						?>
							<button type="button" class="main-slider-button main-slider-button-arh"><a href="<?php the_permalink(); ?>">архітектура</a></button>

						<? }
					 wp_reset_postdata();
					 ?>

<?  $design_page = new WP_Query ( array ( 'post_type' => 'page',
										  'pagename' => 'dizayn',
											) 
										);

					if  ( $design_page ) { 
						$design_page -> the_post();
						?>
							<button type="button" class="main-slider-button main-slider-button-diz"><a href="<?php the_permalink(); ?>">інтер’єри</a></button>

						<? }
					 wp_reset_postdata();
					 ?>

						</div>
					</div>
				</div>

				<div class="slider slider2">
					<div class="container-fluid">
						<div class="slider-content">
							<h2>Архітектура <span>вашої</span> мрії</h2>
							<p>інтер’єри для респектабельних людей на будь-який смак<br>загляньте - можливо простір вашої мрії зовсім поруч?</p>
							<?  $architecture_page = new WP_Query ( array ( 'post_type' => 'page',
										  'pagename' => 'arhitektura',
											) 
										);

					if  ( $architecture_page ) { 
						$architecture_page -> the_post();
						?>
							<button type="button" class="main-slider-button main-slider-button-arh"><a href="<?php the_permalink(); ?>">архітектура</a></button>

						<? }
					 wp_reset_postdata();
					 ?>

<?  $design_page = new WP_Query ( array ( 'post_type' => 'page',
										  'pagename' => 'dizayn',
											) 
										);

					if  ( $design_page ) { 
						$design_page -> the_post();
						?>
							<button type="button" class="main-slider-button main-slider-button-diz"><a href="<?php the_permalink(); ?>">інтер’єри</a></button>

						<? }
					 wp_reset_postdata();
					 ?>
						</div>
					</div>
				</div>

				<div class="slider slider3">
					<div class="container-fluid">
					<div class="slider-content">
						<h2>Архітектура <span>вашої</span> мрії</h2>
						<p>інтер’єри для респектабельних людей на будь-який смак<br>загляньте - можливо простір вашої мрії зовсім поруч?</p>
						<?  $architecture_page = new WP_Query ( array ( 'post_type' => 'page',
										  'pagename' => 'arhitektura',
											) 
										);

					if  ( $architecture_page ) { 
						$architecture_page -> the_post();
						?>
							<button type="button" class="main-slider-button main-slider-button-arh"><a href="<?php the_permalink(); ?>">архітектура</a></button>

						<? }
					 wp_reset_postdata();
					 ?>

<?  $design_page = new WP_Query ( array ( 'post_type' => 'page',
										  'pagename' => 'dizayn',
											) 
										);

					if  ( $design_page ) { 
						$design_page -> the_post();
						?>
							<button type="button" class="main-slider-button main-slider-button-diz"><a href="<?php the_permalink(); ?>">інтер’єри</a></button>

						<? }
					 wp_reset_postdata();
					 ?>
						</div>
					</div>
				</div>

			</div>
	</div>
	<!--MAIN SLIDER END-->


	<!--ABOUT US-->
	<div class="about-us-block">
		<div class="container-fluid group">
			<div class="about-us-block-box group">
				<div class='logo-box-big'>
					<div class="logo-box-inside" style="background-color: #000">


	<?  $about_us = new WP_Query ( array ( 'post_type' => 'page',
										    'pagename' => 'about-us',
											) 
										);

					if  ( $about_us ) { 
						$about_us -> the_post();
						?>
						<a class="logo-big" href="<?php the_permalink(); ?>">
					<? }
					 wp_reset_postdata();
					 ?>
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 595.3 224" style="enable-background:new 0 0 595.3 224;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#FFFFFF;}
	.about-us-block svg>g {
		display: block;
height: 100%;
		transform: scale(1.589) translateX(-100px) translateY(-43px);
	}
	.about-us-block svg {
		display: block;
		overflow: visible;
		transform: translateY(110px);
	}
</style>
<g>
	<g>
		<g>
			<g>
				<path class="st0" d="M259.8,173.1c-1.5,4.4-3.9,6.9-3.9,7c-3.7,4.2-3.2-3-3-4.5c0.1-1,0.1-1.5,0.2-2.5c-0.3,0.1-2.3-0.1-3.2,0
					c-0.1,3.3,0.2,7.7,1.9,9.8c3.7,4.6,11-6.8,12.6-9.8C262.6,173.1,261.4,173.1,259.8,173.1z"/>
				<g>
					<path class="st0" d="M171.5,135.9c4.9-3.1,10.4-9,12-10.5c-0.5,2-1.5,5.6-1.5,7.4c0,2,0.3,6.1,2.7,6.5c3.6,0.6,8-9.7,10.7-13.9
						c-2.5,10,0.2,15.3,3.4,16.5c5.3,2.1,17.2-22.3,19.7-26.7c1.3-2.2,2.4-4.2,3.6-6.1c-1.8,5.9-3.3,12.1-3.7,19.5
						c-0.2,3.4,0.6,13.2,6.6,9.4c5.7-3.5,10.1-12.4,11.9-19.6c0.8-3.2,1.6-7.8,0.4-12.2c3.2,0.5,6.1,0.1,8-3.1
						c0.2-0.3,0.2-0.9,0.1-1.6c0.1,0,0.1,0,0.2,0c0,0,0,0,0,0c2.6,1.8,4,2.1,2.7,7.2c-1.6,6.2-6.9,21.5-1.8,26.3
						c5.4,5.1,12.1-0.9,14.9-7.2c0.2,0.1,0.3,0.8,0.7,1.3c2.3,3,7.1-3,9.5-7.6c1.4-2.6,4.1-8.1,4.5-9c-0.8,4.6-1.3,5.8-2.4,10
						c-1.8,2.4-12.7,20.4-15.8,26.1c-0.3,0.5-1.3,2.5-1.5,3c1.6,0,2.4-0.1,4-0.1c3.5-7.2,8.1-15.9,12.1-22
						c-0.2,4.1-2.9,15.7-3.2,17.2c-0.2,1.2-0.6,3.2-0.9,4.4c1.7,0.1,2.4,0,3.9,0.1c2.8-10.2,4.4-19.9,4.7-23.2
						c0.1-1,0.4-0.5,0.6-1.5c3.3-4.3,7.5-6.8,11.9-9.8c0,0.9,0.3,20.8,8.5,21.5c3.7,0.3,6.7-5.9,7.6-7.8c2.6-5.4,5.3-11.7,8.6-15.2
						c-0.2,3-0.2,5.8,0,7.8c0.3,4.3,1.2,9.2,5.5,10.5c3.9,1.3,11.2-11.2,13.1-15.4c2.8-6.4,4.2-11.8,4.3-19.1c3.1-0.9,6.4-2,9.1-3.5
						c0,0.1,0,0.1,0,0.2c-0.1,6.5-3.9,12.3-5,18.7c-0.8,5-0.6,13.9,4.9,15.5c9.7,2.9,14-12.4,15.1-19.2c0.9-5.1-0.1-8.5,0-13.6
						c0-1.7,3.6-1.2,4.4-1.5c1.3-0.4,2.3-1.2,3.1-2.2c4.9,4.6,9.9,12.4,8.5,19.3c-0.6,0.4-12.2,3.2-14.6,10.9
						c-0.6,2.1-0.9,4.8,2,5.8c3.2,1.2,8.4-0.1,12.1-2.3c2.8-1.7,5.6-6.1,6.5-11.6c3-0.5,4.7-1.2,6.5-2.2c-0.4,3.7-1,5.6-0.4,10.8
						c0.1,0.8,3.5,2,3.5,1.7c0-2.2,2.6-12.5,4.4-16c0.1,0,1.4,16.3,8.2,11.4c4.6-3.3,11.8-18,12.1-18.3c-0.4,1.3-0.9,2.6-1.3,4
						c-1.4,4.7-4.6,13.1,1.7,12.6c4.1-0.3,10.7-10.8,12.3-13.1c3.7-5.5,7.5-10.1,10.9-13.8c3.3-3.6,4.7-4,6.8-5.7
						c0.9-0.7-0.9-6.5-1.9-5.9c-4.2,2.4-12,15-15.1,19.5c-0.8,1.1-8.7,13.9-11.6,13.6c-2-0.5,1.7-8.2,4-12.9c2.9-6,5.2-8,7.9-14.1
						c0.9-2-5-4.8-5.8-4.4c-5.4,3-12.2,18.2-12.1,18.4c-1.4,2.6-1.9,4.8-3.4,7.7c-0.5,1-4.1,11.5-6.3,9.3
						c-1.7-1.7-0.2-10.4-0.5-10.8c0,0,4.1-2.8,7.4-9.5c1.6-3.4,3.3-11.9,2.1-14.4c-0.5-1.1-4.4-3.6-5.8-2.8
						c-4.2,2.4-7.9,12.1-9.7,16.3c-1.2,2.6-2.2,5.5-2.3,5.5c2-9.6,9.2-34,23.3-49.5c1.8-2,4-4.1,6.5-5.2c0.1-0.1-2.5-5.6-4.2-5.5
						c-3.8,0.1-7.9,7.5-12.1,13.7c-6.3,9.2-17.1,37.8-18.2,52.4c-1.9,1.4-3.8,2.7-6.8,3.3c-0.6-9.4-8.2-14.3-9.6-15.4
						c-2.6-2.1-3.3-4.3-3.2-6.5c-1.2-2.4,14.8-9.5,13.2-19c-0.2-1.4-2.6-2.7-4.2-2.6c-2,0.1-11.9,9.9-15.5,14.4
						c-1.9,2.3-3.1,5.1-2.3,7.4c0,0,0,0,0,0c0,0,0,0,0,0c0,0.1,0,0.1,0.1,0.2c0.1,0.2,0.5,0.5,1,0.9c0.2,0.2,0.5,0.5,0.9,0.7
						c-1.1,1.3-2.5,2.1-5,1.4c-0.1,0-0.4-0.1-0.3,0.1c0.8,7.4,0.8,13.7-1,21c-1.2,5-3,9.7-8.5,12.5c-0.9,0.5-2.1-1.7-1.7-3.4
						c1-7,4.1-11.5,6.2-18.2c2.3-7.4,2.9-13.6-1-17.9c-0.3-0.3-5.2-3.1-5.7,0.8c-0.3,0.9-0.4,1.8-0.4,2.7c-2.7,2.5-6.9,4-10.5,5
						c-0.5-0.9-1-1.8-1.8-2.6c-3.5-3.3-12.1-1.7-15.7,0.3c-6.1,3.4-10.8,12.3-5.5,14.8c0.4,0.2,0.7,0.5,1,0.7
						c-0.2,0.5-0.5,0.9-0.6,1.4c-2.2,3.5-4.8,6.6-8.3,14.6c-0.3,0.8-4.3,9.9-6.4,8.9c-4.1-2-2.7-11.6-2-19.2
						c2.5-1.8,4.7-3.9,6.7-6.3c9.4-10.9,14.5-22.9,20.3-36.2c3-6.9,4.5-13.4,5.4-20.3c0.4-2.9,1.6-10.2-0.1-12.9
						c-3.6-5.9-10.4-0.1-13.8,4.8c-7.6,10.9-13.8,24.2-17.2,34.1c-3.6,10.4-7.2,21.1-7.9,32.2c-3.2,2.2-6.3,4.2-9.1,6.5
						c2.3-5.4,5-10.8,5.4-14.7c0.4-3.4-3.6-6-5.7-2.4c-3,5.3-3.6,6.4-5.9,12.4c-0.6,1.1-4.2,7.2-4.9,8.1c-1.4,1.8-2.5,0-2.1-3.5
						c0.5-4.9,6.4-13.8,6.2-19.7c0-0.3-1.4-1.6-1.7-1.3c-3.7,3.8-4.1,6.8-5.7,10.4c-1.7,4-3.7,7.3-5.1,11.5c-0.6,2-0.9,7.4-0.9,7.5
						c-0.8,2.8-6.1,10.3-8.3,8.6c-2.7-1,1.7-16.6,2.7-21.5c0.9-4.3,0.9-7.8-2.2-10.8c-0.8-0.7-8.9-3.3-6.7-9.1
						c2.6-6.9,3.3-11.6,8.1-16.9c0.8-0.9-2.5-3.7-4.5-2.1c-7.5,5.9-12.4,13-11.1,21.3c0.3,1.8,1,3.9,2.4,5.3
						c-1.1,0.6-1.8,0.7-3.2,0.8c-1.2,0.1-2.3-0.1-3.5-0.4c-0.1,0-0.3-0.1-0.4-0.2c-0.7-1.3-1.6-2.4-2.6-3.3
						c-0.7-0.6,0.3,7.2,0.7,8.4c3.2,9.3-1.9,18.2-5.8,24.5c-4.8,7.6-4.3-4.8-3.8-8.3c0.8-5.2,3-9.9,4.2-14.9
						c0.1-0.5-1.1-4.4-1.1-4.4c-0.2-0.4-0.6,0.3-0.8,0.8c-3.3,3.3-5.5,7.5-7.5,10.9c-3.6,6.2-11.9,21.2-16.7,21.9
						c-0.8,0.2-1.3-1.8-1.2-3.3c0.8-7.4,4-9.6,8.3-15.7c0.9-1.3-1.1-8.1-1.8-7.5c-5,4.9-9.9,11.2-13.9,16.9
						c-1.7,2.5-4.2,2.4-3.4-1.2c0.5-2.2,2.3-4.7,3.3-6.7c1.1-1,1.7-1.5,2.9-2.5c3.8-3.3,7.8-6.3,13.8-9.1c0.2,1.1,1.7,2,1.8,1.9
						c3.2-4.1,5-11.7-1.5-11.8c-13.8-0.3-22.4,22.1-22.9,23.2c-1.9,1.8-7.8,8.7-12.5,11.2l-3.5,2.4c-6.6,2.9-11.3,3.6-14.7,4
						c-0.2,0-0.1,0.7,0,1.2c0,0.3,0.1,0.5,0.2,0.6c0,0.1,0.1,0.1,0.1,0.1c2.3,0.3,4.6,0.2,6.9-0.1c0,0,1.6-0.1,4.8-1.1
						C170.3,136.9,171.5,135.9,171.5,135.9z M298,95.1c2.5-11.9,14.4-40.9,20.8-47.8c1.5-1.7,4.2-7.3,6.6-6.7
						c1.7,0.2-1.7,15.5-3.7,21.2c-3.2,9.3-7.4,18.2-13,26.3c-4.1,5.9-7.2,12-12.5,17.1C296.4,100.5,297.4,98.2,298,95.1z
						 M198.7,106.7c2.3-3,4-4.7,7.5-6.1c2.9-1.1,4-0.5,3.6,1.5c-5.3,1.8-9.2,4.8-14.1,8.7C196.9,109.2,197.5,108.3,198.7,106.7z
						 M317.2,104.3c-0.9,0.6-1.4-0.6-2.3-0.4c0.8-2.7,2.1-4.2,3.3-5.5c2.7-2.8,5.9-3.8,9.6-3.8c1.9,0,3.7,1.8,3.4,1.9
						C323.8,98.4,318.9,100.8,317.2,104.3z M330.9,109.1c-1.1,5.1-4.4,11-7.1,14.5c-3.4,4.3-4.6,0.5-4.7-2.2
						c-0.2-5.1,0.4-9.2,2.4-14c2.3-2.3,3.4-2.6,6.5-4.6c1.1-0.7,2.8-1.4,4.2-2C332.2,105.1,331,108.6,330.9,109.1z M372.1,124.2
						c-5.5,3.2-9-0.9-2.7-4.8c1-0.7,5.7-2.5,6.9-2.6C375.8,117.5,375.9,122,372.1,124.2z M406.9,93c0.5,0.8,0.2,2.3-4.8,7.5
						C403.4,95.4,405.7,92.3,406.9,93z"/>
					<path class="st0" d="M446.9,62.1c-1.3-4.6-8.6-1.5-10.4-0.5c-5.7,3.1-9.9,9.7-10.5,14.9c0,0.2,1.6,2.6,1.7,2.4
						c0.8-1.5,2.4-3.4,3.3-4.3c2.4-2.5,9.9-6.2,15.1-6.7C447.2,67.7,447.4,63.9,446.9,62.1z"/>
				</g>
			</g>
			<g>
				<path class="st0" d="M224.9,153.9h3.9l2.5,16.6h-2l-0.6-4.3h-3.5l-0.6,4.3h-2L224.9,153.9z M227,155.9h-0.4l-1.2,8.2h2.9
					L227,155.9z"/>
				<path class="st0" d="M234.4,170.5h-2v-16.6h4.9l2.5,2.6v5.7l-1.8,1.9l2.9,6.4h-2.2l-2.6-5.6h-1.8V170.5z M234.4,162.9h2l1.4-1.5
					v-4.1l-1.4-1.4h-2V162.9z"/>
				<path class="st0" d="M247.3,157.1l-1.3-1.3h-1.4l-1.2,1.3v10.1l1.3,1.4h1.4l1.3-1.4v-1.8l2,0v2.6l-2.4,2.7h-3.2l-2.4-2.7v-11.6
					l2.4-2.5h3.1l2.4,2.5v2.5h-2V157.1z"/>
				<path class="st0" d="M250.9,170.5v-16.5h2v7.3h3.7v-7.3h2v16.5h-2v-7.3h-3.7v7.3H250.9z"/>
				<path class="st0" d="M260.4,170.5v-16.6c1.7,0,0.3,0,2,0v16.6H260.4z"/>
				<path class="st0" d="M266.3,155.7h-2.9v-1.8h7.9v1.8h-2.9v14.8h-2V155.7z"/>
				<path class="st0" d="M278.4,161.3v2h-4v5.2h5.1v2h-7.1v-16.6c2.7,0,4.1,0,6.8,0v2h-4.8v5.4H278.4z"/>
				<path class="st0" d="M286.5,157.1l-1.3-1.3h-1.4l-1.2,1.3v10.1l1.3,1.4h1.4l1.3-1.4v-1.8l2,0v2.6l-2.4,2.7H283l-2.4-2.7v-11.6
					l2.4-2.5h3.1l2.4,2.5v2.5h-2V157.1z"/>
				<path class="st0" d="M292.2,155.7h-2.9v-1.8h7.9v1.8h-2.9v14.8h-2V155.7z"/>
				<path class="st0" d="M300.3,153.9v13.3l1.3,1.4h1.3l1.3-1.4v-13.3h2v14l-2.4,2.7h-3.1l-2.4-2.7v-14H300.3z"/>
				<path class="st0" d="M309.9,170.5h-2v-16.6h4.9l2.5,2.6v5.7l-1.8,1.9l2.9,6.4h-2.2l-2.6-5.6h-1.8V170.5z M309.9,162.9h2l1.4-1.5
					v-4.1l-1.4-1.4h-2V162.9z"/>
				<path class="st0" d="M323.5,161.3v2h-4v5.2h5.1v2h-7.1v-16.6c2.7,0,4.1,0,6.8,0v2h-4.8v5.4H323.5z"/>
				<path class="st0" d="M333.5,158.2v-1l-1.1-1.3H331l-1.1,1.3v2.4l1.2,1.4h5.4v2h-1v7.4h-5.6l-2.5-2.5v-4.4l1.8-1.6l-1.4-1.5v-4.1
					l2.3-2.5h3.1l2.3,2.5v1.8H333.5z M333.4,163.1h-2.5l-1.4,1.4v2.7l1.3,1.3h2.7V163.1z"/>
				<path class="st0" d="M340.1,153.9h5.3l2.5,2.5V168l-2.5,2.5c-1.8,0-3.5,0-5.3,0V153.9z M344.5,168.5l1.3-1.3v-9.9l-1.3-1.3h-2.4
					v12.5H344.5z"/>
				<path class="st0" d="M355.5,161.3v2h-4v5.2h5.1v2h-7.1v-16.6c2.7,0,4.1,0,6.8,0v2h-4.8v5.4H355.5z"/>
				<path class="st0" d="M359.6,167.2l1.3,1.4h1.5l1.3-1.4v-2.6l-6-4.2v-4.2l2.4-2.5h3.1l2.4,2.5v2.5h-2v-1.7l-1.2-1.3h-1.4
					l-1.2,1.3v2.3l5.9,4.2v4.5l-2.4,2.6H360l-2.4-2.6v-3h2V167.2z"/>
				<path class="st0" d="M367.2,170.5v-16.6c1.7,0,0.3,0,2,0v16.6H367.2z"/>
				<path class="st0" d="M377.1,157.2l-1.3-1.4h-1.6l-1.3,1.4v9.9l1.3,1.5h1.6l1.3-1.5v-3.6h-2.2v-2h4.3v6.4l-2.4,2.6h-3.4l-2.4-2.6
					v-11.5l2.5-2.5h3.4l2.5,2.5v3h-2V157.2z"/>
				<path class="st0" d="M380.8,153.9h2.7l1.9,5.9l1.7,6.2h0.1l-0.4-6.3v-5.8h2v16.5h-2.1l-2.6-8.1l-1.4-4.9h-0.1l0.2,5.1v8h-2
					V153.9z"/>
			</g>
		</g>
	</g>
	<path class="st0" d="M134.8,126.4c0,0-3.3,4.7-7.3,6.3c-4,1.6-6.1-6.7-5.8-14c0.4-7.5,4.9-16.5,13.3-19.7c8.4-3.1,14.4-1,14.4-1
		s4.5-12.9,6.6-31.4c2.2-18.5-1.6-34.3-5.4-33.9c-3.9,0.4-15.7,11.5-19.7,28.8c-4,17.3,1.2,18.3,4.5,17.4c3.3-0.8,3.3-0.8,3.3-0.8
		s3.4,3.1,3.5,4.2c0.1,1.1-5.1,7.1-14.9,4.8c-9.2-2.1-11.1-15.6-3.6-31.8c7.5-16.2,20.1-27.4,27.8-26.9c6,0.4,10.8,5.6,12.1,23.6
		c1.3,18-7,50.5-7,50.5s0.8,1,1.7,2.5c1,1.9,1.7,3,1.7,3s5-0.6,6.7-1.4c1.7-0.8,2.1-4.5,5.6-17.3c3.5-12.8,9.1-32.3,11.9-36.7
		c2.8-4.4,4.8-4.4,6.7-2.4c1.8,1.9,3.5,4.6,3.5,4.6s-6.8,8.1-10,16.9c-3.3,8.8-5.8,18.3-6.9,22.5c-1.1,4.2-2.1,8.8-2.1,8.8
		s5.7-4.1,8-4.2c2.3-0.1,5,1,5,2c0,1-3.1,2.6-5,3.9c-2,1.4-5.9,4-7.9,5.3c-1.9,1.3-1.9,1.3-1.9,1.3s-3.6,16-4.8,24
		c-1.2,8-1.6,15.1-1.9,17.9c-0.4,2.8-0.4,2.8-0.4,2.8s-6.1,1.8-6.4-3.9c-0.4-5.7,0.4-23.1-0.5-28.8c-0.8-5.7-1.3-7.4-1.3-7.4
		l-5.5,1.2c0,0-4.9,19.8-11.4,33.7c-6.5,13.9-13.6,20.6-13.6,20.6s-5.2-8.6-5.2-12.1s4.7-7.9,7.3-11.5c2.5-3.6,7.3-10.9,10.3-17.8
		c3-6.9,3.4-11.4,3.4-11.4s-2.3,0.9-5.8,2.5c-2.5,1.2-3.2,2-3.4,2.5l-0.1,0.7C134.2,125,134.5,125.7,134.8,126.4L134.8,126.4z
		 M163.2,119.2c0.5,2.7,0.9,6.4,0.9,6.4s0.5-3.3,1.2-6.3c0.6-3,1.1-5.4,1.1-5.4l-4.1,1.1C162.3,115.1,162.7,116.5,163.2,119.2z
		 M155.4,109.8c0,0,0.1,0,0.1-0.1c0.1,0,0.1-0.1,0.1-0.2c0-0.1,0-0.1,0-0.2c-0.3-0.5-0.7-1-1.1-1.5c0,0-0.1-0.1-0.1-0.1
		c-0.1,0-0.3,0-0.3,0.1c0,0,0,0.1,0,0.1l-0.4,1.6c0,0.1,0,0.2,0,0.2c0,0.1,0.1,0.1,0.2,0.1C153.8,109.9,154.7,109.9,155.4,109.8z
		 M147.6,103.9c-1.2-0.3-2.4-0.4-3.6-0.2c-5.6,0.6-9.9,5.6-10.8,12l0.1-0.1c0.9-0.6,3.4-2.1,6.9-3.4c3.1-1.2,5.6-1.6,5.6-1.6
		L147.6,103.9L147.6,103.9z"/>
</g>
</svg>
<!--<img src="<?php /*echo get_template_directory_uri(); */?>/images/logo-big.png" alt="logotyp">-->
						</a>
					</div>
				</div>
				<div class='about-us-text who-we-are-text'>
					<h1 class='title-text title-text1 who-we-are-title'>трохи про <span>нас</span></h1>
					<p class='description-text'><span class="bold">Гавриловська Оксана</span> - магістр архітектури, в  1999 році закінчила архітектурний факультет Киівського Національного Університету Будівництва і Архітектури.</p>
					<p class='description-text description-text1'><span class="bold">Гавриловський Микола</span> - з відзнакою закінчив Киівський Національний Університет Будівництва і Архітектури в 1998 році за спеціальністю "Архітектура будівель і споруд".</p>
					<h1 class='title-text title-text1 our-contacts-title'>наші контакти</h1>
					<p class="description-text contacts-text">+380 (067) 233 55 31 <span class="bold">(Оксана)</span></p>
					<p class="description-text contacts-text">+380 (098) 118 05 90 <span class="bold">(Микола)</span></p>
				</div>
			</div>
		</div>
	</div>
	<!--ABOUT US END-->

  <!--ACH BLOCK-->
	<div class="our-achievements-block">
		<div class="container-fluid">
			<div class="our-achievements-row">
			<div class='parent'>
				<div class="ach-text">
					<h1 class="title-text title-text2">наші <span>досягнення</span></h1>
					<p class="description-text description-text2">За майже двадцятирічний творчий період створені і здійснені десятки проектів приватних житлових будинків та інтер'єрів будинків, квартир і приміщень громадського призначення (ресторанів, кафе та офісів), а також малих архітектурних форм. У нашому списку реконструкція житлових будинків та проекти реконструкції історичних будівель. Великий досвід в проектуванні серійної і індивідуальних меблів і елементів декору для офісів та житла.</p>
				</div></div>
				<div class="ach-item">
					<span class="number">150</span>
					<p class="text">задоволених клієнтів</p>
				</div>
				<div class="ach-item">
					<span class="number">450</span>
					<p class="text">завершених проектів</p>
				</div>
				<div class="ach-item">
					<span class="number">12</span>
					<p class="text">років успішної роботи</p>
				</div>
				<div class="ach-item">
					<span class="number">25</span>
					<p class="text">постійних клієнтів</p>
				</div>
			</div>
		</div>

	</div>
<!--ACH BLOCK END-->

<!--OUR PROJECTS-->

	<div class="our-projects-block">

		<div class="container-fluid">
			<h1 class='title-text title-text1'>наші <span>проекти</span></h1>
		</div>
		<div class="container-fluid">
			<div class="select-projects-tabs-row">
				<!--<div class="select-projects-tabs tab1 active-tab" data-tab="1"><span>все проекты</span></div>
				<div class="line"></div>-->	
				<div class="select-projects-tabs tab2 active-tab" data-tab="2"><span>дизайн</span></div>
				<div class="line"></div>
				<div class="select-projects-tabs tab3" data-tab="3"><span>архітектура</span></div>
			</div>
		</div>

		
		<div class="projects-box active-projects-box group" data-tab="2">



					<?php $design = array ('post_type' => 'page',
					/*'post_parent' => 9999,*/
									  /*'meta_key' => 'address',*/
									  'post_parent' => '16',
									  /*'orderby' => 'meta_value_num',
									  'order' => 'ASC',*/
									  'orderby' => 'rand',
									  'posts_per_page' => '6'
									  /*'category_name' => 'house'*/);
				 $page_design_all = new WP_Query( /*'post_parent=148&post_type=page'*/$design ); ?>

				<?php if (  $page_design_all -> have_posts() ) : while (  $page_design_all -> have_posts() ) :  $page_design_all -> the_post(); ?>

						<div class="project-img-box">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail ('custom-size-for-portfolio', array( 'center', 'center')); ?>
									<div class="hover">
									<div class="project-data">
										<span class="project-name"><?php the_title (); ?></span>
										<p class="post-meta"><?php echo get_post_meta( $post->ID, 'address', true ); ?></p>
									</div>
								</div>
								</a>
								
							</article>
						</div>
			<?php endwhile; ?> 
			<?php  else: ?>
			<?php endif; ?>
		
		</div>
		

		<div class="projects-box group" data-tab="3">

			<?php $architecture = array ('post_type' => 'page',
					/*'post_parent' => 9999,*/
									  /*'meta_key' => 'address',*/
									  'post_parent' => '14',
									  /*'orderby' => 'meta_value_num',
									  'order' => 'ASC',*/
									   'orderby' => 'rand',
									  'posts_per_page' => '6'
									  /*'category_name' => 'house'*/);
				 $page_architecture_all = new WP_Query( /*'post_parent=148&post_type=page'*/$architecture ); ?>

				<?php if ( $page_architecture_all -> have_posts() ) : while ( $page_architecture_all -> have_posts() ) : $page_architecture_all -> the_post(); ?>

						<div class="project-img-box">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail ('custom-size-for-portfolio'); ?>
								<div class="hover">
									<div class="project-data">
										<span class="project-name"><?php the_title (); ?></span>
										<p class="post-meta"><?php echo get_post_meta( $post->ID, 'address', true ); ?></p>
									</div>
								</div>
								</a>
							</article>
						</div>
			<?php endwhile; ?> 
			<?php  else: ?>
			<?php endif; ?>
	</div>
	<!--OUR PROJECTS END-->

	<!--OUR PARTNERS BLOCK-->
	<div class="our-partners">
		<div class="container-fluid">		
			<h1 class='title-text title-text1'>наші <span>партнери</span></h1>
		</div>
			<div class="container-fluid">
				<div class="slides-counter slides-counter-left"><span id="left-numerator1">0</span><span id="left-denominator1">3</span></div>
				<div class="slides-counter slides-counter-right"><span id="right-numerator1">0</span><span id="right-denominator1">2</span></div>
				<div class="our-partners-slider">
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo1.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo2.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo3.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo4.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo5.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo6.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo1.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo2.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo3.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo4.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo5.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo6.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo1.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo2.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo3.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo4.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo5.png" alt="partner-logo"></div>
					<div class="partner-logo-box"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-logo6.png" alt="partner-logo"></div>
				</div>
			
		</div>
	</div>
<!--OUR PARTNERS BLOCK END-->


<!--OUR BLOG-->

	<div class="our-blog">
		<div class="container-fluid">
			<h1 class='title-text title-text2'>наш <span>блог</span></h1>
			<div class="our-blog-row group">
			<?php $args = array ('post_type' => 'post',
				'post_status' => 'publish',
								  /*'meta_key' => 'order',*/
								  /*'orderby' => 'meta_value_num',*/
								  'orderby' => 'date',
								  'order' => 'DESC',
								  'posts_per_page' => '3');
			 $page_index = new WP_Query ($args); ?>


<?php if ( $page_index -> have_posts() ) : while ( $page_index -> have_posts() ) : $page_index -> the_post(); ?>

				<div class="our-blog-item">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail (); ?></a>
						<span><?php the_time ('j F Y'); ?></span>
						<p class="our-blog-title"><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></p>
						<?php the_excerpt();?>
						
					</article>
<a href="<?php the_permalink (); ?>" class="our-blog-link">докладніше</a>
				</div>






<?php endwhile; ?> 
<?php  else: ?>
<?php endif; ?>

			


				
			
			</div>	
		</div>
	</div>

<!--OUR BLOG END-->


<!--OUR CONTACTS-->
	<div class="our-contacts-block">
		<div class="container-fluid">
			<h1 class='title-text title-text1'>зв’яжіться <span>з нами</span></h1>
			<div class="our-contacts-row">
				<div class="our-contact-item our-address-item">
					<p class="contact-title">Адреса</p>
					<p class="content content-text our-address">місто Київ,  вулиця Чайковського , 21-А</p>
				</div>
				<div class="our-contact-item our-tel-item">
					<p class="contact-title">Телефон</p>
					<p class="content content-text our-tel">+38 (096) 704-11-82</p>
					<p class="content">+38 (096) 704-11-83</p>
				</div>
				<div class="our-contact-item our-email-item">
					<p class="contact-title">Email</p>
					<p class="content content-text our-email"><a href="#" mailto='havrylovskyi@gmail.com'>havrylovskyi@gmail.com</a></p>
				</div>
				<div class="our-contact-item we-are-in-sl">
					<p class="contact-title">Соцмережі</p>
					<p class="content sosial">
						<a href="https://www.facebook.com/Gavrylovski" class="social-link fb"></a>
						<a href="https://www.instagram.com/Havrylovski" class="social-link in"></a>
						<a href="https://www.behance.net/Gavrylovski" class="social-link be"></a>
					</p>
				</div>
			</div>
		</div>
	</div>
<!--OUR CONTACTS END-->
</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
