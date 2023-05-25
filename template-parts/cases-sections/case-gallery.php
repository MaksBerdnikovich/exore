<?php if ( get_field( "gallery_title" ) ) : ?>
    <div class="cases-gallery">
        <h2 class="section-headline section-headline--casesgallery text-center" data-aos="fade"><?php echo get_field( "gallery_title" ); ?></h2>

        <p class="section-subheadline text-center" data-aos="fade" data-aos-delay="100"><?php echo get_field( "gallery_subtitle" ); ?></p>

        <?php
            $gallery = get_field("gallery");
        ?>

        <?php if ( get_field( "gallery" ) ) :?>
            <div class="cases-gallery-wrap" data-aos="fade" data-aos-delay="400">
                <div class="cases-carousel owl-carousel" data-cases-carousel>
                    <?php
                    $i = 0;
                    $j = 1;

                    foreach ($gallery as $key) { ?>
                        <div class="cases-carousel__item item" style="width: 667px;">
                            <a href="javascript:void(0)" data-src="<?= $gallery[$i]; ?>" data-fancybox="gallery">
                                <img class="img-responsive" src="<?= $gallery[$i]; ?>" alt="Case screen <?= $i+1; ?>">
                            </a>
                        </div>
                        <?php
                        $i++;
                        $j++;
                    } ?>
                </div><!-- .cases-carousel -->
            </div><!-- .cases-gallery-wrap -->
        <?php endif; ?>
    </div><!-- .cases-gallery -->
<?php endif; ?>
