<?php

/**
 * Include Header
 */

get_header();


/**
 * Include Service Hero Section
 */

get_template_part('template-parts/services-sections/service', 'hero');


/**
 * Include Service Advantages Section
 */

get_template_part('template-parts/services-sections/service', 'advantages');


/**
 * Include Service Process Section
 */

get_template_part('template-parts/services-sections/service', 'process');


/**
 * Include Service clients Section
 */
get_template_part('template-parts/pages-sections/our-clients');


/**
 * Include Service Case Section
 */
get_template_part('template-parts/services-sections/service', 'case');


/**
 * Include Service Request Section
 */
get_template_part('template-parts/services-sections/service', 'request');


/**
 * Include Footer
 */

get_footer();
