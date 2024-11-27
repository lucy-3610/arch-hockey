<?php

/**
 * Functions for registering custom post types
 */


// ------------------------------
// Begin Seniors Post Type
// ------------------------------
function custom_post_type_seniors()
{
    $labels = array(
        'name'                => _x('Seniors', 'Post Type General Name', 'text_domain'),
        'singular_name'       => _x('Senior', 'Post Type Singular Name', 'text_domain'),
        'menu_name'           => __('Seniors', 'text_domain'),
        'parent_item_colon'   => __('Parent Senior:', 'text_domain'),
        'all_items'           => __('All Seniors', 'text_domain'),
        'view_item'           => __('View Seniors', 'text_domain'),
        'add_new_item'        => __('Add New Senior', 'text_domain'),
        'add_new'             => __('Add New Senior', 'text_domain'),
        'edit_item'           => __('Edit Senior', 'text_domain'),
        'update_item'         => __('Update Senior', 'text_domain'),
        'search_items'        => __('Search Seniors', 'text_domain'),
        'not_found'           => __('Not found', 'text_domain'),
        'not_found_in_trash'  => __('Not found in Trash', 'text_domain'),
    );
    $args = array(
        'label'               => __('Seniors', 'text_domain'),
        'description'         => __('Post Type Description', 'text_domain'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'taxonomies'          => array('category'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-megaphone',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type('Senior', $args);
}
add_action('init', 'custom_post_type_seniors', 0);

// Senior - Admin Title Text
function custom_senior_title($input)
{
    global $post_type;

    if (is_admin() && 'Add title' == $input && 'senior' == $post_type)
        return 'Enter Senior Name';

    return $input;
}
add_filter('gettext', 'custom_senior_title');
// ------------------------------
// End Seniors Post Type
// ------------------------------



// ------------------------------
// Begin Sponsors Post Type
// ------------------------------
function custom_post_type_sponsors()
{
    $labels = array(
        'name'                => _x('Sponsors', 'Post Type General Name', 'text_domain'),
        'singular_name'       => _x('Sponsor', 'Post Type Singular Name', 'text_domain'),
        'menu_name'           => __('Sponsors', 'text_domain'),
        'parent_item_colon'   => __('Parent Sponsor:', 'text_domain'),
        'all_items'           => __('All Sponsors', 'text_domain'),
        'view_item'           => __('View Sponsors', 'text_domain'),
        'add_new_item'        => __('Add New Sponsor', 'text_domain'),
        'add_new'             => __('Add New Sponsor', 'text_domain'),
        'edit_item'           => __('Edit Sponsor', 'text_domain'),
        'update_item'         => __('Update Sponsor', 'text_domain'),
        'search_items'        => __('Search Sponsors', 'text_domain'),
        'not_found'           => __('Not found', 'text_domain'),
        'not_found_in_trash'  => __('Not found in Trash', 'text_domain'),
    );
    $args = array(
        'label'               => __('Sponsors', 'text_domain'),
        'description'         => __('Post Type Description', 'text_domain'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'taxonomies'          => array('category'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-site-alt3',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type('Sponsor', $args);
}
add_action('init', 'custom_post_type_sponsors', 0);

// Sponsor - Admin Title Text
function custom_sponsor_title($input)
{
    global $post_type;

    if (is_admin() && 'Add title' == $input && 'sponsor' == $post_type)
        return 'Enter Sponsor Name';

    return $input;
}
add_filter('gettext', 'custom_sponsor_title');
// ------------------------------
// End Sponsors Post Type
// ------------------------------



// ------------------------------
// Begin Image Gallery Post Type
// ------------------------------
function custom_post_type_image_gallery()
{
    $labels = array(
        'name'                => _x('Image Gallery', 'Post Type General Name', 'text_domain'),
        'singular_name'       => _x('Image', 'Post Type Singular Name', 'text_domain'),
        'menu_name'           => __('Image Gallery', 'text_domain'),
        'parent_item_colon'   => __('Parent Image:', 'text_domain'),
        'all_items'           => __('All Images', 'text_domain'),
        'view_item'           => __('View Images', 'text_domain'),
        'add_new_item'        => __('Add New Image', 'text_domain'),
        'add_new'             => __('Add New Image', 'text_domain'),
        'edit_item'           => __('Edit Image', 'text_domain'),
        'update_item'         => __('Update Image', 'text_domain'),
        'search_items'        => __('Search Images', 'text_domain'),
        'not_found'           => __('Not found', 'text_domain'),
        'not_found_in_trash'  => __('Not found in Trash', 'text_domain'),
    );
    $args = array(
        'label'               => __('Images', 'text_domain'),
        'description'         => __('Post Type Description', 'text_domain'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'taxonomies'          => array('category'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-images-alt2',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type('Image', $args);
}
add_action('init', 'custom_post_type_image_gallery', 0);

// Image Gallery - Admin Title Text
function custom_image_gallery_title($input)
{
    global $post_type;

    if (is_admin() && 'Add title' == $input && 'image' == $post_type)
        return 'Enter Image Name';

    return $input;
}
add_filter('gettext', 'custom_image_gallery_title');
// ------------------------------
// End Image Gallery Post Type
// ------------------------------



// // ------------------------------
// // Begin Company Post Type
// // ------------------------------

// // Custom Taxonomy
// function themes_taxonomy() {  
//     register_taxonomy(  
//         'Company',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
//         'companies',        //post type name
//         array(  
//             'hierarchical' => true,  
//             'label' => 'Companies',  //Display name
//             'query_var' => true,
//             'rewrite' => array(
//                 'slug' => 'Company', // This controls the base slug that will display before each term
//                 'with_front' => false // Don't display the category base before 
//             )
//         )  
//     );  
// }  
// add_action( 'init', 'themes_taxonomy');




// // Custom Post Type - Companies
// function custom_post_type_companies() {
//     $labels = array(
//         'name'                => _x( 'Companies', 'Post Type General Name', 'text_domain' ),
//         'singular_name'       => _x( 'Company Page', 'Post Type Singular Name', 'text_domain' ),
//         'menu_name'           => __( 'Companies', 'text_domain' ),
//         'parent_item_colon'   => __( 'Parent Page:', 'text_domain' ),
//         'all_items'           => __( 'All Pages', 'text_domain' ),
//         'view_item'           => __( 'View Page', 'text_domain' ),
//         'add_new_item'        => __( 'Add New Page', 'text_domain' ),
//         'add_new'             => __( 'Add New Page', 'text_domain' ),
//         'edit_item'           => __( 'Edit Page', 'text_domain' ),
//         'update_item'         => __( 'Update Page', 'text_domain' ),
//         'search_items'        => __( 'Search Page', 'text_domain' ),
//         'not_found'           => __( 'Not found', 'text_domain' ),
//         'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
//     );
//     $args = array(
//         'label'               => __( 'Companies', 'text_domain' ),
//         'description'         => __( 'Post Type Description', 'text_domain' ),
//         'labels'              => $labels,
//         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'page-attributes', 'custom-fields' ),
//         'taxonomies'          => array( 'company'),
//         'hierarchical'        => true,
//         'public'              => true,
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'show_in_nav_menus'   => true,
//         'show_in_admin_bar'   => true,
//         'menu_position'       => 20,
//         'menu_icon'           => 'dashicons-location-alt',
//         'can_export'          => true,
//         //'rewrite'             => array('slug' => false, 'with_front' => false),
//         'has_archive'       => 'company',
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         'capability_type'     => 'page',
//     );
//     register_post_type( 'companies', $args );
// }
// add_action( 'init', 'custom_post_type_companies', 0 );




// // Admin Screen: Filter By Taxonomies
// function filter_pages_by_taxonomies( $post_type, $which ) {
// 	// Apply this only on a specific post type
// 	if ( 'companies' !== $post_type )
// 		return;

// 	// A list of taxonomy slugs to filter by
// 	$taxonomies = array( 'company' );

// 	foreach ( $taxonomies as $taxonomy_slug ) {

// 		// Retrieve taxonomy data
// 		$taxonomy_obj = get_taxonomy( $taxonomy_slug );
// 		$taxonomy_name = $taxonomy_obj->labels->name;

// 		// Retrieve taxonomy terms
// 		$terms = get_terms( $taxonomy_slug );

// 		// Display filter HTML
// 		echo "<select name='{$taxonomy_slug}' id='{$taxonomy_slug}' class='postform'>";
// 		echo '<option value="">' . sprintf( esc_html__( 'Show All %s', 'text_domain' ), $taxonomy_name ) . '</option>';
// 		foreach ( $terms as $term ) {
// 			printf(
// 				'<option value="%1$s" %2$s>%3$s (%4$s)</option>',
// 				$term->slug,
// 				( ( isset( $_GET[$taxonomy_slug] ) && ( $_GET[$taxonomy_slug] == $term->slug ) ) ? ' selected="selected"' : '' ),
// 				$term->name,
// 				$term->count
// 			);
// 		}
// 		echo '</select>';
// 	}

// }
// add_action( 'restrict_manage_posts', 'filter_pages_by_taxonomies' , 10, 2);




// // Allow Pagination: For events inside the companies CPT. It must use paged in the query.
// function events_disable_redirect_canonical( $redirect_url ) {
//     if ( is_paged() && is_singular() ) $redirect_url = false; 
//     return $redirect_url; 
// }
// add_filter( 'redirect_canonical', 'events_disable_redirect_canonical' );
// // ------------------------------
// // End Company Post Type
// // ------------------------------
