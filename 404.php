<?php

/**
 * Include Header
 */
get_header();


/**
 * Include Title Area Section
 */

$args['title'] = get_field('not_found_page_title', 'option');
$args['hide_breadcrumb'] = true;
$args['centered'] = true;

get_template_part('template-parts/pages-sections/title-area', '', $args);

?>

<section class="site-section section--gap-l not-found">
    <div class="container">
        <div class="not-found__wrap">
            <p class="styled-subtitle">
                <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try return to start page?', 'exore' ); ?>
            </p>

            <a href="<?= esc_url(home_url('/'))?>" class="btn btn--primary btn--medium not-found__btn">
                <i class="icon-arrow"></i>
                <span><?php esc_html_e( 'Return', 'exore' ); ?></span>
            </a>
        </div>


        <?php //get_search_form(); ?>
    </div>
</section>

<?php

/**
 * Include Footer
 */

get_footer();
