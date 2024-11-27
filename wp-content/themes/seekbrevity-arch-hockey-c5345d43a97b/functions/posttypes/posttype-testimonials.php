<?php
/*
Thunder Bolt 2 functions and definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Testimonial Post Type
@package Thunder_Bolt_2

TABLE OF CONTENTS: 
1.0 - Register Testimonial Post Type
*/

//1.0 - Register Testimonial Post Type	
add_action( 'init', 'testimonials_init', 0 );
function testimonials_init() {
	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Testimonial', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Testimonial:', 'text_domain' ),
		'all_items'           => __( 'All Testimonials', 'text_domain' ),
		'view_item'           => __( 'View Testimonial', 'text_domain' ),
		'add_new_item'        => __( 'Add New Testimonial', 'text_domain' ),
		'add_new'             => __( 'Add New Testimonial', 'text_domain' ),
		'edit_item'           => __( 'Edit Testimonial', 'text_domain' ),
		'update_item'         => __( 'Update Testimonial', 'text_domain' ),
		'search_items'        => __( 'Search Testimonials', 'text_domain' ),
		'not_found'           => __( 'Testimonial Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Testimonial Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Testimonial', 'text_domain' ),
		'description'         => __( 'Testimonial Description', 'text_domain' ),
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
		'menu_icon'			  => 'dashicons-format-quote',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'supports' => array('title','editor','thumbnail','revisions'),
	);
	register_post_type( 'testimonials', $args );
}