<?php
/**
 * The template for displaying search forms 
 * @package Blog Life
 */
?>


<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="screen-reader-text"><?php _x( 'Search for:', 'Screen reader text', 'blog-life' ); ?></span>
	<div class="form-group">		
      		<input type="text" class="form-control" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php _x( 'Enter search words', 'Search field placeholder','blog-life' ) ; ?>">
        		<button class="button-search" type="submit"><i class="fa fa-search"></i></button>   
    </div>
</form> 