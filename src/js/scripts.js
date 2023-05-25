(function($) {

    'use strict';

    const getCookie = (name) => {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    };

    const clearForms = () => {
        const $requestForm = $('#requestForm')
        const $contactForm = $('#contactForm')

        $('input, textarea', $requestForm).each((i, el) => {
            $(el).val('')
            $(el).parents('.input-group').removeClass('error')
        })

        $('input', $contactForm).each((i, el) => {
            $(el).prop('checked', false)
            $(el).parents('.input-group').removeClass('error')
        })

        $('input[name=name]', $requestForm).attr('required', true);
        $('input[name=phone_email]', $requestForm).attr('required', true);

        $('input[type=file]').closest('.file-group').removeClass('show');
        $('[data-contact-form-trigger]').addClass('disabled');

        $('input[name="g-recaptcha-response"]').remove()
    }

    const error = ($el) => {
        $el.attr('required');
        $el.parents('.input-group').addClass('error');
    }

    const valid = ($el) => {
        $el.removeAttr('required');
        $el.parents('.input-group').removeClass('error');
    }

    const functions = {

        // Initialization the functions
        init: function() {
            functions.preloader();
            functions.fixedHeader();
            functions.mobileToggle();
            functions.fancybox();
            functions.modals();
            functions.formElements();
            functions.scrollAnimations();
            functions.carousels();
            functions.readMore();
            functions.cookiesConsent();
            functions.sendForms();
        },

        // Page preloader hide
        preloader: function() {
            setTimeout(() => {
                document.body.dataset.loading = "false";
            }, 250);
        },

        fixedHeader: () => {
            const setFixed = () => {
                const sticky = $('[data-sticky]')
                $(window).scrollTop() > 0 ? sticky.addClass('fixed') : sticky.removeClass('fixed')
            }

            setFixed()
            $(window).scroll(() => setFixed())
        },

        mobileToggle: () => {
            const $toggle = $('.header__menu-toggle')
            const $nav = $('.header__nav')

            $toggle.on('click', () => {
                $toggle.toggleClass('open')
                $nav.toggleClass('open')
            })

            $nav.on('click', 'li.menu-item-has-children > a', (e) => {
                e.preventDefault();
                const target = e.target;
                $(target).next('.sub-menu').slideDown()
                $(target).addClass('child-open')
            })

            $nav.on('click', 'li.menu-item-has-children > a.child-open', (e) => {
                e.preventDefault();
                const target = e.target;
                $(target).next('.sub-menu').slideUp()
                $(target).removeClass('child-open')
            })

            $(document).on('click', (e) => {
                const target = e.target;
                if (!$(target).is('.header') &&
                    !$(target).parents().is('.header') &&
                    $nav.hasClass( 'open' )
                ) {
                    $toggle.toggleClass('open')
                    $nav.toggleClass('open')
                }
            });
        },

        fancybox: function () {
            Fancybox.bind("[data-fancybox], .data-fancybox > a", {
                Thumbs: false,
                Toolbar : false,
                Hash: false,
                closeButton: true,
                Html: {
                    video: {
                        autoplay: true,
                    },
                },
                on: {
                    shouldClose: (fancybox, slide) => clearForms()
                },
            });
        },

        formElements: () => {
            // selectric.js
            try {
                $('[data-select]').selectric();

                $('[data-select-deposit]').selectric({
                    optionsItemBuilder: function(itemData, element, index) {
                        return `<img src="dist/images/pays/${itemData.value}.png" alt="${itemData.text}"/>
                                <span>${itemData.text}</span>`
                    },
                    labelBuilder: function(currItem) {
                        return `<i><img src="dist/images/pays/${currItem.value}.png" alt="${currItem.text}"/></i>
                                <span class="title-h6">${currItem.text}</span></div>`
                    },
                });
            } catch (e){}

            try {
                $('input[type=file]').on('change', function(){
                    const file = this.files[0];
                    $(this).closest('.file-group').addClass('show');
                    $(this).closest('.file-group').find('.file-group__txt > b').html(file.name);
                });

                $('.file-clear').on('click', () => {
                    $('input[type=file]').val()
                })
            } catch (e){}
        },

        scrollAnimations: () => {
            AOS.init({
                disable: 'mobile',
                duration: 700,
                easing: 'ease-in-sine',
                delay: 50,
                once: 'true'
            });
        },

        carousels: () => {
            $('[data-reviews-carousel]').owlCarousel({
                loop: true,
                center: true,
                autoWidth:true,
                //autoHeight: true,
                margin: 130,
                nav: true,
                dots: true,
                responsive: {
                    0: {
                        items: 1,
                        margin: 30,
                        center: false,
                        autoWidth: false,
                    },
                    768: {
                        items: 3,
                    },
                },
                onInitialize: () => {
                    setTimeout(() => {
                        $('.owl-dots').appendTo($('.owl-nav'))
                    }, 200)
                }
            })

            $('[data-cases-carousel]').owlCarousel({
                loop: true,
                autoWidth: true,
                autoHeight: true,
                margin: 30,
                nav: true,
                dots: true,
                responsive: {
                    0: {
                        items: 1,
                        autoWidth: false,
                    },
                    768: {
                        items: 3,
                    },
                },
                onInitialize: () => {
                    setTimeout(() => {
                        $('.owl-dots').appendTo($('.owl-nav'))
                    }, 200)
                }
            })
        },

        readMore: () => {
            $('[data-more-triger]').on('click', function(e) {
                e.preventDefault();
                $(this).hide()
                $(this).prev('[data-more-block]').removeClass('text--hidden');
            })
        },

        cookiesConsent: () => {
            const $consent = $('.cookies-consent');
            const getCookieConsent = getCookie("exore_cookies_consent");

            if (!getCookieConsent) {
                $consent.addClass('visible')
            }

            $consent.on('click', 'button.set-cookie', () => {
                document.cookie = 'exore_cookies_consent=1; path=/;';
                $consent.remove();
            });
        },

        modals: () => {
            const $modal = $('[data-modal]')
            const $openModal = $('[data-modal-opened]')
            const id = $openModal.attr('id')

            if ($openModal.length > 0) {
                Fancybox.show([{
                    src: `#${id}`,
                    type: "inline",
                    dragToClose: false
                }]);
            }

            $modal.on('click', '[data-modal-close]', function(e) {
                Fancybox.close();
            });
        },

        sendForms: () => {
            $('[data-modal-trigger]').on('click', function() {
                const $form = $('#requestForm')
                const title = $(this).data('modal-title');
                const place = $(this).data('modal-trigger');

                $('#modalSendTitle').html(title)
                $form.find('input[name=place]').val(place);
                $form.find('input[name=utm]').val(window.location);
            });

            $('form#contactForm').on('change', function () {
                if (
                    $('input[name="wireframes"]').is(':checked') &&
                    $('input[name="activity"]').is(':checked') &&
                    $('input[name="budget"]').is(':checked')
                ){
                    $('[data-contact-form-trigger]').removeClass('disabled')
                }
            })

            $('form#requestForm').on('click', 'button', function(e) {
                e.preventDefault();

                const $form = $(this).closest('form');
                const $name = $('input[name=name]', $form);
                const $phone_email = $('input[name=phone_email]', $form);

                // check name
                validator.isEmpty($name.val()) ? error($name) : valid($name);

                // check phone/email
                !validator.isEmail($phone_email.val()) && !validator.isMobilePhone($phone_email.val()) ? error($phone_email) : valid($phone_email);

                let required = 0
                $('input', $form).each((i, el) => {
                    if ($(el).attr('required')) required++
                })

                if (required === 0) {
                    const site_key = '6LfxajImAAAAAOGh2VD-oHVLy28dbD7nRNy6YBqV';
                    grecaptcha.ready(function() {
                        grecaptcha.execute(site_key, {action: 'submit'}).then(function(token) {
                            if (token) {
                                $('form#requestForm').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');

                                const form = $('form#requestForm');
                                const contactForm = $('form#contactForm');
                                const action = form[0].action;
                                const formData = new FormData(form[0]);

                                formData.append( 'type_lead', 'exore.pro');

                                if ($(contactForm).length > 0) {
                                    $(contactForm).serializeArray().forEach(el => {
                                        formData.append(el.name, el.value);
                                    });
                                }

                                $.ajax({
                                    type: 'post',
                                    url: action,
                                    data: formData,
                                    contentType: false,
                                    processData: false,
                                    success: function (response) {
                                        Fancybox.close();

                                        if (response === 'done') {
                                            Fancybox.show([{src: '#modalConfirm', closeButton: false}]);
                                        } else {
                                            $('[data-error-message]').html(response)
                                            Fancybox.show([{src: '#modalError', closeButton: false}]);
                                        }
                                    },
                                });
                            }
                        });
                    });
                }
            })
        },

    };

    // Run the main function
    $(function() {
        functions.init();
    });

})(jQuery);
