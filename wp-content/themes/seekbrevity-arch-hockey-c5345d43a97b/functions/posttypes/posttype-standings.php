<?php
/*
Thunder Bolt 2 functions and definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Standings Post Type
@package Thunder_Bolt_2

TABLE OF CONTENTS: 
1.0 - Register Standings Post Type 
2.0 - Register Standings Categories
*/
	
//1.0 - Register Standings Type 
add_action( 'init', 'standings_init', 0 );
function standings_init() {
	$labels = array(
		'name'                => _x( 'Standings', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Standings', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Standings', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Standings:', 'text_domain' ),
		'all_items'           => __( 'All Standings', 'text_domain' ),
		'view_item'           => __( 'View Standings', 'text_domain' ),
		'add_new_item'        => __( 'Add New Standings', 'text_domain' ),
		'add_new'             => __( 'Add New Standings', 'text_domain' ),
		'edit_item'           => __( 'Edit Standings', 'text_domain' ),
		'update_item'         => __( 'Update Standings', 'text_domain' ),
		'search_items'        => __( 'Search Standings', 'text_domain' ),
		'not_found'           => __( 'Standings Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Standings Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Standings', 'text_domain' ),
		'description'         => __( 'Standings Description', 'text_domain' ),
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
		'menu_icon'			  		=> 'dashicons-list-view',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'supports' => array('title','editor','thumbnail','revisions'),
	);
	register_post_type( 'standings', $args );
}


/*

add_action( 'init', 'standings_division', 0 );
function standings_division() {
	$labels = array(
		'name'                       => _x( 'Divisions', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Divisions', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Divisions', 'text_domain' ),
		'all_items'                  => __( 'All Divisions', 'text_domain' ),
		'parent_item'                => __( 'Parent Division', 'text_domain' ),
		'parent_item_colon'          => __( 'Division:', 'text_domain' ),
		'new_item_name'              => __( 'New Division', 'text_domain' ),
		'add_new_item'               => __( 'Add Division', 'text_domain' ),
		'edit_item'                  => __( 'Edit Division', 'text_domain' ),
		'update_item'                => __( 'Update Division', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'text_domain' ),
		'search_items'               => __( 'Search Divisions', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Divisions', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Divisions', 'text_domain' ),
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
	register_taxonomy( 'standings-division', array( 'standings' ), $args );
}  


add_action( 'init', 'standings_session', 0 );
function standings_session() {
	$labels = array(
		'name'                       => _x( 'Sessions', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Sessions', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Sessions', 'text_domain' ),
		'all_items'                  => __( 'All Sessions', 'text_domain' ),
		'parent_item'                => __( 'Parent Session', 'text_domain' ),
		'parent_item_colon'          => __( 'Session:', 'text_domain' ),
		'new_item_name'              => __( 'New Session', 'text_domain' ),
		'add_new_item'               => __( 'Add Session', 'text_domain' ),
		'edit_item'                  => __( 'Edit Session', 'text_domain' ),
		'update_item'                => __( 'Update Session', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'text_domain' ),
		'search_items'               => __( 'Search Sessions', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Sessions', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Sessions', 'text_domain' ),
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
	register_taxonomy( 'standings-session', array( 'standings' ), $args );
} 
*/