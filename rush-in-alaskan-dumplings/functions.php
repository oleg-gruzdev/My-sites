<?php
/**
 * Rush in Alaskan Dumplings functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rush_in_Alaskan_Dumplings
 */

if ( ! function_exists( 'rush_in_alaskan_dumplings_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rush_in_alaskan_dumplings_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Rush in Alaskan Dumplings, use a find and replace
		 * to change 'rush-in-alaskan-dumplings' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'rush-in-alaskan-dumplings', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'rush-in-alaskan-dumplings' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'rush_in_alaskan_dumplings_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'rush_in_alaskan_dumplings_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rush_in_alaskan_dumplings_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rush_in_alaskan_dumplings_content_width', 640 );
}
add_action( 'after_setup_theme', 'rush_in_alaskan_dumplings_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rush_in_alaskan_dumplings_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rush-in-alaskan-dumplings' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'rush-in-alaskan-dumplings' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rush_in_alaskan_dumplings_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rush_in_alaskan_dumplings_scripts() {
	wp_enqueue_style( 'rush-in-alaskan-dumplings-style', get_stylesheet_uri() );

	wp_enqueue_script( 'rush-in-alaskan-dumplings-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'rush-in-alaskan-dumplings-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rush_in_alaskan_dumplings_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function load_styles() {

	/*wp_register_style('normalize-css', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('normalize-css');*/

	wp_register_style('reset-css', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style('reset-css');
	/*wp_register_style('bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-min-css');*/
	/*wp_register_style('style-css', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('style-css');*/

	wp_register_style('slick-css', get_template_directory_uri() . '/css/slick.css');
	wp_enqueue_style('slick-css');

	wp_register_style('slick-theme-css', get_template_directory_uri() . '/css/slick-theme.css');
	wp_enqueue_style('slick-theme-css');


	wp_register_style('main-css-style', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('main-css-style');

	wp_register_style('main-min-style', get_template_directory_uri() . '/css/main.min.css');
	wp_enqueue_style('main-min-style');

	wp_register_style('font-awersome', get_template_directory_uri() . '/fonts/font-awesome.min.css');
	wp_enqueue_style('font-awersome');

	wp_register_style('our-menu-css-style', get_template_directory_uri() . '/css/our-menu.css');
	wp_enqueue_style('our-menu-css-style');

	wp_register_style('our-menu-min-style', get_template_directory_uri() . '/css/our-menu.min.css');
	wp_enqueue_style('our-menu-min-style');


	wp_register_style('news-and-promotions-style', get_template_directory_uri() . '/css/news-and-promotions.css');
	wp_enqueue_style('news-and-promotions-style');

	wp_register_style('news-and-promotions-min-style', get_template_directory_uri() . '/css/news-and-promotions.min.css');
	wp_enqueue_style('news-and-promotions-min-style');


	wp_register_style('contact-us-css-style', get_template_directory_uri() . '/css/contact-us.css');
	wp_enqueue_style('contact-us-css-style');

	wp_register_style('contact-us-min-style', get_template_directory_uri() . '/css/contact-us.min.css');
	wp_enqueue_style('contact-us-min-style');


	//fonts
	wp_register_style('font-style-Source-Sans-Pro', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900');
	wp_enqueue_style( 'font-style-Source-Sans-Pro');

	wp_register_style('font-style-Suranna', 'https://fonts.googleapis.com/css?family=Suranna:400,300,600');
	wp_enqueue_style( 'font-style-Suranna');
	}


add_action('wp_enqueue_scripts', 'load_styles');


function load_scripts() {

	wp_deregister_script( 'jquery' );/*отключаем jquerry, которая идет в комплекте с WP*/
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	/*wp_register_script('googleMap', "https://maps.googleapis.com/maps/api/js?key=AIzaSyAj7LuzNOzM_S9k3fkNs30ELaphzKOKkHI&callback=initMap");
	wp_enqueue_script('googleMap');

	wp_register_script('google-map-js', get_template_directory_uri() . '/js/google-map.js', array(), null, true);
	wp_enqueue_script('google-map-js');

	/*wp_register_script('masonry', get_template_directory_uri() . '/libs/masonry.pkgd.min.js', array(), null, true);
	wp_enqueue_script('masonry');

	wp_register_script('masonry-grid', get_template_directory_uri() . '/libs/masonry.js', array('jquery'), null, true);
	wp_enqueue_script('masonry-grid');

	wp_register_script('masonry-img-load', get_template_directory_uri() . '/libs/imagesLoaded.pkgd.min.js', array(), null, true);
	wp_enqueue_script('masonry-img-load');*/

	wp_register_script('slick-min-js', get_template_directory_uri() . '/libs/slick.min.js', array('jquery'), null, false);
	wp_enqueue_script('slick-min-js');

	wp_register_script('slider-js', get_template_directory_uri() . '/js/slider.js', array('jquery'), null, false);/*РАБОТАЕТ!!!!*/
	wp_enqueue_script('slider-js');

	wp_register_script('mobile-nav-js', get_template_directory_uri() . '/js/mobile-nav.js', array(), null, true);
	wp_enqueue_script('mobile-nav-js');

	wp_register_script('header-fix', get_template_directory_uri() . '/js/header-fix.js', array('jquery'), null, false);
	wp_enqueue_script('header-fix');

	/*wp_register_script('contact-form-js', get_template_directory_uri() . '/js/contact-form.js', array('jquery'), null, false);
	wp_enqueue_script('contact-form-js');*/

}
add_action('wp_enqueue_scripts', 'load_scripts');

/*Регитстрируем все меню*/

add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header_desktop_menu' => 'Меню в шапке',
		'header_mobile_menu' => 'Мобильное меню в шапке'
	) );
});

/*Добавляем миниатюру записи */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails', array('post', 'page') );
		set_post_thumbnail_size (348, 330, array( 'center', 'center' )); // меняем размер миниатюры поста, установленный по умолчанию
}