<?php if ( get_field( "video_link" ) ) : ?>

    <div class="video">

        <div class="container">

            <h2 class="video__title" data-aos="fade">Watch a short video about the project</h2>

            <div class="video-img-wrap">
                <img class="video-img-sphere" src="<?= get_images_dir('cases/big-sphere.svg'); ?>" alt="Large sphere" data-aos="fade" data-aos-delay="400">
                <img class="video-img-sphere2" src="<?= get_images_dir('cases/big-sphere-smooth.svg'); ?>" alt="Large smooth sphere" data-aos="fade" data-aos-delay="400">

                <a class="video-img__link popup-youtube-en hide-on-mobile" href="<?php echo get_field( "video_link" ); ?>" data-aos="fade" data-aos-delay="100">
                    <img class="video-img" src="<?php echo get_field( "video_image" ); ?>" alt="Video">
                </a>

                <?php if ( get_field( "video_duration" ) ) : ?>
                    <div class="video-main" data-aos="fade" data-aos-delay="200">
                        <div class="waves-block">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                        <a href="<?php echo get_field( "video_link" ); ?>" class="video-btn popup-youtube-en" data-fancybox>
                            <i class="icon-play-circle"></i>
                        </a>
                        <div class="video-info">
                            <?php echo get_field( "video_duration" ); ?>
                        </div><!-- .video-info -->
                    </div><!-- .video-main -->
                <?php endif; ?>
            </div><!-- .video-img-wrap -->

        </div><!-- .container -->

    </div><!-- .video -->

<?php else: ?>

    <div class="container">
        <hr class="divider">
    </div>

<?php endif; ?>
