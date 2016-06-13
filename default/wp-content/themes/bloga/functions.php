<?php
/**
 * Bloga functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package Bloga
 */

if ( ! function_exists( 'bloga_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bloga_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Bloga, use a find and replace
	 * to change 'bloga' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bloga', get_template_directory() . '/languages' );

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

	add_image_size( 'bloga-image-full', 1140, 500, true );
	add_image_size( 'bloga-image-thumb', 770, 340, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'bloga' ),
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
		'audio',
		'quote',
		'link',
	) );

	add_theme_support( 'html5', array( 'search-form' ) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bloga_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_editor_style('');
}
endif; // bloga_setup
add_action( 'after_setup_theme', 'bloga_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bloga_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bloga_content_width', 640 );
}
add_action( 'after_setup_theme', 'bloga_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bloga_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bloga' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget', 'bloga' ),
		'id'            => 'footer-widget',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="col-md-3 col-sm-6 widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'bloga_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bloga_scripts() {
	wp_enqueue_style( 'bloga-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bloga-plugins', get_template_directory_uri() . '/assets/css/plugins.css' );
	wp_enqueue_style( 'bloga-main', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'bloga-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );

	wp_enqueue_script( 'bloga-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0
	.0', true );
	wp_enqueue_script( 'bloga-functions', get_template_directory_uri() . '/assets/js/functions.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bloga-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'bloga-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bloga_scripts' );

/**
 * Default Menu.
 */
function bloga_default_menu(){
	echo '<ul class="nav navbar-nav navbar-right sm sm-blue main-menu">';
	if (is_user_logged_in()) {
		echo '<li><a href="'.home_url().'/wp-admin/nav-menus.php">'.esc_html__( 'Create a Menu', 'bloga' ).'</a></li>';
	} else {
		echo '<li><a href="'.home_url().'">'.esc_html__( 'Home', 'bloga' ).'</a></li>';
	}
	echo '</ul>';
}

/**
 * repleace Ultimate Member google fonts
 * http://www.wpdaxue.com/ultimate-member.html
 */
function cmp_replace_google_webfont() {
	if ( class_exists( 'reduxCoreEnqueue' ) ) {
		wp_enqueue_script('jquery');
		wp_deregister_script('webfontloader');
		wp_register_script('webfontloader', 'http://ajax.useso.com/ajax/libs/webfont/1.5.0/webfont.js',array('jquery'),'1.5.0',true);
		wp_enqueue_script('webfontloader');
	}
}
add_action('admin_enqueue_scripts', 'cmp_replace_google_webfont',9);

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';