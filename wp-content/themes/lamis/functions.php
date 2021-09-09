<?php
/**
 * lamis functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lamis
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'lamis_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lamis_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lamis, use a find and replace
		 * to change 'lamis' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lamis', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'lamis' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'lamis_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 28,
				'width'       => 150,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'lamis_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lamis_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lamis_content_width', 640 );
}
add_action( 'after_setup_theme', 'lamis_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lamis_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lamis' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lamis' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lamis_widgets_init' );


add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
	if ( $args->theme_location === 'menu-1' ) {
		$atts['class'] = 'rs-menu-form__menu-item';
	}
	return $atts;
}

/**
 * Enqueue scripts and styles.
 */
function lamis_styles(){

    wp_register_style( 'lamis-normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), _S_VERSION);
    wp_register_style( 'lamis-all', get_template_directory_uri() . '/assets/css/all.min.css', array(), _S_VERSION );
    wp_register_style( 'lamis-slick-theme', get_template_directory_uri() . '/assets/lib/slick/slick-theme.css', array(), _S_VERSION );
    wp_register_style( 'lamis-slick', get_template_directory_uri() . '/assets/lib/slick/slick.css', array(), _S_VERSION );
    wp_register_style( 'lamis-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
    wp_register_style( 'lamis-rs-menu-form', get_template_directory_uri() . '/assets/css/rs-menu-form.css', array(), _S_VERSION);

    wp_enqueue_style( 'lamis-normalize');
    wp_enqueue_style( 'lamis-all');
    wp_enqueue_style( 'lamis-slick-theme');
    wp_enqueue_style( 'lamis-slick');
    wp_enqueue_style( 'bootstrap-cdn-css', 'https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'animate-cdn-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
    wp_enqueue_style( 'lamis-rs-menu-form');
    wp_enqueue_style( 'lamis-style');



}
add_action( 'wp_enqueue_scripts', 'lamis_styles' );


function lamis_scripts() {

    wp_register_script( 'lamis-slick', get_template_directory_uri() . '/assets/lib/slick/slick.min.js', array(), _S_VERSION, true  );
    wp_register_script( 'lamis-script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );

    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js' );
    wp_enqueue_script( 'bootstrap-cdn-js', 'https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js' );
    wp_enqueue_script( 'wow-cdn-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js' );
    wp_enqueue_script( 'lamis-slick');
    wp_enqueue_script( 'lamis-script');



    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lamis_scripts' );


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

