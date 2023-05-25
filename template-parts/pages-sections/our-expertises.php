<?php

$is_active = get_field('expertises');
$title = get_field( 'expertises_title' );
$expertises = get_field( 'expertises_list' );
$image = get_field( 'expertises_image' );

?>

<?php if (!empty($is_active)): ?>
    <section class="site-section section--gap-xl expertises">
        <div class="container">
            <?php if (!empty($title)): ?>
                <div class="site-title">
                    <h2 class="title-large tx-white">
                        <?= esc_html($title) ?>
                    </h2>
                </div>
            <?php endif; ?>

            <div class="expertises__wrap">
                <div class="expertises__block mt-130">
                    <?php if (!empty($expertises)): ?>
                        <div class="expertises__item">
                            <ul class="expertises__list">
                                <?php foreach ($expertises as $item): ?>
                                    <li><?= esc_html($item['name']) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="expertises__block mt-130">
                    <?php if (!empty($image)): ?>
                        <div class="expertises__item">
                            <div class="expertises__image">
                                <img src="<?= esc_url($image) ?>" alt="<?= esc_html($title) ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
