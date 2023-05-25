</div><!-- .content -->

<?php

$site_key = '6LfxajImAAAAAOGh2VD-oHVLy28dbD7nRNy6YBqV';

/**
* Include Footer Section
*/

get_template_part('template-parts/footer');


/**
 * Include Modals Section
 */

get_template_part('template-parts/modals');


/**
 * Include Cookies Consent
 */

get_template_part('template-parts/cookies-consent');

?>

</main><!-- .main-wrapper -->

<?php wp_footer(); ?>


<?php if (is_front_page()): ?>
<!-- Canvas Animation Script -->
<script>
    const canvas = document.getElementById("cnv");
    const ctx = canvas.getContext("2d");

    const col = function (x, y, r, g, b) {
        ctx.fillStyle = "rgb(" + r + "," + g + "," + b + ")";
        ctx.fillRect(x, y, 1, 1);
    }

    const R = function (x, y, t) {
        return (Math.floor(26 + 17 * Math.cos((x * x - y * y) / 300 + t)));
    }
    const G = function (x, y, t) {
        return (Math.floor(28 + 17 * Math.sin((x * x * Math.cos(t / 4) + y * y * Math.sin(t / 3)) / 300)));
    }
    const B = function (x, y, t) {
        return (Math.floor(33 + 17 * Math.sin(5 * Math.sin(t / 9) + ((x - 100) * (x - 100) + (y - 100) * (y - 100)) / 1100)));
    }

    let t = 0;
    const run = function () {
        for (x = 0; x <= 35; x++) {
            for (y = 0; y <= 35; y++) {
                col(x, y, R(x, y, t), G(x, y, t), B(x, y, t));
            }
        }
        t = t + 0.015;
        window.requestAnimationFrame(run);
    }
    run();
</script>
<!-- /Canvas Animation Script -->
<?php endif; ?>


<?php if (is_front_page() || get_post_type() === 'services'): ?>
<!-- Parallax Effect Script -->
<script>
    const p1 = document.querySelectorAll('.sphere-parallax');
    for (let i = 0; i < p1.length; i++){
        window.addEventListener('mousemove', function(e) {
            let x = e.clientX / window.innerWidth;
            let y = e.clientY / window.innerHeight;
            p1[i].style.transform = 'translate(-' + x * 10 + 'px, -' + y * 20 + 'px)';
        });
    }

    const p2 = document.querySelectorAll('.sphere-parallax-invert');
    for (let i = 0; i < p2.length; i++){
        window.addEventListener('mousemove', function(e) {
            let x = e.clientX / window.innerWidth;
            let y = e.clientY / window.innerHeight;
            p2[i].style.transform = 'translate(' + x * 10 + 'px, ' + y * 20 + 'px)';
        });
    }
</script>
<!-- /Parallax Effect Script -->
<?php endif; ?>

<!-- Google Recaptcha -->
<script src="https://www.google.com/recaptcha/api.js?render=<?= $site_key ?>"></script>
<!-- /Google Recaptcha -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript"> (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(57655039, "init", {clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true});
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/57655039" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
