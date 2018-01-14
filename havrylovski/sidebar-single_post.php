<?php
/**
 * The sidebar for portfolio widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package havrylovski
 */
?>


<aside class="widget-area">
	<section class="last-posts-widget">
		<p class="widget-title">останні статті</p>
	 <? $last_posts = get_posts ( array ('post_type' => 'post',
	 										'post_status' => 'publish',
	 										'orderby' => 'date',
						  					/*'posts_per_page' => '3',*/
											'exclude'=> $post->ID,
										  )
									  ); ?>

			  <? $posts_length = count( $last_posts ); ?>
			<?	if ($posts_length > 0) {
		echo '<ul>';
	for($x = 0; $x < $posts_length; $x++) {
    	echo '<li><a href="' . $last_posts[$x]->guid . '"</a>' . $last_posts[$x]->post_title . '</li>';
    	}
	echo '</ul>';
} ?> 
						
	</section>

	<section class="categories-widget">
		<p class="widget-title">категорії</p>
	 <? $categories = get_categories ( array ('type'     => 'post',
											/*'child_of'   => 0,*/
											'orderby'    => 'count',
											'order'      => 'ASC',
											'hide_empty' => 1,
											)
									  ); ?>

			 
			<?	if ( $categories ) {
		echo '<ul>';
	foreach( $categories as $cat ){
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

	
    	echo '<li><a href="' . get_category_link( $cat->term_id ) . '"</a>' . $cat->name . '</li>';
    	}
	echo '</ul>';
} ?> 
						
	</section>

</aside>