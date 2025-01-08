<?php

// All Functions

// Register Custom Bootstrap Nav Walker
function register_navwalker()
{
    require_once(__DIR__ . '/class-wp-bootstrap-navwalker.php');
}
add_action('after_setup_theme', 'register_navwalker');

function prefix_modify_nav_menu_args($args)
{
    return array_merge($args, array(
        'walker' => new WP_Bootstrap_Navwalker(),
    ));
}
add_filter('wp_nav_menu_args', 'prefix_modify_nav_menu_args');

function get_page_title_for_slug($page_slug)
{
    $page = get_page_by_path($page_slug, OBJECT);

    if (isset($page) && $page->post_status == 'publish')
        return $page->post_title;
    else
        return "";
}

// Declare new menu
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'secondary' => __('Secondary Menu'),
));

// Theme Enqueue
require_once(__DIR__ . '/functions/theme-enqueue.php');

// WordPress Overwrites
require_once(__DIR__ . '/functions/wp-overwrites.php');

// Custom Image Sizes
require_once(__DIR__ . '/functions/custom-image-sizes.php');

// Admin Enqueue
require_once(__DIR__ . '/functions/admin-enqueue.php');

// Advanced Custom Fields
require_once(__DIR__ . '/functions/advanced-custom-fields.php');

// Custom Post Types
//require_once( __DIR__ . '/functions/custom-post-types.php');

// Gravity Forms
require_once(__DIR__ . '/functions/gravity-forms.php');

// HubSpot
//require_once( __DIR__ . '/functions/hubspot.php');

// Mailchimp
//require_once( __DIR__ . '/functions/mailchimp.php');

// WP Store Locator
//require_once( __DIR__ . '/functions/wp-store-locator.php');

// URL Rewrites
require_once(__DIR__ . '/functions/url-rewrites.php');

// Gravity Forms License
define('GF_LICENSE_KEY', '038a92a0ef0114086c060018e80d700c');

//Enqueue scripts and styles
function bplate_scripts()
{
    // Font Awesome
    wp_enqueue_style('bplate-icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");


    //Enqueue Font Awesome 5 CSS
    wp_enqueue_style('bplate-fontawesome', "https://use.fontawesome.com/releases/v5.0.10/css/all.css");
}
add_action('wp_enqueue_scripts', 'bplate_scripts');

function my_enqueue_scripts() {
    // Enqueue your script
    // wp_enqueue_script( 'my-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true );
    wp_enqueue_script( 'my-custom-js', '/wp-content/themes/micro-template/assets/js/custom.js', array('jquery'), null, true );

    // Get ACF fields
    $season_id = get_field('season_id'); // ACF field for season_id
    $league_id = get_field('league_id'); // ACF field for league_id

    // Pass data to JavaScript
    wp_localize_script( 'my-custom-js', 'acfData', array(
        'season_id' => $season_id,
        'league_id' => $league_id,
    ));
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );
