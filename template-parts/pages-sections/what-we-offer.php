<?php

$is_active =  get_field('offers');
$title = get_field('offers_title');
$offers = get_field('offers_list');

?>

<?php if (!empty($is_active)): ?>
    <section class="site-section section--gap-xl offers">
        <div class="container">
            <?php if (!empty($title)): ?>
                <div class="site-title">
                    <h2 class="title-large">
                        <?= esc_html($title) ?>
                    </h2>
                </div>
            <?php endif; ?>

            <?php if (!empty($offers)): ?>
                <div class="offers__list">
                    <div class="offers__list-wrap">
                        <?php foreach ($offers as $offer):
                            $is_highlight = isset($offer['highlight']) && !empty($offer['highlight']);
                            $extra_class = $is_highlight ? 'item--highlight' : '';
                            $btn_class = $is_highlight ? 'btn--light' : 'btn--primary';
                        ?>
                            <div class="offers__list-block mt-130">
                                <div class="offers__item <?= $extra_class ?>">
                                    <div class="offers__item-title">
                                        <picture>
                                            <img src="<?= esc_url($offer['icon']) ?>"
                                                 alt="<?= esc_html($offer['title']) ?>">
                                        </picture>
                                        <h3>
                                            <?= esc_html($offer['title']) ?>
                                        </h3>
                                    </div>
                                    <?php if (!empty($offer['list'])): ?>
                                        <div class="offers__item-list">
                                            <ul>
                                                <?php foreach ($offer['list'] as $item): ?>
                                                    <li><?= $item['name'] ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                    <div class="offers__item-btn">
                                        <a href="#modalSend"
                                           class="btn btn--medium <?= $btn_class ?>"
                                           data-fancybox
                                           data-modal-trigger="<?= esc_html($offer['button']) ?>"
                                           data-modal-title="<?= get_field('home', 'option')['talk_to_our_team']; ?>">
                                            <?= esc_html($offer['button']) ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
