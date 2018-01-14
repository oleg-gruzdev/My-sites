<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package havrylovski
 */

?>
<div class="container-fluid post-container group">

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php the_time ('j F Y'); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
<div class="post-content-left">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gavrilovskie' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gavrilovskie' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
<div class="social-link-block">
								<p class="sosial-links-title">Поділитися:</p>
								<p class="sosial-links">
									<a href="https://www.facebook.com/Gavrylovski" class="social-link fb"></a>
						<a href="https://www.instagram.com/Havrylovski" class="social-link in"></a>
						<a href="https://www.behance.net/Gavrylovski" class="social-link be"></a>
								</p>
							</div>
							</div> <!--post-content-left-->

						<?php get_sidebar('single_post'); ?>
			
						<div class="clearfix"></div>

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

						</div><!-- post-container -->


						