<?php
/**
 * connectaba functions and definitions 
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package connectaba
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function connectaba_setup() {
	/*
		* Make theme available for translation.
		*/
	load_theme_textdomain( 'connectaba', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-header' => esc_html__( 'Header Menu', 'connectaba' ),
			'menu-footer' => esc_html__( 'Footer Menu', 'connectaba' ),
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

	/**
	 * Add support for core custom logo.
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'connectaba_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function connectaba_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'connectaba_content_width', 640 );
}
add_action( 'after_setup_theme', 'connectaba_content_width', 0 );



/**
 * Enqueue scripts and styles.
 */
function connectaba_scripts() {
	wp_enqueue_style( 'connectaba-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'connectaba-style', 'rtl', 'replace' );
	wp_enqueue_style( 'connectaba-style-main', get_template_directory_uri() . '/assets/css/style.min.css', array() );


	wp_enqueue_script( 'connectaba-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'connectaba-main', get_template_directory_uri() . '/assets/js/app.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'connectaba_scripts' );


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

# Add SVG to the list of allowed files
# Adds SVG to the list of permitted files.
add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

# Fix MIME type for SVG files.
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ) {

	// WP 5.1+
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime type has been reset, fix it
	// and also check the user right
	if( $dosvg ){

		// allow
		if( current_user_can('manage_options') ){
			$data['ext'] = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// disable
		else {
			$data['ext'] = false;
			$data['type'] = false;
		}

	}

	return $data;
}









