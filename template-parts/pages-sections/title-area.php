<?php

add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );
$short_title = is_archive() ? get_the_archive_title() : get_the_title();

if (is_home()) {
    $short_title = __('Blog', 'exore');
}

$title = $short_title;
if (!empty($args['title'])) {
    $title = $args['title'];
}

$is_breadcrumbs = !isset($args['hide_breadcrumb']);
$is_centered = isset($args['centered']);

?>

<section class="site-section section--gap-m title-area">
    <div class="container">
        <div class="title-area__icon">
            <img src="<?= get_images_dir('icons/pyramid.svg') ?>" alt="<?php esc_html_e('Pyramid', 'exore'); ?>">
        </div>

        <?php if ($is_breadcrumbs): ?>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="<?= home_url('/') ?>"><?php esc_html_e('Home', 'exore'); ?></a></li>
                    <li><span><?= $short_title ?></span></li>
                </ul>
            </div>
        <?php endif; ?>

        <div class="title-area__heading <?php if ($is_centered): ?>heading--centered<?php endif; ?>">
            <h1 class="tx-white"><?= $title ?></h1>
        </div>
    </div>
</section>
