<section class="site-section cookies-consent" style="display: none;">
    <div class="container">
        <div class="cookies-consent__wrap">
            <div class="cookies-consent__text">
                <p><?= get_field('cookies_consent', 'option'); ?></p>
            </div>
            <div class="cookies-consent__btn">
                <button class="btn btn--small btn--primary set-cookie">
                    <?php esc_html_e('OK', 'exore'); ?>
                </button>
            </div>
        </div>
    </div>
</section>
