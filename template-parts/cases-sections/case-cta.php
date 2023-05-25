<div class="cta">
    <img class="cta-img-sphere" src="<?= get_images_dir('cases/pyramid-cta.png'); ?>" alt="CTA pyramid" data-aos="fade" data-delay="200">
    <img class="cta-img-orange" src="<?= get_images_dir('cases/orange-thing.png'); ?>" alt="Orange" data-aos="fade" data-delay="400">

    <div class="container">

        <div class="row">
            <div class="col-lg-5">

                <?php if ( get_field("nemets_photo", "option") ) : ?>

                    <div class="cta-image-wrap" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                        <img src="<?php echo get_field("nemets_photo", "option"); ?>" alt="Yury Nemets" class="cta-image" data-aos="fade" data-aos-delay="1200">
                    </div><!-- .cta-image-wrap -->

                <?php endif; ?>

            </div><!-- .col-lg-5 -->
            <div class="col-lg-7 d-flex align-items-center">

                <div class="cta-content">
                    <h2 class="cta-title" data-aos="fade">Have a strong idea? <span class="text-block">Let's discuss it!</span></h2>
                    <p class="cta-name" data-aos="fade" data-delay="300">Yury Nemets</p>
                    <p class="cta-position"  data-aos="fade" data-delay="500">Co-founder of Exore LTD</p>

                    <ul class="social-personal-list"  data-aos="fade" data-delay="700">

                        <?php

                        $nemets_linkedin = get_field('nemets_linkedin', 'option');
                        $nemets_whatsapp = get_field('nemets_whatsapp', 'option');
                        $nemets_telegram = get_field('nemets_telegram', 'option');
                        $nemets_email = get_field('nemets_email', 'option');

                        ?>

                        <?php if ( $nemets_linkedin ) : ?>
                            <li class="social-personal-list__item">
                                <a class="social-personal-list__linkicon" href="<?php echo $nemets_linkedin["url"]; ?>" title="LinkedIn" target="_blank">
                                    <img src="<?= get_images_dir('icons/linkedin.png'); ?>" alt="LinkedIn">
                                </a>
                                <a class="social-personal-list__linktext" href="<?php echo $nemets_linkedin["url"]; ?>" title="LinkedIn" target="_blank">
                                    <?php echo $nemets_linkedin["label"]; ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ( $nemets_whatsapp ) : ?>
                            <li class="social-personal-list__item">
                                <a class="social-personal-list__linkicon" href="<?php echo $nemets_whatsapp["url"]; ?>" title="WhatsApp" target="_blank">
                                    <img src="<?= get_images_dir('icons/whatsapp.png'); ?>" alt="WhatsApp">
                                </a>
                                <a class="social-personal-list__linktext" href="<?php echo $nemets_whatsapp["url"]; ?>" title="WhatsApp" target="_blank">
                                    <?php echo $nemets_whatsapp["phone_number"]; ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ( $nemets_telegram ) : ?>
                            <li class="social-personal-list__item">
                                <a class="social-personal-list__linkicon" href="<?php echo $nemets_telegram["url"]; ?>" title="Telegram" target="_blank">
                                    <img src="<?= get_images_dir('icons/telegram.png'); ?>" alt="Telegram" title="Telegram">
                                </a>
                                <a class="social-personal-list__linktext" title="Telegram" href="<?php echo $nemets_telegram["url"]; ?>" target="_blank">
                                    <?php echo $nemets_telegram["label"]; ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if ( $nemets_email ) : ?>
                            <li class="social-personal-list__item">
                                <a class="social-personal-list__linkicon" href="mailto:nemetsyuriy@exore.pro" title="Email">
                                    <img src="<?= get_images_dir('icons/email.png'); ?>" alt="Email" title="Email">
                                </a>
                                <a class="social-personal-list__linktext" title="Email" href="mailto:<?php echo $nemets_email; ?>">
                                    <?php echo $nemets_email; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul><!-- .social-personal-list -->

                    <div class="btn-calendly">
                        <a href="https://calendly.com/yurynemets/discovery-call" class="btn btn--primary btn--medium" target="_blank">
                            <i class="icon-calendar-alt"></i> Schedule a call in Calendly
                        </a>
                    </div>
                </div>

            </div><!-- .col-lg-7 -->
        </div><!-- .row -->

    </div><!-- .container -->

</div><!-- .cta -->
