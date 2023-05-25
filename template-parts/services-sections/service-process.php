<?php

$details = get_field('process');

?>

<?php if ($details['active']): ?>
<section class="site-section section--gap-xl service-process">
    <div class="container">
        <?php if (!empty($details['title'])): ?>
            <div class="service-process__title">
                <h2 class="title-large"><?= esc_html($details['title']) ?></h2>
            </div>
        <?php endif; ?>

        <?php if (!empty($details['list'])):
            $i = 0;
        ?>
            <div class="service-process__list">
                <ul>
                    <?php foreach ($details['list'] as $item):
                        $i++;
                    ?>
                        <li class="mt-130">
                            <div class="service-process__item">
                                <div class="service-process__item-number">
                                    <b class="title-h4 tx-white"><?= $i ?></b>
                                </div>

                                <?php if (!empty($item['title'])): ?>
                                    <div class="service-process__item-title">
                                        <h4><?= $item['title'] ?></h4>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($item['text'])): ?>
                                    <div class="service-process__item-text">
                                        <div class="tinymce"><?= $item['text'] ?></div>
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
