<div class="blog-post-article__image">
    <?php if (has_post_thumbnail()) {
        exore_post_thumbnail();
    } else { ?>
        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
            <img class="dummy" src="<?= get_images_dir('logo.svg'); ?>" alt="<?php the_title(); ?>">
        </a>
    <?php } ?>
</div>

<div class="blog-post-article__title">
    <?php the_title( '<h5 class="normal"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' ); ?>
</div>

<div class="blog-post-article__excerpt">
    <?php the_excerpt() ?>
</div>
