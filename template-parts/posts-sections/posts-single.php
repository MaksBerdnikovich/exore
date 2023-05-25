<?php

$category = get_the_category()[0];
$recent_posts = get_posts(array(
    'numberposts' => 4,
    'category' => $category->slug,
    'exclude' => array(get_the_ID()),
    'post_status' => 'publish',
));

?>

<div class="site-article section--gap-l single-post-hero" style="background-image: url(<?= the_post_thumbnail_url('full') ?>)">
    <div class="single-post-hero__nav">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="<?= home_url('/') ?>"><?php esc_html_e('Home', 'exore'); ?></a></li>
                    <li><a href="<?= get_post_type_archive_link( 'post' ) ?>"><?php esc_html_e('Blog', 'exore'); ?></a></li>
                    <li><span><?= get_the_title() ?></span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="single-post-hero__title">
        <div class="container">
            <?php the_title( '<h1 class="title-giant tx-center tx-white">', '</h1>' ); ?>
        </div>
    </div>

    <div class="single-post-hero__meta">
        <div class="container">
            <div class="single-post-hero__meta-wrap">
                <div class="single-post-hero__meta-views">
                    <i class="icon-eye"></i>
                    <b>
                        <?php
                            set_post_views(get_the_ID());
                            echo get_post_views(get_the_ID());
                        ?>
                    </b>
                </div>

                <div class="single-post-hero__meta-date">
                    <i class="icon-calendar-alt"></i>
                    <b><?= get_the_date('d.m.Y'); ?></b>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-article section--gap-l single-post-content">
    <div class="container-offset">
        <div class="ckeditor">
            <?php
                the_content(
                    sprintf(
                        wp_kses(
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'exore' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    )
                );
            ?>
        </div>
    </div>
</div>

<?php if (!empty($recent_posts)): ?>
<div class="site-article section--gap-xl single-post-recent">
    <div class="container">
        <h2 class="title-xlarge tx-center"><?= __('Other Topics', 'exore'); ?></h2>

        <ul class="blog-page-list">
            <?php foreach ($recent_posts as $post): ?>
                <li class="mt-65">
                    <div class="blog-post-article__image">
                        <a class="post-thumbnail" href="<?php the_permalink($post->ID); ?>" aria-hidden="true" tabindex="-1">
                            <?php if (has_post_thumbnail(($post->ID))) { ?>
                                <img class="img-responsive"
                                     src="<?= get_the_post_thumbnail_url($post->ID, 'large'); ?>"
                                     alt="<?= $post->post_title ?>">
                            <?php } else { ?>
                                <img class="dummy"
                                     src="<?= get_images_dir('logo.svg'); ?>" alt="<?= $post->post_title ?>">
                            <?php } ?>
                        </a>
                    </div>

                    <div class="blog-post-article__title">
                        <h5 class="normal">
                            <a href="<?=esc_url(get_permalink($post->ID))?>" rel="bookmark"><?= $post->post_title ?></a>
                        </h5>
                    </div>

                    <div class="blog-post-article__excerpt">
                        <?= get_the_excerpt($post->ID) ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>
