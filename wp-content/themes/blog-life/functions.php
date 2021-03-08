<?php
/**
 * Blog Life functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blog_Life
 */

if ( ! defined( 'BLOGLIFE_VERSION' ) ) {
	// current version of the theme
	define( 'BLOGLIFE_VERSION', '1.0.0' );
}

if ( ! function_exists( 'blog_life_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function blog_life_setup() {

		load_theme_textdomain( 'blog-life', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		// additional image sizes
		add_image_size( 'blog_life_grid_gallery_thumbnail', 620, 380, true );
		//add_image_size( 'blog_life_masonry_thumbnail', 620, 9999 ); // 620 pixels wide with unlimited height, crop from the center	
		set_post_thumbnail_size( 'blog_life_masonry_thumbnail', 620, 9999 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'blog-life' ),
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

		add_theme_support( 'post-formats', array(
			'image',
			'gallery',
			'video',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'blog_life_custom_background_args',
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
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		/**
		 * Changing excerpt length for blog life theme
		 */
		function blog_life_excerpt_length( $length ) {
			if ( ! is_admin() ) {
				return 50;
			} else {
				return $length;
			}
		}
		add_filter( 'excerpt_length', 'blog_life_excerpt_length', 999 );

	}
endif;
add_action( 'after_setup_theme', 'blog_life_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blog_life_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blog_life_content_width', 1140 );
}
add_action( 'after_setup_theme', 'blog_life_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function blog_life_scripts() {
  // Add custom fonts, used in the main stylesheet.
  wp_enqueue_style( 'blog-life-fonts', blog_life_fonts_url(), array(), null );

  // Add Font Awesome Icons. Unminified version included.
  wp_enqueue_style('fontAwesome', get_template_directory_uri() . '/inc/font-awesome/css/fontawesome-all.min.css', array(), '5.0.12' );
  
  // Load our responsive stylesheet based on Bootstrap. Unminified version included.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array( ), '3.3.5' );
  
	wp_enqueue_style( 'blog-life-style', get_stylesheet_uri(), array(), BLOGLIFE_VERSION );
	wp_style_add_data( 'blog-life-style', 'rtl', 'replace' );

  wp_enqueue_script( 'blog-life-navigation', get_template_directory_uri() . '/js/navigation.js', array(), BLOGLIFE_VERSION, true );
  
  // customjs
	wp_enqueue_script( 'article-main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );

	if ( esc_attr(get_theme_mod('blog_style')) == 'masonry-style' && (is_home() || is_archive()) ) {
		wp_enqueue_script( 'jquery-masonry');
		wp_enqueue_script( 'bloglife-masonry', get_template_directory_uri() . '/js/masonry.js', array(), true );		
	}	


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blog_life_scripts' );

/**
 * Register Google fonts.
 * @return string Google fonts URL for the theme.
 */

if ( ! function_exists( 'blog_life_fonts_url' ) ) :
	function blog_life_fonts_url() {
		$blog_life_fonts_url = '';
		$blog_life_fonts     = array();
		$blog_life_font_subsets   = 'latin,latin-ext';
			
		// Translators: If there are characters in your language that are not supported by Open Sans, translate this to 'off'. Do not translate into your own language. 
		if ( 'off' !== esc_html_x( 'on', 'Open Sans font: on or off', 'blog-life' ) ) {
			$blog_life_fonts[] = 'Open Sans:400,600,700';
		}
			
		// Translators: If there are characters in your language that are not supported by Bad Script, translate this to 'off'. Do not translate into your own language. 
		if ( 'off' !== esc_html_x( 'on', 'Bad Script font: on or off', 'blog-life' ) ) {
			$blog_life_fonts[] = 'Bad Script:400';
		}	
	
		if ( $blog_life_fonts ) {
			$blog_life_fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $blog_life_fonts ) ),
				'subset' => urlencode( $blog_life_font_subsets ),
			), 'https://fonts.googleapis.com/css' );
		}
	
		return $blog_life_fonts_url;
	}
	endif;

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
 * Additional Sidebars
 */
require get_template_directory() . '/inc/sidebar.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

