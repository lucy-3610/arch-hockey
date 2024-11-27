<?php
/*
Thunder Bolt 2 functions and definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Service Post Type
@package Thunder_Bolt_2

TABLE OF CONTENTS: 
1.0 - Register Service Post Type
2.0 - Register Service Categories
*/

//1.0 - Register Service Post Type	
add_action( 'init', 'services_init', 0 );
function services_init() {
	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Service', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Service:', 'text_domain' ),
		'all_items'           => __( 'All Services', 'text_domain' ),
		'view_item'           => __( 'View Service', 'text_domain' ),
		'add_new_item'        => __( 'Add New Service', 'text_domain' ),
		'add_new'             => __( 'Add New Service', 'text_domain' ),
		'edit_item'           => __( 'Edit Service', 'text_domain' ),
		'update_item'         => __( 'Update Service', 'text_domain' ),
		'search_items'        => __( 'Search Services', 'text_domain' ),
		'not_found'           => __( 'Service Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Service Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Service', 'text_domain' ),
		'description'         => __( 'Service Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( ),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-admin-tools',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'supports' => array('title','editor','thumbnail','revisions'),
	);
	register_post_type( 'services', $args );
}

//2.0 - Register Service Categories	
add_action( 'init', 'service_cat', 0 );
function service_cat() {
	$labels = array(
		'name'                       => _x( 'Service Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Service Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Service Category', 'text_domain' ),
		'all_items'                  => __( 'All Service Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Service Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Service Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Service Category', 'text_domain' ),
		'add_new_item'               => __( 'Add Service Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Service Category', 'text_domain' ),
		'update_item'                => __( 'Update Service Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'text_domain' ),
		'search_items'               => __( 'Search Service Categories', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Service Categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Service Categories', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'service-category', array( 'services' ), $args );
}