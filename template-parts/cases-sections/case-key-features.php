<?php if ( get_field( "key_features_title" ) ): ?>

    <!-- ######## KEY FEATURES ######## -->

    <div class="keyfeatures">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-flex align-items-center">

                    <div class="keyfeatures-wrap">

                        <img class="keyfeatures__ring" src="<?= get_images_dir('cases/ring.png'); ?>" alt="Ring" data-aos="fade">

                        <h2 class="keyfeatures-title section-headline" data-aos="fade"><?php echo get_field( "key_features_title" ); ?></h2>

                        <?php

                        $key_features = get_field("key_features");

                        if ( $key_features ) :
                            ?>

                            <ul class="keyfeatures-list" data-aos="fade" data-aos-delay="100">
                                <?php

                                $i = 0;
                                foreach ($key_features as $key => $value) {
                                    ?>

                                    <li class="keyfeatures-list__item">
                                        <?php echo $key_features[$i]["feature"]; ?>
                                    </li>

                                    <?php
                                    $i++;
                                }
                                ?>
                            </ul>

                        <?php endif; ?>

                    </div><!-- .keyfeatures-wrap -->

                </div><!-- .col-lg-4 -->

            </div><!-- .row -->
        </div><!-- .container -->

        <?php if ( get_field("key_features_image") ) : ?>
            <div class="keyfeatures-img-block hide-on-mobile" data-aos="slide-left" data-aos-delay="100" data-aos-duration="1300">

                <div class="keyfeatures-img-wrap d-flex align-items-center">
                    <div class="keyfeatures-img-wrap-inner">

                        <img class="key-features__imgmockup" src="<?php echo get_field("key_features_image"); ?>" alt="Key features" data-aos="fade" data-aos-delay="1100">

                        <img class="keyfeatures__cube" src="<?= get_images_dir('cases/cube.png'); ?>" alt="Cube" data-aos="fade" data-aos-delay="800">
                    </div>
                </div>

            </div><!-- .keyfeatures-img-block -->
        <?php endif; ?>

    </div><!-- .keyfeatures -->

    <div class="container">
        <hr class="divider">
    </div>

<?php endif; ?>
