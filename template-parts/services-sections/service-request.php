<?php

$details = get_field('request');

?>

<?php if ($details['active']): ?>
<section class="site-section section--gap-xl service-request">
    <div class="container">
        <div class="service-request__sphere">
            <img class="sphere" src="<?= get_images_dir('services/sphere.svg') ?>" alt="<?php esc_html_e('Sphere', 'exore'); ?>">
            <img class="pyramid" src="<?= get_images_dir('services/pyramid.svg') ?>" alt="<?php esc_html_e('Pyramid', 'exore'); ?>">
        </div>

        <?php if (!empty($details['title'])): ?>
            <div class="service-request__title">
                <h2 class="tx-white"><?= esc_html($details['title']) ?></h2>
            </div>
        <?php endif; ?>

        <?php if (!empty($details['subtitle'])): ?>
            <div class="service-request__subtitle">
                <p class="tx-white"><?= esc_html($details['subtitle']) ?></p>
            </div>
        <?php endif; ?>

        <?php if (!empty($details['button'])): ?>
            <div class="service-request__button">
                <a href="#modalSend"
                   class="btn btn--light btn--small"
                   data-fancybox
                   data-modal-trigger="<?= esc_html($details['button']) ?>"
                   data-modal-title="<?= get_field('services', 'option')['request_call']; ?>">
                    <?= esc_html($details['button']) ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
