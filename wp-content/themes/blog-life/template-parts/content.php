<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blog_Life
 */

$blog_life_style = get_theme_mod( 'blog_style', 'top-featured-right');
$blog_life_clearfix_class = '';

if($blog_life_style == 'top-featured-right'){
	$blog_life_clearfix_class = 'clearfix';
}

// check if it is masonary layout
if  ($blog_life_style == 'masonry-style' ) { ?>
	<div class="box">
<?php } ?>


<article id="post-<?php the_ID(); ?>" <?php post_class($blog_life_clearfix_class); ?>>
	<?php
		if ( has_post_thumbnail() ) {        
			echo '<a class="featured-image-link" href="' . esc_url( get_permalink() ) . '" aria-hidden="true">';
	
		if  ($blog_life_style == 'masonry-style' ) :		
			the_post_thumbnail( 'blog_life_masonry_thumbnail', array( 'alt' => get_the_title(), 'itemprop' => "image"));		 
		else :
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'itemprop' => "image"));
		endif;
			echo '</a>';
		}
	?>

	<header class="entry-header">  
		<?php 
				the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
		<div class="entry-meta">
			<?php
				blog_life_posted_on();
				blog_life_posted_by();
			?>
		</div><!-- .entry-meta --> 
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<p>
			<?php the_excerpt(); ?>
		</p>
		<p class="more-link-wrapper">
			<a class="more-link" href="<?php the_permalink(); ?>">
				<?php echo esc_html('Continue', 'blog-life'); ?>
			</a>
		</p>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php if  ($blog_life_style == 'masonry-style' ) { ?>
	</div>
<?php }
