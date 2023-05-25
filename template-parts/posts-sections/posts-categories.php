<?php

$categories = get_categories(array(
    'post_type' => 'post',
    'hide_empty' => false,
));

$all_items = 0;
$categories_list = [];
foreach ($categories as $cat) {
    if ($cat->count > 0) {
        $all_items += intval($cat->count);
        $categories_list[] = $cat;
    }
}

$cat_slug = isset($args['slug']) ? $args['slug'] : null;

?>

<section class="site-section section--gap-m posts-categories">
    <div class="container">
        <ul class="posts-categories__list">
            <li>
                <a href="<?= get_post_type_archive_link( 'post' ) ?>"
                   class="btn btn--small <?php if (is_home()): ?>btn--primary<?php else: ?>btn--primary-outline<?php endif; ?>">
                    <span><?= __('All', 'exore'); ?> (<?= $all_items ?>)</span>
                </a>
            </li>

            <?php foreach ($categories_list as $cat) : ?>
                <li>
                    <a href="<?= get_category_link($cat->term_id) ?>"
                       class="btn btn--small <?php if ($cat->slug === $cat_slug): ?>btn--primary<?php else: ?>btn--primary-outline<?php endif; ?>">
                        <span><?= $cat->name ?> (<?= $cat->count ?>)</span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
