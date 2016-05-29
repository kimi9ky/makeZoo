<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bloga
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bloga' ); ?></a>

	<!-- Header Section -->
	<header class="header-area navbar-fixed-top">
		<div class="container">
            <div class="menu">
            	<nav class="navbar navbar-default" role="navigation">
	                <div class="container-fluid">
	                	<!-- Brand and toggle get grouped for better mobile display -->
	                  	<div class="navbar-header">

		                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-collapse">
			                    <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'bloga' ); ?></span>
			                    <span class="icon-bar"></span>
			                    <span class="icon-bar"></span>
			                    <span class="icon-bar"></span>
		                    </button>

							<div class="navbar-brand">
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							</div><!--/.navbar-brand-->

	                  	</div><!-- /.navbar-header -->

	                  	<!-- Collect the nav links, forms, and other content for toggling -->
	                  	<div class="collapse navbar-collapse" id="menu-collapse">
			
							<?php 
								wp_nav_menu( 
									array( 
										'theme_location' => 'primary', 
										'container' 	 => '',
										'items_wrap' 	 => '<ul class="nav navbar-nav navbar-right sm sm-blue main-menu">%3$s</ul>',
										'depth'      	 => 3,
										'fallback_cb'     => 'bloga_default_menu',
									)
								);
							?>		

		                </div><!-- /.navbar-collapse -->
	                </div><!-- /.container-fluid -->
            	</nav><!-- /.navbar -->
            </div><!-- /.menu -->
        </div><!-- /.container -->
	</header><!-- /.header-area -->
	<div class="blank"></div>
	<!-- End Header Section -->


	<div id="content" class="site-content">
		<!-- Blog Section -->
		<section id="blog-page" class="page blog-page">
			<div class="section-padding">
				<div class="container">

