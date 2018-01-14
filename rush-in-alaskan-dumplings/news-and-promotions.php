<?php
/**
 * The template for displaying all pages
 *Template Name: News and Promotions
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

					<div class="news-and-promotions-page-title">
						
						<h1 class="title">news <span>and promotions</span></h1>
					</div>

					<div class="news-and-promotions-content">
						<div class="container">
							<div class="news-and-promotions-block">
								<?php 
								$news_and_promotions = new WP_Query ( array ('post_type' => 'post',
																	  'category_name' => 'news-and-promotions',
																	  'meta_key' => 'number',
									  								  'orderby' => 'meta_value_num',
									 								  'order' => 'ASC',
									   
									 ));
								if ( $news_and_promotions -> have_posts()) {
									while (  $news_and_promotions -> have_posts() ) {
										 $news_and_promotions -> the_post();
										 ?>
										 <article class="news-box" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

										 	<?php the_post_thumbnail (); ?>
										 	<div class="news-content">
												<h3 class="news-titile"><?php the_title()?></h3>
												<?php the_content();?>
											</div>
										</article>
									<?	};
									} else {
										echo 'No news and promotions';
										}?>





									 
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
get_footer('newsandpromo');
