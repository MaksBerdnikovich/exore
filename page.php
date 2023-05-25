<?php

/**
 * Include Header
 */
get_header();


/**
 * Include Title Area Section
 */
get_template_part('template-parts/pages-sections/title-area');


/**
 * Include Single Page Section
 */

?>

<section class="site-section section--gap-l">
    <div class="container">
        <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );
            endwhile;
        ?>
    </div>
</section>

<?php
/**
 * Include Footer
 */
get_footer();

