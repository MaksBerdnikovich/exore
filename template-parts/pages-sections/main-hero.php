<?php

$title = get_field( 'hero_title' );
$subtitle = get_field( 'hero_subtitle' );
$btn_text = get_field( 'hero_button' );

?>

<section class="site-section section--gap-xl hero">
    <canvas id="cnv" width="32" height="32"></canvas>

    <div class="hero__sphere">
        <?php for ($i = 1; $i <= 5; $i++):
            $pr_class = ($i % 2) == 0 ? 'sphere-parallax-invert' : 'sphere-parallax';
        ?>
            <img class="sphere-<?= $i ?> <?= $pr_class ?>"
                 src="<?= get_images_dir('hero/sphere-' . $i . '.svg') ?>"
                 alt="<?php esc_html_e('Sphere', 'exore'); ?>">
        <?php endfor; ?>
    </div>

    <div class="container">
        <div class="hero__wrap">
            <div class="hero__title">
                <h1 class="title-xlarge normal"><?= $title ?></h1>
            </div>
            <div class="hero__subtitle">
                <p><?= esc_html($subtitle) ?></p>
            </div>
            <div class="hero__button">
                <a href="#modalSend"
                   class="btn btn--primary btn--large"
                   data-fancybox
                   data-modal-trigger="<?= esc_html($btn_text) ?>"
                   data-modal-title="<?= get_field('home', 'option')['request_call']; ?>">
                    <?= esc_html($btn_text) ?>
                </a>
            </div>
        </div>
    </div>
</section>
