<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bloga
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) { ?>
			<div class="post-thumbnail entry-thumbnail">
				<?php if (is_page_template('xl-blog-full-width.php')) {
					the_post_thumbnail('bloga-image-full', array('class' => 'img-responsive'));
				} else {
					the_post_thumbnail('bloga-image-thumb', array('class' => 'img-responsive'));
				}?>
			</div><!--/.post-thumbnail-->
		<?php } //.entry-thumbnail ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php bloga_posted_on(); ?>
				<?php bloga_entry_footer(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bloga' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

