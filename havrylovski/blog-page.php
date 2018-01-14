<?php
/**
 * The template for displaying all pages
 * Template Name: blog-page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package havrilovskie
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
				<div class="our-blog-block">
					<div class="container-fluid">
						<h1 class='title-text title-text1'>наш <span>блог</span></h1>
		
						<?php $categories = get_categories( array('type' => 'post',
															'orderby' => 'count',

																		)
																	);?>

			<!--выводим табы переключения -->
						<div class="select-blog-tabs-row">
						<?php	if ( !empty( $categories ) && !is_wp_error( $categories ) ) {
									$count = count($categories);
									$i=0;
									
									foreach( $categories as $cat ){
											$i++;
											if ( $i == 1) {
												$class = 'active-tab';
											} else $class = '';
									echo '<div class="select-blog-tabs tab1 ' . $class . '" data-tab="' . $i . '"><span>' . $cat->name . '</span></div>';
									echo '<div class="line"></div>';	
										// Данные в объекте $cat

										// $cat->term_id
										// $cat->name (Рубрика 1)
										// $cat->slug (rubrika-1)
										// $cat->term_group (0)
										// $cat->term_taxonomy_id (4)
										// $cat->taxonomy (category)
										// $cat->description (Текст описания)
										// $cat->parent (0)
										// $cat->count (14)
										// $cat->object_id (2743)
										// $cat->cat_ID (4)
										// $cat->category_count (14)
										// $cat->category_description (Текст описания)
										// $cat->cat_name (Рубрика 1)
										// $cat->category_nicename (rubrika-1)
										// $cat->category_parent (0)
									} 
									echo '</div>';
								}
								wp_reset_postdata(); ?>

			<!--выводим контейнеры с анонсами записей -->
						<?php foreach( $categories as $cat ){
									$y++;
									if ( $y == 1) {
										$active = 'active-our-blog-container';
									} else $active = ''; 
									echo '<div class="our-blog-container ' . $active . '" data-tab="' . $y . '">'; 
									?>
									<?php $argsAll = array ('post_type' => 'post',
										  /*'meta_key' => 'order',
										  'orderby' => 'meta_value_num',
										  'order' => 'ASC',*/
										  /*'posts_per_page' => '999',*/
										  'category_name' => $cat->slug,
										  );
									/*echo $argsAll;*/

						 $page_index_all = new WP_Query ($argsAll); ?>

						<?php if ( $page_index_all -> have_posts() ) : while ( $page_index_all -> have_posts() ) : $page_index_all -> the_post(); ?>
								<div class="our-blog-item">
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail ( 'custom-size-for-blog-page', 340, 340, false ); ?></a>
										<span><?php the_time ('j F Y'); ?></span>
										<p class="our-blog-title"><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></p>
										<?php the_excerpt();?>
										
									</article>
									<a href="<?php the_permalink (); ?>" class="our-blog-link">докладніше</a>
								</div>
						<?php endwhile; ?> 
						<?php  else: ?>
						<?php endif; ?>

									<?php	echo '</div>'; ?>
							
									<? } ?>
									
				</div>
<? echo '<button type="button"><a href="' . get_category_link( $cat->term_id ) . '">всі статті</a></button>'; ?>			
			</div><!-- .our-blog-block -->
		

							

						


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
