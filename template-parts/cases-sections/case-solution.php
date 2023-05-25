<?php

$solution_title = get_field( "solution_title" );

if ( trim($solution_title) != "" ) : ?>

    <div class="solution">

        <div class="container">

            <div class="section-gray-border">

                <div class="row">
                    <div class="offset-lg-2 col-lg-10">

                        <h2 class="section-headline" data-aos="fade"><?= $solution_title; ?></h2>

                    </div><!-- .col-lg-8 -->
                </div><!-- .row -->

                <div class="row" data-aos="fade" data-aos-delay="100">
                    <div class="col-lg-2 hide-on-mobile">

                        <div class="idea-image-wrap">
                            <img src="<?= get_images_dir('cases/solution.png'); ?>" alt="Solution">
                        </div><!-- .idea-image-wrap -->

                    </div><!-- .col-lg-4 -->

                    <div class="col-lg-9">

                        <div class="idea-content">
                            <?php the_field( "solution" ); ?>
                        </div>

                        <?php get_template_part('template-parts/cases-sections/case-review'); ?>

                    </div><!-- .col-lg-8 -->
                </div><!-- .row -->

            </div><!-- .section-gray-border -->

        </div><!-- .container -->

    </div><!-- .solution -->

    <div class="container">
        <hr class="divider">
    </div>

<?php endif; ?>
