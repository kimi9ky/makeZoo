<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bloga
 */

?>

			</div><!--/.container-->
		</div><!--/.section-padding-->
	</section><!--/.page-->
</div><!-- #content -->



<?php get_sidebar('footer'); ?>


<!-- Footer Section -->
<footer class="footer-area">
	<div class="container">
		<div class="copyright">
			<div class="site-info">
				<!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bloga' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bloga' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: Bloga by %1$s.', 'bloga' ), 'bloga', '<a href="http://xltheme.com/" rel="designer">XL Theme</a>' ); ?>-->
			</div><!-- .site-info -->
		</div><!-- /.copyright -->
	</div><!-- /.container -->
</footer><!-- /.footer-area -->
<!-- End Footer Section -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
