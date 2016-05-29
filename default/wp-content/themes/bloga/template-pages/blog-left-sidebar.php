<?php
/*
Template Name: Blog Left Sidebar
*/

get_header();
?>

<!--BLOG CONTENT START HERE-->

<div class="row">

    <div class="col-md-4">
        <div class="sidebar-widget">
            <?php get_sidebar(); ?>
        </div><!--/.sidebar-widget-->
    </div><!--/.col-md-4-->

    <div class="col-md-8">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php

                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array('post_type' => 'post','paged' => $paged);
                query_posts($args);

                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', get_post_format() );
                    endwhile;
                else:
                    get_template_part( 'template-parts/content', 'none' );
                endif;

                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!--/.col-md-8-->

</div><!--/.row-->

<!--BLOG CONTENT END HERE-->




<?php get_footer(); ?>
