<?php
/**
 * 
 *Template Name: contacts
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package havrylovski
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="our-contacts-content">
		<div class="container-fluid">
		

<!--OUR CONTACTS-->
<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>


	</div>
<!--OUR CONTACTS END-->
</main><!-- #main -->
	</div><!-- #primary -->
<?php
//get_sidebar();
get_footer();



