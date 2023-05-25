<?php

$idea_title = get_field( "idea_title" );

if ( trim($idea_title) != "" ) : ?>

    <div class="idea">

        <div class="container">

            <div class="section-gray-border">

                <div class="row">
                    <div class="offset-lg-2 col-lg-10">

                        <h2 class="section-headline" data-aos="fade"><?= $idea_title; ?></h2>

                    </div><!-- .col-lg-8 -->
                </div><!-- .row -->

                <div class="row" data-aos="fade" data-aos-delay="100">
                    <div class="col-lg-2 hide-on-mobile">

                        <div class="idea-image-wrap">
                            <img src="<?= get_images_dir('cases/spiral.png'); ?>" alt="Spiral">
                        </div><!-- .idea-image-wrap -->

                    </div><!-- .col-lg-4 -->

                    <div class="col-lg-9">

                        <div class="idea-content">
                            <?php the_field( "idea" ); ?>
                        </div>

                    </div><!-- .col-lg-8 -->
                </div><!-- .row -->

            </div><!-- .section-gray-border -->

        </div><!-- .container -->

    </div><!-- .idea -->

    <div class="container">
        <hr class="divider">
    </div>

<?php endif; ?>
