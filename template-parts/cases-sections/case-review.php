<?php

$review_data = get_field( "case_review" );
$id = isset($review_data['id']) ? $review_data['id'] : null;
$title = isset($review_data['title']) ? $review_data['title'] : '';
$text = get_field('text', $id);

if (!empty($id)) {
    $review = get_post($id);
}

if (!empty($review)): ?>
    <div class="case-review" data-aos="fade">
        <?php if (!empty($title)): ?>
            <h2 class="section-headline"><?= esc_html($title); ?></h2>
        <?php endif; ?>

        <div class="clients__list">
            <div class="clients__item item">
                <div class="clients__item-desc">
                    <div class="clients__item-icon">
                        <i class="icon-quote"></i>
                    </div>

                    <?php if (!empty($text)): ?>
                        <div class="clients__item-text">
                            <div class="ckeditor"><?= $text ?></div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="clients__item-info">
                    <?php
                    $image_id = get_post_thumbnail_id($review->ID);
                    $image_attr = ['class' => 'img-responsive'];
                    $client_name = get_field('name', $review->ID);
                    $client_position = get_field('position', $review->ID);
                    ?>

                    <?php if (!empty($image_id)) : ?>
                        <div class="clients__item-avatar">
                            <i>
                                <?= wp_get_attachment_image($image_id, [140,140], false, $image_attr); ?>
                            </i>
                        </div>
                    <?php endif; ?>


                    <?php if (!empty($client_name) || !empty($client_position)): ?>
                        <div class="clients__item-userdata">
                            <b><?= esc_html($client_name) ?></b>
                            <span class="tx-primary"><?= esc_html($client_position) ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
