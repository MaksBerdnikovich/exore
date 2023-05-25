<?php

$is_start = $args % 2;
$details = get_field('case_information');
$details['image'] = get_the_post_thumbnail_url(get_the_ID(), "full" );

?>

<article class="site-article mt-130 cases-article <?= $is_start ? 'article--start' : 'article--end' ?>">
    <div class="container">
        <div class="cases-article__wrap">
            <div class="cases-article__block block--start">
                <div class="cases-article__item">
                    <?php if (isset($details['type'])): ?>
                        <div class="cases-article__type">
                            <?php if (isset($details['type_key'])): ?>
                                <i>
                                    <img src="<?= get_images_dir('icons/'.$details['type_key'].'.svg') ?>"
                                         alt="<?= esc_html($details['type']) ?>">
                                </i>
                            <?php endif; ?>
                            <span><?= esc_html($details['type']) ?></span>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty(get_the_title())): ?>
                        <div class="cases-article__title">
                            <?php the_title( '<h3>', '</h3>' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty(get_the_excerpt())): ?>
                        <div class="cases-article__excerpt">
                            <?php the_excerpt('<p>', '</p>') ?>
                        </div>
                    <?php endif; ?>

                    <div class="cases-article__link">
                        <a href="<?= get_post_permalink(get_the_ID()) ?>" target="_self">
                            <?php esc_html_e('More', 'exore') ?>
                        </a>
                    </div>
                </div>
            </div>

            <?php if (!empty($details['image'])): ?>
                <div class="cases-article__block block--end">
                    <div class="cases-article__item">
                        <div class="cases-article__image">
                            <img src="<?= $details['image'] ?>" alt="<?php the_title() ?>">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</article>
