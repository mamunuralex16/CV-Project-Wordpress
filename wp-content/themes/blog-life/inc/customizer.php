<?php
/**
 * Blog Life Theme Customizer
 *
 * @package Blog_Life
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function blog_life_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'blog_life_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'blog_life_customize_partial_blogdescription',
			)
		);
	}

/*
 * Create a new customizer section
 * Name: Blog Options
 */    
$wp_customize->add_section( 'blog_options', array(
	'title' => esc_html__( 'Blog Options', 'blog-life' ),
	'priority'       => 35,
) ); 


// Setting group for blog layout  
$wp_customize->add_setting( 'blog_style', array(
'default' => 'top-featured-right',
'sanitize_callback' => 'blog_life_sanitize_blogstyle',
) );  
$wp_customize->add_control( 'blog_style', array(
	'type' => 'radio',
	'label' => esc_html__( 'Blog Style', 'blog-life' ),
	'section' => 'blog_options',
	'priority' => 1,
	'choices' => array(	
		'top-featured-right' => esc_html__( 'Top Featured Image Right Sidebar', 'blog-life' ),
		'masonry-style' => esc_html__( 'Masonry Style', 'blog-life' ),	
) ) );



}
add_action( 'customize_register', 'blog_life_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function blog_life_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function blog_life_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function blog_life_customize_preview_js() {
	wp_enqueue_script( 'blog-life-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), BLOGLIFE_VERSION, true );
}
add_action( 'customize_preview_init', 'blog_life_customize_preview_js' );


/** Theme sanitization functions */

// adds sanitization callback function for the blog style : radio
function blog_life_sanitize_blogstyle( $input ) {
	$valid = array(
		'top-featured-right' => esc_html__( 'Top Featured Image Right Sidebar', 'blog-life' ),
		'masonry-style' => esc_html__( 'Masonry Style', 'blog-life' ),
	);
 
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}	

