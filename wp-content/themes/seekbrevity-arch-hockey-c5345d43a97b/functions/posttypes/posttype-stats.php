<?php
/*
Thunder Bolt 2 functions and definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Stats Post Type
@package Thunder_Bolt_2

TABLE OF CONTENTS: 
1.0 - Register Stats Post Type 
2.0 - Register Stats Categories
*/
	
//1.0 - Register Stats Type 
add_action( 'init', 'stats_init', 0 );
function stats_init() {
	$labels = array(
		'name'                => _x( 'Stats', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Stats', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Stats', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Stats:', 'text_domain' ),
		'all_items'           => __( 'All Stats', 'text_domain' ),
		'view_item'           => __( 'View Stats', 'text_domain' ),
		'add_new_item'        => __( 'Add New Stats', 'text_domain' ),
		'add_new'             => __( 'Add New Stats', 'text_domain' ),
		'edit_item'           => __( 'Edit Stats', 'text_domain' ),
		'update_item'         => __( 'Update Stats', 'text_domain' ),
		'search_items'        => __( 'Search Stats', 'text_domain' ),
		'not_found'           => __( 'Stats Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Stats Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Stats', 'text_domain' ),
		'description'         => __( 'Stats Description', 'text_domain' ),
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
		'menu_icon'			  		=> 'dashicons-chart-area',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'supports' => array('title','editor','thumbnail','revisions'),
	);
	register_post_type( 'Stats', $args );
}
