<?php
/*
Thunder Bolt 2 functions and definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Bio Post Type
@package Thunder_Bolt_2

TABLE OF CONTENTS: 
1.0 - Register Bio Post Type 
2.0 - Register Bio Categories
3.0 - Order Bio Queries Alphabetically
4.0 - Order Events Post Nav Alphabetically
*/
	
//1.0 - Register Bio Type 
add_action( 'init', 'bios_init', 0 );
function bios_init() {
	$labels = array(
		'name'                => _x( 'Bios', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Bio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Bio', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Bio:', 'text_domain' ),
		'all_items'           => __( 'All Bios', 'text_domain' ),
		'view_item'           => __( 'View Bio', 'text_domain' ),
		'add_new_item'        => __( 'Add New Bio', 'text_domain' ),
		'add_new'             => __( 'Add New Bio', 'text_domain' ),
		'edit_item'           => __( 'Edit Bio', 'text_domain' ),
		'update_item'         => __( 'Update Bio', 'text_domain' ),
		'search_items'        => __( 'Search Bios', 'text_domain' ),
		'not_found'           => __( 'Bio Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Bio Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Bio', 'text_domain' ),
		'description'         => __( 'Bio Description', 'text_domain' ),
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
		'menu_icon'			  => 'dashicons-id-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'supports' => array('title','editor','thumbnail','revisions'),
	);
	register_post_type( 'bios', $args );
}

//2.0 - Register Bio Categories 	
add_action( 'init', 'bio_cat', 0 );
function bio_cat() {
	$labels = array(
		'name'                       => _x( 'Bio Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Bio Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Bio Category', 'text_domain' ),
		'all_items'                  => __( 'All Bio Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Bio Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Bio Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Bio Category', 'text_domain' ),
		'add_new_item'               => __( 'Add Bio Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Bio Category', 'text_domain' ),
		'update_item'                => __( 'Update Bio Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'text_domain' ),
		'search_items'               => __( 'Search Bio Categories', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Bio Categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Bio Categories', 'text_domain' ),
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
	register_taxonomy( 'bio-category', array( 'bios' ), $args );
}   


//3.0 - Order Bio Queries Alphabetically.        
add_action('pre_get_posts', 'bios_pre_get_posts');
function bios_pre_get_posts( $query )
{
	if( is_admin() ) { return $query; }
    if( isset($query->query_vars['post_type']) && $query->is_post_type_archive('bios') || $query->is_tax('bio-category')) { 
    	$query->set('orderby', 'title');    
    	$query->set('order', 'ASC'); 
    }   
	return $query;
}


//4.0 - Order Events Post Nav Alphabetically.
add_filter('get_next_post_sort',   'bios_next_post_sort');
add_filter('get_next_post_where',  'bios_next_post_where');
add_filter('get_previous_post_sort',  'bios_previous_post_sort');
add_filter('get_previous_post_where', 'bios_previous_post_where');
function bios_previous_post_where($where) {
	if(is_singular('bios')) {
	  global $post, $wpdb;
	  return $wpdb->prepare("WHERE p.post_title < '%s' AND p.post_type = 'bios' AND p.post_status = 'publish'",$post->post_title);
	}
	return $where;
}
function bios_next_post_where($where) {
	if(is_singular('bios')) {
	  global $post, $wpdb;
	  return $wpdb->prepare("WHERE p.post_title > '%s' AND p.post_type = 'bios' AND p.post_status = 'publish'",$post->post_title);
	}
	return $where;
}
function bios_previous_post_sort($sort) {
	if(is_singular('bios')) {
	  $new_sort = "ORDER BY p.post_title DESC LIMIT 1";
	  return $new_sort;
	}
	return $sort;
}
function bios_next_post_sort($sort) {
	if(is_singular('bios')) {
	  $new_sort = "ORDER BY p.post_title ASC LIMIT 1";
	  return $new_sort;
	}
	return $sort;
}

