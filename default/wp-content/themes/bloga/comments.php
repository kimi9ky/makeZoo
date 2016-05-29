<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bloga
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comment-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title widget-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'bloga' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'bloga' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'bloga' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'bloga' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'bloga' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'bloga' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'bloga' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bloga' ); ?></p>
	<?php endif; ?>

	 <?php
		 $commenter = wp_get_current_commenter();
		 $req = get_option( 'require_name_email' );
		 $aria_req = ( $req ? " aria-required='true'" : '' );
		$fields =  array(
		'author' => '<div class="row"><div class="col-md-12"><input class="form-control" id="author"
name="author"
type="text"
placeholder="'. __( 'Name', 'bloga' ) .'" value="" ' . $aria_req . '/></div>',
				'email'  => '<div class="col-md-12"><input class="form-control" id="email" name="email" type="text" placeholder="'. __( 'Email', 'bloga' ) .'" value=""
' . $aria_req . '/></div>',
				'url'  => '<div
class="col-md-12"><input class="form-control"  id="url" name="url" type="text" placeholder="'. __( 'Website url', 'bloga' ) .'"
value="" /></div></div>',
		);


		$comments_args = array(
		'fields' =>  $fields,
		'comment_notes_before'      => '',
		'comment_notes_after'       => '',
		'comment_field'             => '<div class="clearfix"></div><div class="row"><div class="col-md-12"><textarea class="form-control" id="comment"
placeholder="'. __( 'Comment', 'bloga' ) .'"
name="comment" row="20" aria-required="true"></textarea></div></div>',
		'label_submit'              => 'Send Comment'
		);

	 ?>

	<?php comment_form($comments_args); ?>

</div><!-- #comments -->
