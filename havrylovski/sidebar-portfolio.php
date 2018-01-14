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
	<h1 class="title object-title"><?php the_title(); ?></h1>
	<p class='object-address'><?php echo get_post_meta( $post->ID, 'address', true ); ?></p>
	<p class='object-description'><?php echo get_post_meta( $post->ID, 'description', true ); ?></p>
	
<?php 
$features = get_post_meta($post->ID, 'features', false);
$arrlength = count($features);
if ($arrlength > 0) {
	echo '<h1 class="title features-title">особливості</h1>';
	echo '<ul class="features">';
	for($x = 0; $x < $arrlength; $x++) {
    	echo '<li>' . $features[$x] . '</li>';
    	}
	echo '</ul>';
} 
?>
	
</aside>