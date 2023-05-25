<?php

$details = get_field('hero');

?>

<?php if ($details['active']): ?>
<section class="site-section section--gap-xl service-hero">
    <div class="service-hero__sphere">
        <?php for ($i = 1; $i <= 2; $i++):
            $pr_class = ($i % 2) == 0 ? 'sphere-parallax-invert' : 'sphere-parallax';
            ?>
            <img class="sphere-<?= $i ?> <?= $pr_class ?>"
                 src="<?= get_images_dir('services/sphere-' . $i . '.svg') ?>"
                 alt="<?php esc_html_e('Sphere', 'exore'); ?>">
        <?php endfor; ?>
    </div>

    <div class="container">
        <div class="service-hero__wrap">
            <div class="service-hero__start">
                <?php if (!empty($details['title'])): ?>
                    <div class="service-hero__title">
                        <h1 class="title-h2 tx-white"><?= esc_html($details['title']) ?></h1>
                    </div>
                <?php endif; ?>

                <?php if (!empty($details['button'])): ?>
                    <div class="service-hero__button">
                        <a href="#modalSend"
                           class="btn btn--primary btn--large"
                           data-fancybox
                           data-modal-trigger="<?= esc_html($details['button']) ?>"
                           data-modal-title="<?= get_field('services', 'option')['contact_us']; ?>">
                            <?= esc_html($details['button']) ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="service-hero__end">
                <?php if (!empty($details['image'])): ?>
                    <div class="service-hero__image">
                        <img class="sphere-parallax" src="<?= $details['image'] ?>" alt="<?= esc_html($details['title']) ?>">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
