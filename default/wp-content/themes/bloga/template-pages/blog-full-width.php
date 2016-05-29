<?php
/**
 * Template Name: Blog fullwidth
 */
get_header();?>

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

<?php get_footer();
