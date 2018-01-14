<?php
/**
 * 
 *Template Name: portfolio
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package havrylovski
 */

get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
		
	
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container-fluid portfolio-container group">
			

<div class="portfolio-main-content">

		<div class="content-left">


<!--BIG SLIDER-->
<?php $args = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post_status' => 'inherit', 'post_parent' => $post->ID, 'exclude' => get_post_thumbnail_id() );
$attachments = get_posts($args); ?>
<div class="slider-for">

					
<?php if ($attachments) {
	foreach ( $attachments as $attachment ) {?>
		
		<?echo wp_get_attachment_image ( $attachment->ID, 'custom-size-for-portfolio-page-big-slider', false, array( 'class'=>'slider-for-item' ) );?>
		
<?	}
} ?>

</div>
<!--BIG SLIDER END-->



			</div> <!--content left-->

			<?php get_sidebar('portfolio'); ?>
</div>

			<!--<div class="clearfix"></div>-->


<!--SMALL SLIDER! ЦИКЛ НЕ НУЖЕН, ВСЕ КАРТИНКИ ВЫБРАНЫ ПЕРЕД БОЛ.СЛАЙДЕРОМ-->
<div class="slider-nav-block">
	<div class="slider-nav">
	<?php if ($attachments) {
		foreach ( $attachments as $attachment ) {
			
			echo wp_get_attachment_image ( $attachment->ID, 'custom-size-for-portfolio-page-small-slider', false, array( 'class'=>'slider-nav-item' ) );
		}
	} ?>							
		
	</div>
</div>
<!--SMALL SLIDER END-->

<!--OTHER PROJECTS BLOCK-->

	<div class="other-projects-block">
		
			<h1 class='title-text title-text1'>інші <span>роботи</span></h1>
			<div class="other-projects-row group">


<? $exclude_ids = array( $post->ID ); ?>

			<?php if ( get_the_title($post->post_parent) === 'Дизайн') { $other_projects = new WP_Query (array ( 'post_type' => 'page',
																										  'post_status' => 'publish',
																										  'post_parent' => '16',
																										  /*'exclude' => $exclude_ids,*/
																										  'post__not_in' => $exclude_ids,
																										  'orderby' => 'rand',
																										  'posts_per_page' => '3') );
													  } else { $other_projects = new WP_Query (array ( 'post_type' => 'page',
																									  'post_status' => 'publish',
																									  'post_parent' => '14',
																									  /*'exclude' => $exclude_ids,*/
																									  'post__not_in' => $exclude_ids,
																									  'orderby' => 'rand',
																									  'posts_per_page' => '3') );
												  	} ?>

<?php if ( $other_projects -> have_posts() ) { while ( $other_projects -> have_posts() ) {
	$other_projects -> the_post(); ?>
<?/* if ( $post->ID != $ID_current_page) {*/?>
				<div class="other-projects-item">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail ('custom-size-for-portfolio-page'); ?></a>
						<p class="other-projects-item-title"><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></p>
						<p class="post-meta"><?php echo get_post_meta( get_the_ID(), 'address', true ); ?></p>
					</article>
				</div>
			<?}  }
			?>

<? wp_reset_postdata(); ?>
		
			</div>	
	</div>

<!--OTHER PROJECTS BLOCK END-->

<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Редагувати <span class="screen-reader-text">%s</span>', 'gavrilovskie' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>


		
		</div>
	
	
	</main><!-- #main -->
</div><!-- #primary -->
<?php endwhile; ?> 
<?php  else: ?>
<?php endif; ?> <!--end of the loop-->



	<?php get_footer(); ?>




