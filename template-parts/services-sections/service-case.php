<?php

$details = get_field('case');

?>

<?php if ($details['active']): ?>
<section class="site-section section--gap-xl service-case">
    <div class="container">
        <div class="service-case__wrap">
            <div class="service-case__block service-case__info">
                <?php if (!empty($details['name'])): ?>
                    <div class="service-case__name">
                        <span class="title-h4 normal"><?= esc_html($details['name']) ?></span>
                    </div>
                <?php endif; ?>

                <?php if (!empty($details['title'])): ?>
                    <div class="service-case__title">
                        <a href="<?= esc_html($details['button_link']) ?>">
                            <h2 class="title-h2 medium"><?= esc_html($details['title']) ?></h2>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if (!empty($details['subtitle'])): ?>
                    <div class="service-case__subtitle">
                        <p><?= esc_html($details['subtitle']) ?></p>
                    </div>
                <?php endif; ?>

                <?php if (!empty($details['button_link'])): ?>
                    <div class="service-case__button">
                        <a href="<?= esc_html($details['button_link']) ?>" class="btn btn--primary btn--small">
                            <?= esc_html($details['button_text']) ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="service-case__block service-case__image">
                <?php if (!empty($details['image'])): ?>
                    <a href="<?= esc_html($details['button_link']) ?>">
                        <img class="img-responsive" src="<?= $details['image'] ?>" alt="<?= esc_html($details['title']) ?>">
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <div class="service-case__wrap mt-130">
            <?php if (!empty($details['text'])): ?>
                <div class="service-case__block service-case__desc">
                    <div class="icon"><i class="icon-quote"></i></div>
                    <div class="tinymce"><?= $details['text'] ?></div>
                </div>
            <?php endif; ?>

            <?php if (!empty($details['person_name'])): ?>
                <div class="service-case__block service-case__person">
                    <?php if (!empty($details['person_avatar'])): ?>
                        <div class="service-case__person-avatar">
                            <img class="img-responsive" src="<?= $details['person_avatar'] ?>" alt="<?= esc_html($details['person_name']) ?>">
                        </div>
                    <?php endif; ?>

                    <div class="service-case__person-name">
                        <strong><?= esc_html($details['person_name']) ?></strong>
                    </div>

                    <?php if (!empty($details['person_position'])): ?>
                        <div class="service-case__person-name">
                            <span><?= esc_html($details['person_position']) ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
