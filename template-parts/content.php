<?php

add_filter('excerpt_more', function ($more) {
    return '...';
});

add_filter('excerpt_length', function () {
    return 20;
});

add_filter('post_class', function ($classes, $css_class, $post_id) {
    if ('post' === get_post_type()) {
        $classes[] = 'blog-post-article';
    }

    if (is_singular()) {
        $classes[] = 'single-post-article';
    }

    return $classes;
}, 10, 3);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
        if ('post' === get_post_type() && !is_singular()) {

            /**
             * Include Blog Item Content
             */
            get_template_part('template-parts/posts-sections/posts', 'blog-item');
        }

        if ('post' === get_post_type() && is_singular()) {

            /**
             * Include Single Content
             */
            get_template_part('template-parts/posts-sections/posts', 'single');
        }
    ?>
</article>
