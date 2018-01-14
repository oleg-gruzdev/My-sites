<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package havrylovski
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : 

/*echo $wp_query;*/
			/*echo count($posts);*/
			 /*echo $posts;*/


			?>
<? $cat_title_full = get_the_archive_title();
$cat_name = substr($cat_title_full, 20); ?>


<div class="container-fluid">
			
<header class="page-header">
				<?php
					echo '<header class="page-header"><h1 class="page-title">' . $cat_name . '</h1></header>';
				?>
			</header><!-- .page-header -->

	<div class="category-posts-container">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				
				<div class="category-post-item">
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail ('custom-size-for-blog-page'); ?></a>
										<span><?php the_time ('j F Y'); ?></span>
										<p class="our-blog-title"><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></p>
										<?php the_excerpt();?>
										
									</article>
<a href="<?php the_permalink (); ?>" class="our-blog-link">докладніше</a>
								</div>
					<? endwhile; ?>
					
	</div>
	<? wp_pagenavi(); ?>
</div>
		<?	
	
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
