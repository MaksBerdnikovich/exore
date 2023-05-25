<?php

/**
 * Include Header
 */
get_header();


/**
 * Include Title Area Section
 */
get_template_part('template-parts/pages-sections/title-area');


/**
 * Include Blog Section
 */
if (have_posts()) {

    /**
     * Include Categories
     */
    $args['slug'] = get_queried_object()->slug;
    get_template_part('template-parts/posts-sections/posts', 'categories', $args);

    ?>
    <section class="site-section blog-page">
        <div class="container">
            <ul class="blog-page-list">
                <?php while (have_posts()): the_post(); ?>
                    <li class="mt-80"><?php get_template_part('template-parts/content', get_post_type()); ?></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
    <?php

    /**
     * Include Navigation
     */
    if (is_pagination_exit()) {
        get_template_part('template-parts/pages-sections/pagination');
    } else {
        echo '<div class="site-divider mt-80"></div>';
    }

} else {
    get_template_part('template-parts/content', 'none');
}


/**
 * Include Footer
 */
get_footer();
