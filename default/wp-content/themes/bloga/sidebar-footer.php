<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bloga
 */

if ( ! is_active_sidebar( 'footer-widget' ) ) {
    return;
}
?>

<!-- Footer Widget Section -->
<section class="footer-widget">
    <div class="section-padding pbottom-0">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar( 'footer-widget' ); ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.footer-widget -->
<!-- End Footer Widget Section -->
