<?php
/**
 * Template part for displaying front-page content
 *
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
			<div class="main-slider-box">

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
					<div class="logo-box-inside">


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
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-big.png" alt="logotyp">
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
						<a href="<?php the_permalink (); ?>" class="our-blog-link">докладніше</a>
					</article>
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
