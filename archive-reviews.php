<?php

/**
 * Include Header
 */
get_header();


/**
 * Include Title Area Section
 */

$args['title'] = get_field('reviews_title', 'option');
get_template_part('template-parts/pages-sections/title-area', '', $args);


/**
 * Include Reviews Articles
 */
if (have_posts()) {
    while (have_posts()) {
        the_post();

        get_template_part('template-parts/content', get_post_type());
    }

    if (is_pagination_exit()) {
        get_template_part('template-parts/pages-sections/pagination');
    } else {
        echo '<div class="site-divider mt-65"></div>';
    }
} else {
    get_template_part('template-parts/content', 'none');
}

/**
 * Include Footer
 */
get_footer();
