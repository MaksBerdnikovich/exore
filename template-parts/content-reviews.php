<?php

$image_id = get_post_thumbnail_id(get_the_ID());
$image_attr = ['class' => 'img-responsive', 'loading' => ''];

?>


<article class="site-article reviews-article mt-65">
    <div class="container">
        <div class="reviews-article__wrap">
            <div class="reviews-article__item">
                <div class="reviews-article__start">
                    <?php if (!empty($image_id)) : ?>
                        <div class="reviews-article__avatar">
                            <i>
                                <?= wp_get_attachment_image($image_id, [140,140], false, $image_attr); ?>
                            </i>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty(get_field('name'))): ?>
                        <div class="reviews-article__title">
                            <strong><?= esc_html(get_field('name')); ?></strong>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty(get_field('position'))): ?>
                        <div class="reviews-article__position">
                            <span class="tx-primary"><?= esc_html(get_field('position')); ?></span>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="reviews-article__center">
                    <div class="reviews-article__rating">
                        <div class="reviews-article__rating-stars">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <i class="icon-star <?php if ($i < get_field('rating')): ?>active<?php endif; ?>"></i>
                            <?php endfor; ?>
                        </div>
                        <div class="reviews-article__rating-point">
                            <span><?= get_field('rating') ?>.0</span>
                        </div>
                    </div>

                    <?php if (!empty(get_field('text'))): ?>
                        <?php if (!is_single()): ?>
                            <div class="reviews-article__text text--hidden" data-more-block>
                                <div class="ckeditor"><?= get_field('text'); ?></div>
                            </div>

                            <a class="reviews-article__more" href="#readMore" data-more-triger>
                                <?php esc_html_e('Read full review', 'exore'); ?>
                            </a>
                        <?php else: ?>
                            <div class="reviews-article__text">
                                <div class="ckeditor"><?= get_field('text'); ?></div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <div class="reviews-article__end">
                    <?php if (!empty(get_field('platform'))):
                        $image = get_field('platform')['image'];
                        $alt_text = get_field('platform')['alt_text'];
                    ?>
                        <div class="reviews-article__platform">
                            <img src="<?= $image ?>" alt=" <?= esc_html($alt_text); ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</article>
