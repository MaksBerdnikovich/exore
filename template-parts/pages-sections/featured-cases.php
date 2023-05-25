<?php

$is_active = get_field('cases');
$title = get_field( 'cases_title' );
$btn_text = get_field( 'cases_btn' );

$cases = get_posts(array(
    'numberposts' => -1,
    'post_type' => 'cases',
    'meta_key' => 'featured_cases_active',
    'meta_value' => '1'
));

?>

<?php if (!empty($is_active)): ?>
    <section class="site-section section--gap-xl cases">
        <div class="container">
            <?php if (!empty($title)): ?>
                <div class="site-title">
                    <h2 class="title-large">
                        <?= esc_html($title) ?>
                    </h2>
                </div>
            <?php endif; ?>

            <?php if (!empty($cases)): ?>
                <div class="cases__list mt-65">
                    <ul>
                        <?php foreach ($cases as $key => $case):
                            $is_highlight = get_field('featured_cases_highlight', $case->ID);
                            $order = get_field('featured_cases_order', $case->ID);
                            $title = get_field('featured_cases_title', $case->ID);
                            $excerpt = get_field('featured_cases_excerpt', $case->ID);
                            $image_src = get_field('featured_cases_image', $case->ID);

                        ?>
                            <li <?php if ($is_highlight): ?>class="highlight"<?php endif; ?>
                                <?php if (!$is_highlight): ?>style="order: <?= !empty($order) ? $order : 1 ?>;"<?php endif; ?>>

                                <div class="cases__item <?php if ($is_highlight): ?>item--highlight<?php endif; ?>">
                                    <?php if ($is_highlight): ?>
                                        <div class="cases__item-image">
                                            <a href="<?= get_post_permalink($case->ID) ?>">
                                                <img src="<?= $image_src ?>" alt="<?= esc_html($case->title) ?>">
                                            </a>
                                        </div>
                                    <?php endif;?>

                                    <div class="cases__item-info">
                                        <?php if (!empty($title)): ?>
                                            <div class="cases__item-title">
                                                <a href="<?= get_post_permalink($case->ID) ?>">
                                                    <h3><?= $title ?></h3>
                                                </a>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!empty($excerpt)): ?>
                                            <div class="cases__item-excerpt">
                                                <p><?= $excerpt ?></p>
                                            </div>
                                        <?php endif; ?>

                                        <div class="cases__item-link">
                                            <a href="<?= get_post_permalink($case->ID) ?>">
                                                <?php esc_html_e('Read more', 'exore') ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (!empty($btn_text)): ?>
                <div class="cases__btn">
                    <a href="<?= get_post_type_archive_link( 'cases' ); ?>" class="btn btn--primary btn--medium">
                        <?= esc_html($btn_text) ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
