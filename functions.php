<?php
/**
 * walkaboutsv1.0 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package walkaboutsv1.0
 */

if ( ! function_exists( 'walkaboutsv1_0_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function walkaboutsv1_0_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on walkaboutsv1.0, use a find and replace
	 * to change 'walkaboutsv1-0' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'walkaboutsv1-0', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'walkaboutsv1-0' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'walkaboutsv1_0_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // walkaboutsv1_0_setup
add_action( 'after_setup_theme', 'walkaboutsv1_0_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function walkaboutsv1_0_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'walkaboutsv1_0_content_width', 640 );
}
add_action( 'after_setup_theme', 'walkaboutsv1_0_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function walkaboutsv1_0_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'walkaboutsv1-0' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'walkaboutsv1_0_widgets_init' );

/**
 * Enqueue scripts and styles.
 */



function walkaboutsv1_0_scripts() {
	wp_enqueue_style( 'walkaboutsv1-0-style', get_stylesheet_uri() );

	wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/site.js', array('jquery'), false);



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'walkaboutsv1_0_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**================================================
 * SCHMIDTYWORKS ADDED FUNCTIONS
 ==========================================================*/

 /**
 * Add image sizes
 */

 add_action( 'after_setup_theme', 'baw_theme_setup' );
		function baw_theme_setup() {
			add_image_size('xlarge-img', 1800);
			add_image_size('large-img', 1200);
			add_image_size('medium-img', 700);
			add_image_size('medium-thumb-img', 700, 500, array('center','top'));
			add_image_size('small-img', 500);
			add_image_size('xsmall-img', 300);
			add_image_size('large-thumb-img', 500, 350, array('center', 'top'));
			add_image_size('thumb-img', 300, 200, array('center', 'top'));
		}

/*

 /**
 * Change excerpt ending
 */

// Changing excerpt more
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



/**
 * AJAX
 */



add_action ( 'wp_ajax_nopriv_load-content', 'my_load_ajax_content' );
add_action ( 'wp_ajax_load-content', 'my_load_ajax_content' );






   
