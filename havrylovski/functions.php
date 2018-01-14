<?php
/**
 * havrylovski functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package havrylovski
 */

if ( ! function_exists( 'havrylovski_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function havrylovski_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on havrylovski, use a find and replace
		 * to change 'havrylovski' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'havrylovski', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'havrylovski' ),
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
		add_theme_support( 'custom-background', apply_filters( 'havrylovski_custom_background_args', array(
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
add_action( 'after_setup_theme', 'havrylovski_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function havrylovski_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'havrylovski_content_width', 640 );
}
add_action( 'after_setup_theme', 'havrylovski_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function havrylovski_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'havrylovski' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'havrylovski' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'havrylovski_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function havrylovski_scripts() {
	wp_enqueue_style( 'havrylovski-style', get_stylesheet_uri() );

	wp_enqueue_script( 'havrylovski-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'havrylovski-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'havrylovski_scripts' );

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

	wp_register_style('normalize-css', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('normalize-css');

	/*wp_register_style('bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-min-css');*/

	wp_register_style('slick-css', get_template_directory_uri() . '/css/slick.css');
	wp_enqueue_style('slick-css');

	wp_register_style('slick-theme-css', get_template_directory_uri() . '/css/slick-theme.css');
	wp_enqueue_style('slick-theme-css');


	wp_register_style('main-css-style', get_template_directory_uri() . '/style.min.css');
	wp_enqueue_style('main-css-style');

	wp_register_style('about-us-page-css-style', get_template_directory_uri() . '/css/about-us-page.min.css');
	wp_enqueue_style('about-us-page-css-style');

	wp_register_style('portfolio-css-style', get_template_directory_uri() . '/css/portfolio.min.css');
	wp_enqueue_style('portfolio-css-style');

	wp_register_style('portfolio-page-css-style', get_template_directory_uri() . '/css/portfolio-page.min.css');
	wp_enqueue_style('portfolio-page-css-style');

	wp_register_style('our-blog-page-css-style', get_template_directory_uri() . '/css/our-blog-page.min.css');
	wp_enqueue_style('our-blog-page-css-style');

	wp_register_style('single-post-page-css-style', get_template_directory_uri() . '/css/single-post-page.min.css');
	wp_enqueue_style('single-post-page-css-style');

	wp_register_style('contacts-css-style', get_template_directory_uri() . '/css/contacts.min.css');
	wp_enqueue_style('contacts-css-style');

	wp_register_style('archive-page-css-style', get_template_directory_uri() . '/css/archive-page.min.css');
	wp_enqueue_style('archive-page-css-style');

	wp_register_style('font-style-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,300,600,700');
	wp_enqueue_style( 'font-style-opensans');

	wp_register_style('font-style-roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,600,700');
	wp_enqueue_style( 'font-style-roboto');

}


add_action('wp_enqueue_scripts', 'load_styles');


function load_scripts() {

	wp_deregister_script( 'jquery' );/*отключаем jquerry, которая идет в комплекте с WP*/
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_register_script('mobile-nav-js', get_template_directory_uri() . '/js/mobile-nav.js', array(), null, true);
	wp_enqueue_script('mobile-nav-js');



	/*wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_enqueue_script('html5-shim');*/

	/*wp_register_script('jquery-lib', get_template_directory_uri() . 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js');
	wp_enqueue_script('jquery-lib');*/


	/*wp_register_script('jquery-lib', get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script('jquery-lib');*/

	wp_register_script('slick-min-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), null, false);
	wp_enqueue_script('slick-min-js');

	wp_register_script('slider-js', get_template_directory_uri() . '/js/slider.js', array('jquery'), null, false);/*РАБОТАЕТ!!!!*/
	wp_enqueue_script('slider-js');

	wp_register_script('our-partners-slider-js', get_template_directory_uri() . '/js/our-partners-slider.js', array('jquery'), null, false);/*РАБОТАЕТ!!!!*/
	wp_enqueue_script('our-partners-slider-js');

	wp_register_script('our-projects-tabs-js', get_template_directory_uri() . '/js/our-projects-tabs.js', array('jquery'), null, false);/*РАБОТАЕТ!!!!*/
	wp_enqueue_script('our-projects-tabs-js');

wp_register_script('contact-form-js', get_template_directory_uri() . '/js/contact-form.js', array('jquery'), null, false);/*рӀƒ!!!!*/
	wp_enqueue_script('contact-form-js');

}
add_action('wp_enqueue_scripts', 'load_scripts');

/*Регитстрируем все меню*/

add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'menu' => 'header-desktop',
		'mobile_menu' => 'header-mobile'
	) );
});

/*Добавляем миниатюру записи */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails', array('post', 'page') );
		set_post_thumbnail_size (340, 200, array( 'center', 'center' )); // меняем размер миниатюры поста, установленный по умолчанию
}

// добавляем несколько пользовательских размеров 
add_image_size( 'custom-size-for-blog-page', 340, 370, true );
add_image_size( 'custom-size-for-post-page', 800, 420, true );
add_image_size( 'custom-size-for-portfolio-page', 360, 365, true);
add_image_size( 'custom-size-for-portfolio', 1280, 400, array( 'center', 'center') );
add_image_size( 'custom-size-for-portfolio-page-big-slider', 700, 500, false );
add_image_size( 'custom-size-for-portfolio-page-small-slider', 260, 220, true );
