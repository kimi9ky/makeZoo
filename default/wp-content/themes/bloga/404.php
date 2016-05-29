<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bloga
 */

get_header(); ?>

<div class="row">
	<div class="col-md-8">
		<div id="primary" class="content-area">
			<div id="main" class="site-main" role="main">

				<div class="error-404 not-found">
					<header class="page-header text-center">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bloga' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bloga' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->
				</div><!-- .error-404 -->

			</div><!-- #main -->
		</div><!-- #primary -->
	</div><!--/.col-md-8-->

	<div class="col-md-4">
		<div class="sidebar-widget">
			<?php get_sidebar(); ?>
		</div><!--/.sidebar-widget-->
	</div><!--/.col-md-4-->

<?php get_footer(); ?>
