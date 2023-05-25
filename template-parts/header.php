<header class="header" data-sticky>
    <div class="container">
        <div class="header__wrap">

            <div class="header__logo">
                <a href="<?= esc_url(home_url('/')) ?>">
                    <img src="<?= get_field('header_logo', 'option') ?>" alt="<?php esc_html_e('Logo', 'exore'); ?>">
                </a>
            </div><!-- .logo -->

            <?php
            wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'menu_id' => 'header-menu',
                'container' => 'nav',
                'container_class' => 'header__nav',
                'menu_class' => 'header__nav-menu',
            ));
            ?><!-- .menu -->

            <div class="header__estimation">
                <a href="#modalSend"
                   class="btn btn--primary btn--small"
                   data-fancybox
                   data-modal-trigger="<?= get_field('header_btn_text', 'option'); ?>"
                   data-modal-title="<?= get_field('home', 'option')['get_free_quote']; ?>">
                    <?= get_field('header_btn_text', 'option'); ?>
                </a>
            </div><!-- .estimation -->

            <div class="header__menu-toggle">
                <span class="line line--1"></span>
                <span class="line line--2"></span>
                <span class="line line--3"></span>
            </div><!-- .mobile-toggle -->

        </div><!-- .wrap -->
    </div><!-- .container -->
</header><!-- .header -->
