<?php

$title = get_field('title');
$subtitle = get_field('subtitle');
$packages = get_field('packages');
$information = get_field('information');

$packages_list = [];
foreach ($packages as $package) {
    if ($package['active']) {
        $packages_list[] = $package;
    }
}

$labels_list = [];
foreach ($packages as $package) {
    foreach ($package['items'] as $item) {
        $labels_list[] = $item['label'];
    }
}
$labels_list = array_unique($labels_list);

$information_title = $information['title'];
$information_list = [];
foreach ($information['list'] as $item) {
    if ($item['active']) {
        $information_list[] = $item['item'];
    }
}

?>

<section class="site-section section--gap-m packages">
    <div class="container">
        <?php if (!empty($title)): ?>
            <div class="site-title">
                <h1 class="normal"><?= esc_html($title) ?></h1>
                <p><?= esc_html($subtitle) ?></p>
            </div>
        <?php endif; ?>

        <div class="packages__table">
            <div class="packages__table-cell table-cell--start">
                <ul class="packages__table-list">
                    <li></li>
                    <?php foreach ($labels_list as $label): ?>
                        <li><b><?= esc_html($label) ?></b></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <?php
                $i = 0;
                foreach ($packages_list as $package): $i++
            ?>
                <div class="packages__table-cell <?php if (!($i % 2)): ?>table-cell--highlight<?php endif; ?>">
                    <ul class="packages__table-list">
                        <li>
                            <b class="title-h5"><?= esc_html($package['title'] . ' ' . $i) ?></b>
                            <span><?= esc_html($package['period']) ?></span>
                        </li>
                        <?php foreach ($package['items'] as $item): ?>
                            <li>
                                <b class="title-h6"><?= esc_html($item['label']) ?></b>
                                <span><?= esc_html($item['value']) ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="packages__info">
            <?php if (!empty($information_title)): ?>
                <b class="title-h5 tx-primary"><?= esc_html($information_title) ?></b>
            <?php endif; ?>

            <ul>
                <?php if (!empty($information_list)): ?>
                    <?php foreach ($information_list as $item): ?>
                        <li>&mdash; <?= esc_html($item) ?> </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>
