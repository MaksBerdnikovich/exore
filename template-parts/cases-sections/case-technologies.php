<?php

$technologies_integrations = get_field( "technologies_integrations" );

$technologies = $technologies_integrations["technologies"];
$integrations = $technologies_integrations["integrations"];
$column_number = 6;

if (empty($integrations)) {
    $column_number = 12;
}

?>

<div class="technologies">

    <div class="container">
        <div class="row">
            <div class="col-md-<?php echo $column_number; ?>">

                <div class="techstack">
                    <h2 class="techstack__title section-headline" data-aos="fade">Technologies</h2>
                </div><!-- .techstack -->

                <ul class="techstack-list" data-aos="fade">
                    <?php

                    $i = 0;
                    foreach ($technologies as $key => $value) { ?>

                        <li class="techstack-list__item">
                            <img class="techstack-list__img" src="<?= get_images_dir('techstack/'.$technologies[$i]["value"].'.png'); ?>" alt="<?php echo $technologies[$i]["label"]; ?>">
                            <p class="techstack-list__title"><?php echo $technologies[$i]["label"]; ?></p>
                        </li>

                        <?php
                        $i++;
                    } ?>
                </ul><!-- .techstack-list -->

            </div><!-- .col-md-6 -->

            <?php if (!empty($integrations)) { ?>
                <div class="col-md-6">

                    <div class="techstack">
                        <h2 class="techstack__title techstack__title--integrations section-headline" data-aos="fade" data-aos-delay="100">Integrations</h2>
                    </div><!-- .techstack -->

                    <ul class="techstack-list" data-aos="fade" data-aos-delay="100">
                        <?php

                        $i = 0;
                        foreach ($integrations as $key => $value) {
                            ?>

                            <li class="techstack-list__item">
                                <img class="techstack-list__img" src="<?= get_images_dir('techstack/'.$integrations[$i]["value"].'.png'); ?>" alt="<?php echo $integrations[$i]["label"]; ?>">
                                <p class="techstack-list__title"><?php echo $integrations[$i]["label"]; ?></p>
                            </li>

                            <?php
                            $i++;
                        }
                        ?>
                    </ul><!-- .techstack-list -->

                </div><!-- .col-md-6 -->
            <?php } ?>
        </div><!-- .row -->

        <?php if ( get_field("link_to_the_app") ) : ?>
            <div class="btn-wrap text-center" data-aos="fade" data-aos-delay="100">
                <a href="<?php echo get_field("link_to_the_app"); ?>" class="btn btn--primary btn--medium" rel="nofollow" target="_blank">Check the app</a>
            </div>
        <?php endif; ?>


    </div><!-- .container -->

</div><!-- .technologies -->
