<?php
/**
 * 
 *Template Name: portfolio-page
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package havrylovski
 */
get_header(); ?>

<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>



<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : the_post(); ?>

		<div class="our-portfolio-block">
			<div class="container-fluid">
				<h1 class="title-text title-text1"><span> <?php the_title (); ?></span></h1>


		<?php  else: ?>
		<?php endif; ?>			     
							
<?php   $argsAll = array ('post_type' => 'page',
					  	  'post_parent' => $post->ID,
						  'posts_per_page' => '9'
						  /*'category_name' => 'house'*/); ?>
		
		<div class="our-portfolio-container">
				<?php $page_index_all = new WP_Query( /*'post_parent=148&post_type=page'*/$argsAll ); 

				 if ( $page_index_all -> have_posts() ) : while ( $page_index_all -> have_posts() ) : $page_index_all -> the_post(); ?>

						<div class="our-portfolio-item">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail ('custom-size-for-portfolio-page'); ?>
									<div class="hover-our-portfolio-item">
										<div class="array-link"></div>
									</div>
								</a>
								<p class="our-portfolio-title"><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></p>
								<p class="post-meta"><?php echo get_post_meta( $post->ID, 'address', true ); ?></p>
							</article>
						
						</div>
			<?php endwhile; ?> 
			<?php  else: ?>
			<?php endif; ?>
		</div>
	</div>
</div><!--our-portfolio-block-->
			
		
		
		

	</main><!-- #main -->
</div><!-- #primary -->

	

<?php
//get_sidebar();
get_footer();
