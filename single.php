<?php

$args['id'] = get_the_ID();

/**
 * Include Header
 */
get_header();


while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', get_post_type() );

    get_template_part('template-parts/posts-sections/posts', 'navigation', $args);
endwhile;


/**
 * Include Footer
 */
get_footer();
