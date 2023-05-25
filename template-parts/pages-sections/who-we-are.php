<?php

$is_active =  get_field('who_we_are');
$title = get_field('who_we_are_title');
$desc = get_field('who_we_are_desc');
$btn_text = get_field('who_we_are_btn');
$companies = get_field('companies');

?>

<?php if (!empty($is_active)): ?>
    <section class="site-section section--gap-xl who-we-are">
        <div class="container-fluid">
            <?php if (!empty($title)): ?>
                <div class="site-title">
                    <h2 class="title-large">
                        <?= esc_html($title) ?>
                    </h2>
                </div>
            <?php endif; ?>

            <?php if (!empty($desc)): ?>
                <div class="who-we-are__desc">
                    <p>
                        <?= esc_html($desc) ?>
                    </p>
                </div>
            <?php endif; ?>

            <?php if (!empty($companies)): ?>
                <div class="who-we-are__company">
                    <ul class="who-we-are__company-list">
                        <?php foreach ($companies as $company): ?>
                            <li>
                                <img src="<?= esc_url($company['image']) ?>" alt="<?= esc_html($company['alt_text']) ?>">
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (!empty($btn_text)): ?>
                <div class="who-we-are__btn">
                    <a href="#modalSend"
                       class="btn btn--primary btn--medium"
                       data-fancybox
                       data-modal-trigger="<?= esc_html($btn_text) ?>"
                       data-modal-title="<?= get_field('home', 'option')['book_call_with_our_team']; ?>">
                        <?= esc_html($btn_text) ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
