<section class="case-section case-info">

    <div class="container">

        <div class="case-main">

            <img src="<?= get_images_dir('cases/sphere1.svg'); ?>" alt="Sphere 1" class="case-sphere1">
            <img src="<?= get_images_dir('cases/sphere2.svg'); ?>" alt="Sphere 2" class="case-sphere2">
            <img src="<?= get_images_dir('cases/pyramid.svg'); ?>" alt="Pyramid" class="case-pyramid">

            <div class="row">
                <div class="col-lg-5">
                    <div class="breadcrumbs case-breadcrumbs">
                        <ul>
                            <li><a href="<?= home_url('/'); ?>">Home</a></li>
                            <li><a href="<?= get_post_type_archive_link( 'cases' ); ?>">Cases</a></li>
                            <li><span><?= get_the_title(); ?></span></li>
                        </ul>
                    </div><!-- .breadcrumbs -->

                    <?php if( get_field( "title" ) ) : ?>
                        <h1 class="case-main__title normal"><?php echo get_field( "title" ); ?></h1>
                    <?php endif; ?>

                    <?php
                        $case_information = get_field( "case_information" );
                    ?>

                    <div class="case-bullets">
                        <div class="case-bullets__row">

                            <div class="row">
                                <?php if ($case_information["type"] != "") : ?>
                                    <div class="col-md-5">
                                        <div class="case-bullet__item">
                                            <div class="case-bullet__label">Type</div>
                                            <div class="case-bullet__value"><?php echo $case_information["type"]; ?></div>
                                        </div>
                                    </div><!-- .col-md-5 -->
                                <?php endif; ?>

                                <?php if ($case_information["region"] != "") : ?>
                                    <div class="col-md-7">
                                        <div class="case-bullet__item case-bullet__item--map">
                                            <div class="case-bullet__label">Region</div>
                                            <div class="case-bullet__value"><?php echo $case_information["region"]; ?></div>
                                        </div>
                                    </div><!-- .col-md-7 -->
                                <?php endif; ?>
                            </div><!-- .row -->

                            <div class="row">
                                <?php if ($case_information["industry"] != "") : ?>
                                    <div class="col-md-5">
                                        <div class="case-bullet__item case-bullet__item--industry">
                                            <div class="case-bullet__label">Industry</div>
                                            <div class="case-bullet__value"><?php echo $case_information["industry"]; ?></div>
                                        </div>
                                    </div><!-- .col-md-5 -->
                                <?php endif; ?>

                                <?php if ($case_information["timeline"] != "") : ?>
                                    <div class="col-md-7">
                                        <div class="case-bullet__item case-bullet__item--time">
                                            <div class="case-bullet__label">Timeline</div>
                                            <div class="case-bullet__value"><?php echo $case_information["timeline"]; ?></div>
                                        </div>
                                    </div><!-- .col-md-7 -->
                                <?php endif; ?>
                            </div><!-- .row -->

                            <div class="row">
                                <?php if ($case_information["hours_spent"] != "") : ?>
                                    <div class="col-md-6">
                                        <div class="case-bullet__item case-bullet__item--hours">
                                            <div class="case-bullet__label">Man hours</div>
                                            <div class="case-bullet__value"><?php echo $case_information["hours_spent"]; ?></div>
                                        </div>
                                    </div><!-- .col-md-6 -->
                                <?php endif; ?>
                            </div><!-- .row -->

                        </div><!-- .case-bullets__row -->
                    </div><!-- .case-bullets -->

                </div><!-- .col-lg-6 -->
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="case-mockups hide-on-mobile">

                        <?php if (get_field("video_link")) : ?>
                            <div class="video-main video-main--fs" data-aos="fade" data-aos-delay="200">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                                <a href="<?php echo get_field( "video_link" ); ?>" class="video-btn popup-youtube-en" data-fancybox>
                                    <i class="icon-play-circle"></i>
                                </a>
                                <div class="video-info"></div><!-- .video-info -->
                            </div><!-- .video-main -->
                        <?php endif; ?>

                        <?php
                            $project_type = get_field( "project_type" );
                            $mockups = get_field( $project_type );
                        ?>

                        <?php if ($mockups["desktop_mockup"]) : ?>
                            <img class="mockup-desktop" src="<?php echo $mockups["desktop_mockup"]; ?>" alt="Desktop mockup">
                        <?php endif; ?>

                        <?php if ($mockups["mobile_mockup_desktop"]) : ?>
                            <img class="mockup-phone" src="<?php echo $mockups["mobile_mockup_desktop"]; ?>" alt="Mobile mockup">
                        <?php endif; ?>

                    </div><!-- .case-mockups -->
                </div><!-- .col-lg-6 -->
            </div><!-- .row -->

        </div><!-- .case-main -->

    </div><!-- .container -->

</section><!-- .case-info -->
