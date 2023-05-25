<?php
/**
 * exore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package exore
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function exore_setup()
{
	/*
	* Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	* If you're building a theme based on exore, use a find and replace
	* to change 'exore' to the name of your theme in all the template files.
	*/
	load_theme_textdomain('exore', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	* Let WordPress manage the document title.
	* By adding theme support, we declare that this theme does not use a
	* hard-coded <title> tag in the document head, and expect WordPress to
	* provide it for us.
	*/
	add_theme_support('title-tag');

	/*
	* Enable support for Post Thumbnails on posts and pages.
	*
	* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	*/
	add_theme_support('post-thumbnails');
    add_image_size( 'post-grid-thumbnail', 540, 360, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(array(
        'main_menu' => esc_html__('Main Menu', 'exore'),
        'footer_menu' => esc_html__('Footer Menu', 'exore'),
        'copyright_menu' => esc_html__('Copyright Menu', 'exore'),
	));
}

add_action('after_setup_theme', 'exore_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function exore_widgets_init()
{
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'exore'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Add widgets here.', 'exore'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>', 'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}

add_action('widgets_init', 'exore_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function exore_scripts()
{
	wp_enqueue_style('exore-style', get_stylesheet_uri(), array(), _S_VERSION);

	// Enqueue styles
	wp_enqueue_style('exore-styles-common', get_stylesheet_directory_uri() . '/dist/css/style.min.css', array(), _S_VERSION);
	wp_enqueue_style('exore-styles', get_stylesheet_directory_uri() . '/dist/css/style.css', array(), _S_VERSION);

	// Enqueue scripts
	wp_enqueue_script('exore-scripts-common', get_stylesheet_directory_uri() . '/dist/js/scripts.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('exore-scripts', get_stylesheet_directory_uri() . '/dist/js/scripts.js', array('jquery'), _S_VERSION, true);

	wp_localize_script('jquery', 'ajax', array(
		'nonce' => wp_create_nonce('ajax_nonce'), 'url' => admin_url('admin-ajax.php'),
	));

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'exore_scripts');

/**
 * Register upload custom mime types
 */
function exore_custom_upload_mimes($upload_mimes)
{
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';

    return $upload_mimes;
}

add_filter('upload_mimes', 'exore_custom_upload_mimes', 10, 1);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Init Theme Options
 */
if( function_exists('acf_add_options_page') )
{
	acf_add_options_page(array(
		'page_title'    => 'Theme Options',
		'menu_title'    => 'Theme Options',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => true
	));

	acf_add_options_sub_page(array(
		'page_title'    => 'General Options',
		'menu_title'    => 'General',
		'parent_slug'   => 'theme-general-settings',
	));
}

/**
 * Exore helpers methods
 */
function get_images_dir($path)
{
    return get_template_directory_uri() . '/dist/images/' . $path;
}

function is_pagination_exit()
{
    return !empty(get_previous_posts_link()) || !empty(get_next_posts_link());
}

/**
 * Exore Post views
 */
function get_post_views($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return '0';
    }
    return $count;
}

function set_post_views($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

/**
 * Exore Auto Updates disable
 * work with
 * define( 'WP_AUTO_UPDATE_CORE', false ) in wp-config.php
 */

add_filter('auto_update_plugin', '__return_false');
add_filter('auto_update_theme', '__return_false');

