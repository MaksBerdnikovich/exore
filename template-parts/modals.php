<div id="modalSend" class="modal" data-modal data-modal-form>
    <div class="modal__title">
        <h3 id="modalSendTitle" class="title-large tx-center"></h3>
    </div>

    <div class="modal__form">
        <form id="requestForm" class="form" action="<?= get_template_directory_uri() . '/php-libs/mail.php' ?>" method="post">
            <input type="hidden" name="utm" value="<?= get_permalink(); ?>">
            <input type="hidden" name="place" value="">

            <div class="form-wrap">
                <div class="form-col form-col--50">
                    <div class="input-group">
                        <input type="text" name="name" required placeholder="<?php esc_html_e('Name*', 'exore') ?>">
                        <label class="error-msg"><?php esc_html_e('Enter valid name', 'exore') ?></label>
                    </div>
                </div>
                <div class="form-col form-col--50">
                    <div class="input-group">
                        <input type="text" name="phone_email" required placeholder="<?php esc_html_e('Phone or e-mail*', 'exore') ?>">
                        <label class="error-msg"><?php esc_html_e('Enter valid phone or email', 'exore') ?></label>
                    </div>
                </div>
                <div class="form-col form-col--100">
                    <div class="input-group">
                        <textarea name="comment" placeholder="<?php esc_html_e('Message', 'exore') ?>"></textarea>
                    </div>
                </div>
                <div class="form-col form-col--100">
                    <label class="file-group">
                        <input type="file" name="attach">
                        <span class="file-group__wrap">
                            <span class="file-group__txt">
                            <!--<i class="file-clear"><img src="--><?//= get_images_dir('icons/drop.svg'); ?><!--" alt="drop"></i>-->
                                <b class="tx-primary"></b>
                            </span>
                            <span class="file-group__btn">
                                <i><img src="<?= get_images_dir('icons/add.svg'); ?>" alt="add"></i>
                                <b><?php esc_html_e('Attach file', 'exore') ?></b>
                            </span>
                        </span>
                    </label>
                </div>
                <div class="form-col form-col--100">
                    <div class="btn-group">
                        <button id="requestFormBtn" type="submit" class="btn btn--primary btn--medium">
                            <?php esc_html_e('Send', 'exore') ?>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="modalConfirm" class="modal modal--confirm" data-modal>
    <div class="modal__title">
        <h3 class="title-large"><?php esc_html_e('Thank You!', 'exore'); ?></h3>
        <span class="title-h4"><?php esc_html_e('We will answer soon', 'exore'); ?></span>
    </div>

    <div class="modal__body">
        <div class="animated-check">
            <svg viewBox="0 0 130.2 130.2">
                <circle class="path circle" fill="none" stroke="#0055E9" stroke-width="2" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                <polyline class="path check" fill="none" stroke="#0055E9" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
            </svg>
        </div>
    </div>

    <div class="modal__foot">
        <button class="btn btn--primary btn--medium" data-modal-close><?php esc_html_e('OK', 'exore'); ?></button>
    </div>
</div>

<div id="modalError" class="modal modal--confirm" data-modal>
    <div class="modal__title">
        <h3 class="title-large"><?php esc_html_e('Error!', 'exore'); ?></h3>
        <span class="title-h4" data-error-message></span>
    </div>

    <div class="modal__body">
        <div class="animated-error">
            <svg viewBox="0 0 87 87">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Group-2" transform="translate(2.000000, 2.000000)">
                        <circle stroke="rgba(252, 191, 191, .5)" stroke-width="2" cx="41.5" cy="41.5" r="41.5"></circle>
                        <circle class="error-circle" stroke="#F74444" stroke-width="2" cx="41.5" cy="41.5" r="41.5"></circle>
                        <path class="error-line1" d="M22.244224,22 L60.4279902,60.1837662" stroke="#F74444" stroke-width="2" stroke-linecap="square"></path>
                        <path class="error-line2" d="M60.755776,21 L23.244224,59.8443492" stroke="#F74444" stroke-width="2" stroke-linecap="square"></path>
                    </g>
                </g>
            </svg>
        </div>
    </div>

    <div class="modal__foot">
        <button class="btn btn--primary btn--medium" data-modal-close><?php esc_html_e('OK', 'exore'); ?></button>
    </div>
</div>
