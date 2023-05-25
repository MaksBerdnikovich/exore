<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package exore
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function exore_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'exore_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function exore_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'exore_pingback_header' );

/**
 * Add a custom pages templates
 */
function exore_custom_templates( $templates, $wp_theme, $post, $post_type ) {
	if ( 'page' === $post_type ) {
		$templates['templates/template-main.php'] = 'Main Page';
		$templates['templates/template-packages.php'] = 'Packages';
	}

	return $templates;
}
add_filter( 'theme_templates', 'exore_custom_templates', 10, 4 );
