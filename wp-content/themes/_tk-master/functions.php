<?php
/**
 * _tk functions and definitions
 *
 * @package _tk
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( '_tk_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function _tk_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	/**
	 * Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'slides', 1611, 642, true );
	/**
	 * Enable support for Post Formats
	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	*/
	add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _tk, use a find and replace
	 * to change '_tk' to the name of your theme in all the template files
	*/
	load_theme_textdomain( '_tk', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', '_tk' ),
	) );

}
endif; // _tk_setup
add_action( 'after_setup_theme', '_tk_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'slider',
			array(
					'labels' => array(
							'name' => __( 'Slides' ),
							'singular_name' => __( 'Slide' ),
							'add_new' => 'Add New',
							'add_new_item' => 'Add New Slide',
							'edit' => 'Edit',
							'edit_item' => 'Edit Slide',
							'new_item' => 'New Slide',
							'view' => 'View',
							'view_item' => 'View Slide',
							'search_items' => 'Search Slides'
					),
					'public' => true,
					'has_archive' => true,
					'supports' => array('title','thumbnail', 'editor'),
			)
	);
	register_post_type( 'services',
			array(
					'labels' => array(
							'name' => __( 'Services' ),
							'singular_name' => __( 'Service' ),
							'add_new' => 'Add New',
							'add_new_item' => 'Add New Service',
							'edit' => 'Edit',
							'edit_item' => 'Edit Service',
							'new_item' => 'New Service',
							'view' => 'View',
							'view_item' => 'View Service',
							'search_items' => 'Search Services'
					),
					'public' => true,
					'has_archive' => true,
					'supports' => array('title', 'editor', 'excerpt'),
			)
	);
	register_post_type( 'works',
			array(
					'labels' => array(
							'name' => __( 'Works' ),
							'singular_name' => __( 'Work' ),
							'add_new' => 'Add New',
							'add_new_item' => 'Add New Work',
							'edit' => 'Edit',
							'edit_item' => 'Edit Work',
							'new_item' => 'New Work',
							'view' => 'View',
							'view_item' => 'View Work',
							'search_items' => 'Search Works'
					),
					'public' => true,
					'has_archive' => true,
					'supports' => array('title', 'thumbnail'),
			)
	);
}

function _tk_widgets_init() {
	register_sidebar( array(
			'name'          => __( 'Footer', '_tk' ),
			'id'            => 'footer',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	));
	register_sidebar( array(
			'name'          => __( 'contact_info', '_tk' ),
			'id'            => 'contact_info',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	));
	register_sidebar( array(
			'name'          => __( 'quick_links', '_tk' ),
			'id'            => 'quick_links',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	));
	register_sidebar( array(
			'name'          => __( 'newsletter', '_tk' ),
			'id'            => 'newsletter',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	));
}
add_action( 'widgets_init', '_tk_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _tk_scripts() {

	// Import the necessary TK Bootstrap WP CSS additions
	wp_enqueue_style( '_tk-bootstrap-wp', get_template_directory_uri() . '/includes/css/bootstrap-wp.css' );

	// load bootstrap css
	wp_enqueue_style( '_tk-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.min.css' );

	// load Font Awesome css
	wp_enqueue_style( '_tk-font-awesome', get_template_directory_uri() . '/includes/css/font-awesome.min.css', false, '4.1.0' );

	// load _tk styles
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );

	// load bootstrap js
	wp_enqueue_script('_tk-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( '_tk-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( '_tk-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_tk-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';
