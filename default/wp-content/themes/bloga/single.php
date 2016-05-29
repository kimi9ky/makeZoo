<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bloga
 */

get_header(); ?>

<div class="row">
	<div class="col-md-8">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php //the_post_navigation(); ?>

					<div class="post-navigation clearfix">
						<?php previous_post_link('<span class="previous-post pull-left">%link</span>','<i class="fa fa-long-arrow-left"></i> previous article'); ?>
						<?php next_post_link('<span class="next-post pull-right">%link</span>','next article <i class="fa fa-long-arrow-right"></i>'); ?>
					</div> <!-- .post-navigation -->

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!--/.col-md-8-->

	<div class="col-md-4">
		<div class="sidebar-widget">
			<?php get_sidebar(); ?>
		</div><!--/.sidebar-widget-->
	</div><!--/.col-md-4-->
</div><!--/.row-->

<?php get_footer(); ?>
