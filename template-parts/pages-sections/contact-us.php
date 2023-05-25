<?php

$is_active = get_field('contact');
$title = get_field( 'contact_title' );
$btn_text = get_field( 'contact_btn' );
$questions = get_field( 'contact_question' );

$questions_list = [];
foreach ($questions as $qst) {
    $questions_list[] = $qst['question'];
}

?>

<?php if (!empty($is_active)): ?>
    <section class="site-section section--gap-xl contact">
        <div class="container">
            <?php if (!empty($title)): ?>
                <div class="site-title">
                    <h2 class="title-large">
                        <?= esc_html($title) ?>
                    </h2>
                </div>
            <?php endif; ?>

            <?php if (!empty($questions)): ?>
                <div class="contact__form">
                    <form id="contactForm" class="form">
                        <div class="contact__form-item">
                            <div class="contact__form-quest">
                                <h4 class="medium"><?= esc_html($questions_list[0]) ?></h4>
                            </div>
                            <div class="contact__form-list">
                                <div class="form-wrap">
                                    <div class="form-col form-col--25">
                                        <div class="radio-group-styled">
                                            <input id="wireframes_yes" type="radio" name="wireframes" value="Yes">
                                            <label for="wireframes_yes"><?php esc_html_e('Yes', 'exore') ?></label>
                                        </div>
                                    </div>
                                    <div class="form-col form-col--25">
                                        <div class="radio-group-styled">
                                            <input id="wireframes_no" type="radio" name="wireframes" value="No">
                                            <label for="wireframes_no"><?php esc_html_e('No', 'exore') ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact__form-item">
                            <div class="contact__form-quest">
                                <h4 class="medium"><?= esc_html($questions_list[1]) ?></h4>
                            </div>
                            <div class="contact__form-list">
                                <div class="form-wrap">
                                    <div class="form-col form-col--25">
                                        <div class="radio-group-styled">
                                            <input id="activity_startup" type="radio" name="activity" value="Startup">
                                            <label for="activity_startup"><?php esc_html_e('Startup', 'exore') ?></label>
                                        </div>
                                    </div>
                                    <div class="form-col form-col--25">
                                        <div class="radio-group-styled">
                                            <input id="activity_b2c" type="radio" name="activity" value="B2C">
                                            <label for="activity_b2c"><?php esc_html_e('B2C', 'exore') ?></label>
                                        </div>
                                    </div>
                                    <div class="form-col form-col--25">
                                        <div class="radio-group-styled">
                                            <input id="activity_b2b" type="radio" name="activity" value="B2B">
                                            <label for="activity_b2b"><?php esc_html_e('B2B', 'exore') ?></label>
                                        </div>
                                    </div>
                                    <div class="form-col form-col--25">
                                        <div class="radio-group-styled">
                                            <input id="activity_ecommerce" type="radio" name="activity" value="E-commerce">
                                            <label for="activity_ecommerce"><?php esc_html_e('E-commerce', 'exore') ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact__form-item">
                            <div class="contact__form-quest">
                                <h4 class="medium"><?= esc_html($questions_list[2]) ?></h4>
                            </div>
                            <div class="contact__form-list">
                                <div class="form-wrap">
                                    <div class="form-col form-col--25">
                                        <div class="radio-group-styled">
                                            <input id="budget_small" type="radio" name="budget" value="$15.000 - $29.000">
                                            <label for="budget_small">$15.000 - $29.000</label>
                                        </div>
                                    </div>
                                    <div class="form-col form-col--25">
                                        <div class="radio-group-styled">
                                            <input id="budget_medium" type="radio" name="budget" value="$30.000 - $69.000">
                                            <label for="budget_medium">$30.000 - $69.000</label>
                                        </div>
                                    </div>
                                    <div class="form-col form-col--25">
                                        <div class="radio-group-styled">
                                            <input id="budget_large" type="radio" name="budget" value="$70.000+">
                                            <label for="budget_large"><?php esc_html_e('more', 'exore') ?> $70.000+</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact__form-item form-item--btn">
                            <div class="form-wrap">
                                <div class="form-col form-col--25">
                                    <div class="btn-group">
                                        <a href="#modalSend"
                                           class="btn btn--primary btn--large disabled"
                                           data-fancybox
                                           data-contact-form-trigger
                                           data-modal-trigger="<?= esc_html($btn_text) ?>"
                                           data-modal-title="<?= get_field('home', 'option')['get_free_consultation']; ?>">
                                            <?= esc_html($btn_text) ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
        </div>

        <script>
            (function($) {
                $(function() {
                    $('input[name="wireframes"]').on('change', function() {
                        if ($(this).val() === 'yes') {
                            $('[data-form-line-hidden]').show();
                        } else {
                            $('[data-form-line-hidden]').hide();
                        }
                    })
                });
            })(jQuery);
        </script>
    </section>
<?php endif; ?>
