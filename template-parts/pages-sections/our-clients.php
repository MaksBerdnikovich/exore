<?php

$is_active = get_field('clients');
$title = get_field( 'clients_title' );
$reviews = get_posts(array(
    'numberposts' => -1,
    'post_type' => 'reviews',
    'orderby' => 'date',
    'order' => 'DESC',
));

?>

<?php if (!empty($is_active)): ?>
    <section class="site-section section--gap-xl clients">
        <div class="container">
            <?php if (!empty($title)): ?>
                <div class="site-title">
                    <h2 class="title-large">
                        <?= esc_html($title) ?>
                    </h2>
                </div>
            <?php endif; ?>
        </div>

        <?php if (!empty($reviews)): ?>
            <div class="clients__list mt-130 owl-carousel" data-reviews-carousel>
                <?php foreach ($reviews as $key => $review):
                    $full_text = get_field('text', $review->ID);
                ?>
                    <div class="clients__item item" style="width: 640px;">
                        <div class="clients__item-desc">
                            <div class="clients__item-icon">
                                <i class="icon-quote"></i>
                            </div>

                            <?php if (!empty($full_text)): ?>
                                <div class="clients__item-text text--hidden" data-more-block>
                                    <div class="ckeditor"><?= $full_text ?></div>
                                </div>

                                <a href="#readMore" class="clients__item-link" data-more-triger>
                                    <?php esc_html_e('Read full review', 'exore') ?>
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="clients__item-info">
                            <?php
                                $image_id = get_post_thumbnail_id($review->ID);
                                $image_attr = ['class' => 'img-responsive', 'loading' => ''];
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
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>
