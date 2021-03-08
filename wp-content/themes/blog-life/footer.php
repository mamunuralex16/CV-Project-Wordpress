<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog_Life
 */

?>
	<?php get_sidebar( 'feature-bottom' ); ?>
	

	</div> <!-- #content -->
	<?php get_sidebar( 'bottom' ); ?>
	<footer id="colophon" class="site-footer">
		<?php get_sidebar( 'footer' ); ?>  
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blog-life' ) ); ?>">
				<?php
				printf( esc_html__( 'Proudly powered by %s', 'blog-life' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				esc_html_e( 'Blog Life WordPress Theme by', 'blog-life' ); ?>
				<a href="<?php echo esc_url('https://blazethemes.com/'); ?>" target="_blank"><?php esc_html_e( 'Blaze Themes', 'blog-life' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
