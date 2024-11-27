<?php
/*
Thunder Bolt 2 functions and definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Case Study Post Type
@package Thunder_Bolt_2

TABLE OF CONTENTS: 
1.0 - Register Case Study Post Type
2.0 - Register Case Study Categories
*/

//1.0 - Register Case Study Post Type 	
add_action( 'init', 'casestudies_init', 0 );
function casestudies_init() {
	$labels = array(
		'name'                => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Case Study', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Case Study', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Case Study:', 'text_domain' ),
		'all_items'           => __( 'All Case Studies', 'text_domain' ),
		'view_item'           => __( 'View Case Study', 'text_domain' ),
		'add_new_item'        => __( 'Add New Case Study', 'text_domain' ),
		'add_new'             => __( 'Add New Case Study', 'text_domain' ),
		'edit_item'           => __( 'Edit Case Study', 'text_domain' ),
		'update_item'         => __( 'Update Case Study', 'text_domain' ),
		'search_items'        => __( 'Search Case Studies', 'text_domain' ),
		'not_found'           => __( 'Case Study Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Case Study Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Case Study', 'text_domain' ),
		'description'         => __( 'Case Study Description', 'text_domain' ),
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
		'menu_icon'			  => 'dashicons-analytics',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'supports' => array('title','editor','thumbnail','revisions'),
	);
	register_post_type( 'case-studies', $args );
}

//2.0 - Register Case Study Categories 	
add_action( 'init', 'casestudies_cat', 0 );
function casestudies_cat() {
	$labels = array(
		'name'                       => _x( 'Case Study Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Case Study Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Case Study Category', 'text_domain' ),
		'all_items'                  => __( 'All Case Study Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Case Study Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Case Study Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Case Study Category', 'text_domain' ),
		'add_new_item'               => __( 'Add Case Study Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Case Study Category', 'text_domain' ),
		'update_item'                => __( 'Update Case Study Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'text_domain' ),
		'search_items'               => __( 'Search Case Study Categories', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Case Study Categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Case Study Categories', 'text_domain' ),
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
	register_taxonomy( 'case-studies-category', array( 'case-studies' ), $args );
}