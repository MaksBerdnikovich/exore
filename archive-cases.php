<?php

/**
 * Include Header
 */
get_header();


/**
 * Include Title Area Section
 */

$args['title'] = get_field('cases_title', 'option');
get_template_part('template-parts/pages-sections/title-area', '', $args);


/**
 * Include Cases Section
 */
if (have_posts()) {
    $i = 1;
    while (have_posts()) {
        the_post();

        get_template_part('template-parts/content', get_post_type(), $i++);
    }

    if (is_pagination_exit()) {
        get_template_part('template-parts/pages-sections/pagination');
    } else {
        echo '<div class="site-divider mt-130"></div>';
    }
} else {
    get_template_part('template-parts/content', 'none');
}

/**
 * Include Footer
 */
get_footer();
