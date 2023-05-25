<?php

$details = get_field('advantages');

?>

<?php if ($details['active']): ?>
<section class="site-section section--gap-xl service-advantages">
    <div class="container">
        <?php if (!empty($details['title'])): ?>
            <div class="service-advantages__title">
                <h2 class="title-large"><?= esc_html($details['title']) ?></h2>
            </div>
        <?php endif; ?>

        <?php if (!empty($details['quickfinder'])): ?>
            <div class="service-advantages__list">
                <ul>
                    <?php foreach ($details['quickfinder'] as $quick): ?>
                        <li>
                            <div class="service-advantages__item">
                                <?php if (!empty($quick['image'])): ?>
                                    <div class="service-advantages__item-image">
                                        <img src="<?= $quick['image'] ?>" alt="<?php esc_html_e('Quickfinder', 'exore') ?>">
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($quick['text'])): ?>
                                    <div class="service-advantages__item-text">
                                        <p><?= $quick['text'] ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
