<?php

add_filter('post_class', function ($classes, $css_class, $post_id) {
    $classes[] = 'ckeditor';

    return $classes;
}, 10, 3);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_content(); ?>
</article>
