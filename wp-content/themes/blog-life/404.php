<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Blog_Life
 */

get_header();
?>

	<main id="primary" class="site-main container">
		<div class="row">
			<section class="error-404 not-found col-md-12">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'blog-life' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'blog-life' ); ?></p>

						<?php
						get_search_form();
						?>

						<?php
						/* translators: %1$s: smiley */
						$blog_life_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'blog-life' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$blog_life_archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
						?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div><!-- row -->

	</main><!-- #main -->

<?php
get_footer();
