<?php
	
/**
 * Functions for registering custom post types
 */

function custom_post_type_3dMRI() {
    $labels = array(
        'name'                => _x( '3DMRIs', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( '3DMRI', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( '3DMRIs', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent 3DMRI:', 'text_domain' ),
        'all_items'           => __( 'All 3DMRIs', 'text_domain' ),
        'view_item'           => __( 'View 3DMRI', 'text_domain' ),
        'add_new_item'        => __( 'Add New 3DMRI', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'edit_item'           => __( 'Edit 3DMRI', 'text_domain' ),
        'update_item'         => __( 'Update 3DMRI', 'text_domain' ),
        'search_items'        => __( 'Search 3DMRIs', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( '3DMRIs', 'text_domain' ),
        'description'         => __( 'Post Type Description', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'post_tag','category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( '3DMRIs', $args );
}
add_action( 'init', 'custom_post_type_3DMRI', 0 );

function custom_post_type_surgical() {
    $labels = array(
        'name'                => _x( 'Surgical Animations', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Surgical Animation', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Surgical Animations', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Surgical Animation:', 'text_domain' ),
        'all_items'           => __( 'All Surgical Animations', 'text_domain' ),
        'view_item'           => __( 'View Surgical Animation', 'text_domain' ),
        'add_new_item'        => __( 'Add New Surgical Animation', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'edit_item'           => __( 'Edit Surgical Animation', 'text_domain' ),
        'update_item'         => __( 'Update Surgical Animation', 'text_domain' ),
        'search_items'        => __( 'Search Surgical Animations', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'Surgical Animations', 'text_domain' ),
        'description'         => __( 'Post Type Description', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'post_tag','category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'Surgical Animations', $args );
}
add_action( 'init', 'custom_post_type_surgical', 0 );

function custom_post_type_testimonal() {
    $labels = array(
        'name'                => _x( 'Testimonals', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Testimonal', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Testimonals', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Testimonal:', 'text_domain' ),
        'all_items'           => __( 'All Testimonals', 'text_domain' ),
        'view_item'           => __( 'View Testimonal', 'text_domain' ),
        'add_new_item'        => __( 'Add New Testimonal', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'edit_item'           => __( 'Edit Testimonal', 'text_domain' ),
        'update_item'         => __( 'Update Testimonal', 'text_domain' ),
        'search_items'        => __( 'Search Testimonals', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'Testimonals', 'text_domain' ),
        'description'         => __( 'Post Type Description', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'post_tag','category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'Testimonals', $args );
}
add_action( 'init', 'custom_post_type_testimonal', 0 );
?>