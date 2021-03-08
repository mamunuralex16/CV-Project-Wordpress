<?php 

/**
 * Register theme sidebars
 * @package Blog Life 
 */

 
function blog_life_widgets_init() {

	register_sidebar( array(
		'name' => esc_html__( 'Blog Right Sidebar', 'blog-life' ),
		'id' => 'blogright',
		'description' => esc_html__( 'Right sidebar for the blog', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
  ) );
  	
	register_sidebar( array(
		'name' => esc_html__( 'Page Right Sidebar', 'blog-life' ),
		'id' => 'pageright',
		'description' => esc_html__( 'Right sidebar for pages', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	) );		

	register_sidebar( array(
		'name' => esc_html__( 'Banner', 'blog-life' ),
		'id' => 'banner',
		'description' => esc_html__( 'For Images and Sliders.', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
		
	register_sidebar( array(
		'name' => esc_html__( 'Feature Top 1', 'blog-life' ),
		'id' => 'ftop1',
		'description' => esc_html__( 'Feature Top 1 position - full width group', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Feature Top 2', 'blog-life' ),
		'id' => 'ftop2',
		'description' => esc_html__( 'Feature Top 2 position - full width group', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Feature Top 3', 'blog-life' ),
		'id' => 'ftop3',
		'description' => esc_html__( 'Feature Top 3 position - full width group', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Feature Top 4', 'blog-life' ),
		'id' => 'ftop4',
		'description' => esc_html__( 'Feature Top 4 position - full width group', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	
	register_sidebar( array(
		'name' => esc_html__( 'Feature Bottom 1', 'blog-life' ),
		'id' => 'fbottom1',
		'description' => esc_html__( 'Feature Bottom 1 position - full width group', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Feature Bottom 2', 'blog-life' ),
		'id' => 'fbottom2',
		'description' => esc_html__( 'Feature Bottom 2 position - full width group', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Feature Bottom 3', 'blog-life' ),
		'id' => 'fbottom3',
		'description' => esc_html__( 'Feature Bottom 3 position - full width group', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Feature Bottom 4', 'blog-life' ),
		'id' => 'fbottom4',
		'description' => esc_html__( 'Feature Bottom 4 position - full width group', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	) );	

	register_sidebar( array(
		'name' => esc_html__( 'Bottom 1', 'blog-life' ),
		'id' => 'bottom1',
		'description' => esc_html__( 'Bottom 1 position', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 2', 'blog-life' ),
		'id' => 'bottom2',
		'description' => esc_html__( 'Bottom 2 position', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 3', 'blog-life' ),
		'id' => 'bottom3',
		'description' => esc_html__( 'Bottom 3 position', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 4', 'blog-life' ),
		'id' => 'bottom4',
		'description' => esc_html__( 'Bottom 4 position', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	) );	

	register_sidebar( array(
		'name' => esc_html__( 'Footer', 'blog-life' ),
		'id' => 'footer',
		'description' => esc_html__( 'This is a sidebar position that sits above the footer menu and copyright', 'blog-life' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="bl-widget-title-wrap"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	) );

}
add_action( 'widgets_init', 'blog_life_widgets_init' );

/**
 * Count the number of widgets to enable resizable widgets
 * in the featured top group.
 */

function blog_life_ftop() {
	$count = 0;
	if ( is_active_sidebar( 'ftop1' ) )
		$count++;
	if ( is_active_sidebar( 'ftop2' ) )
		$count++;
	if ( is_active_sidebar( 'ftop3' ) )
		$count++;		
	if ( is_active_sidebar( 'ftop4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-sm-6 col-md-6';
			break;
		case '3':
			$class = 'col-sm-6 col-md-4';
			break;
		case '4':
			$class = 'col-sm-6 col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}

/**
 * Count the number of widgets to enable resizable widgets
 * in the featured bottom group.
 */

function blog_life_fbottom() {
	$count = 0;
	if ( is_active_sidebar( 'fbottom1' ) )
		$count++;
	if ( is_active_sidebar( 'fbottom2' ) )
		$count++;
	if ( is_active_sidebar( 'fbottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'fbottom4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-sm-6 col-md-6';
			break;
		case '3':
			$class = 'col-sm-6 col-md-4';
			break;
		case '4':
			$class = 'col-sm-6 col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}

/**
 * Count the number of widgets to enable resizable widgets
 * in the bottom group.
 */

function blog_life_bottom() {
	$count = 0;
	if ( is_active_sidebar( 'bottom1' ) )
		$count++;
	if ( is_active_sidebar( 'bottom2' ) )
		$count++;
	if ( is_active_sidebar( 'bottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'bottom4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-sm-6 col-lg-6';
			break;
		case '3':
			$class = 'col-sm-6 col-lg-4';
			break;
		case '4':
			$class = 'col-sm-6 col-lg-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}
