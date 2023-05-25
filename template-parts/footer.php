<footer class="footer">
    <div class="container">

        <div class="colophon">

            <div class="colophon__contact">
                <?php
                $phone = get_field('phone_number', 'option');
                $phone_mask = str_replace(['(', ')', '-', ' '], '', $phone);
                $phone_img = get_images_dir('icons/phone.svg');
                $email = get_field('email', 'option');
                $email_img = get_images_dir('icons/mail.svg');
                ?>

                <ul class="colophon__contact-list">
                    <li>
                        <a href="mailto:<?= $email ?>">
                            <img src="<?= $email_img ?>" alt="<?php esc_html_e('Email', 'exore'); ?>">
                            <span><?= $email ?></span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="colophon__reviews">
                <ul class="colophon__reviews-list">
                    <li>
                        <script type="text/javascript" src="https://widget.clutch.co/static/js/widget.js"></script>
                        <div class="clutch-widget" data-url="https://widget.clutch.co" data-widget-type="1" data-height="40" data-darkbg="1" data-clutchcompany-id="1323899"></div>
                    </li>
                    <li>
                        <script type="text/javascript" src="https://assets.goodfirms.co/assets/js/widget.min.js"></script>
                        <div class="goodfirm-widget" data-widget-type="goodfirms-widget-t8" data-widget-pattern="poweredby-star" data-height="60" data-company-id="44416"></div>
                    </li>
                </ul>
            </div>

        </div>

        <div class="copyright">

            <?php
            wp_nav_menu(array(
                'theme_location' => 'copyright_menu',
                'menu_id' => '',
                'container' => 'nav',
                'container_class' => 'copyright__nav',
                'menu_class' => 'copyright__nav-menu',
            ));
            ?>

            <div class="copyright__rights">
                <?= date('Y'); ?> &copy; <?php esc_html_e('Exore. All rights reserved', 'exore'); ?>.
            </div>

        </div>

    </div>
</footer>
