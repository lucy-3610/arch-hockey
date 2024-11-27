<?php
/*
Thunder Bolt 2 functions and definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Events Post Type
@package Thunder_Bolt_2

TABLE OF CONTENTS: 
1.0 - Register Events Post Type
2.0 - Register Events Categories
3.0 - Timezone for the events (set to central time by default)
4.0 - Add columns in the "Events" section of the admin panel 
	4.1 - Add the post content to the custom columns
	4.2 - Makes registered columns sortable
5.0 - Order Event Queries By Start Date
6.0 - Order Events Post Nav By Date.
*/	

//1.0 - Register Events Post Type	
add_action( 'init', 'events_init', 0 );
function events_init() {
	$labels = array(
		'name'                => _x( 'Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Event', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Event:', 'text_domain' ),
		'all_items'           => __( 'All Events', 'text_domain' ),
		'view_item'           => __( 'View Event', 'text_domain' ),
		'add_new_item'        => __( 'Add New Event', 'text_domain' ),
		'add_new'             => __( 'Add New Event', 'text_domain' ),
		'edit_item'           => __( 'Edit Event', 'text_domain' ),
		'update_item'         => __( 'Update Event', 'text_domain' ),
		'search_items'        => __( 'Search Events', 'text_domain' ),
		'not_found'           => __( 'Event Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Event Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Event', 'text_domain' ),
		'description'         => __( 'Event Description', 'text_domain' ),
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
		'menu_icon'			  => 'dashicons-calendar',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'supports' => array('title','editor','thumbnail','revisions'),
	);
	register_post_type( 'events', $args );
}

//2.0 - Register Events Categories 	
add_action( 'init', 'event_cat', 0 );
function event_cat() {
	$labels = array(
		'name'                       => _x( 'Event Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Event Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Event Category', 'text_domain' ),
		'all_items'                  => __( 'All Event Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Event Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Event Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Event Category', 'text_domain' ),
		'add_new_item'               => __( 'Add Event Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Event Category', 'text_domain' ),
		'update_item'                => __( 'Update Event Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'text_domain' ),
		'search_items'               => __( 'Search Event Categories', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Event Categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Event Categories', 'text_domain' ),
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
	register_taxonomy( 'event-category', array( 'events' ), $args );
}  


//3.0 - Timezone for the events (set to central time by default)
date_default_timezone_set('America/Chicago');



//4.0 Add columns in the "Events" section of the admin panel 
add_filter( 'manage_edit-events_columns', 'brevity_custom_columns_head', 10 );    
function brevity_custom_columns_head( $defaults ) {
    unset( $defaults['date'] );
		// Registers Colums
    $defaults['start_date_time'] = __( 'Date & Time', 'brevity' );
    $defaults['event_venue'] = __( 'Event Venue', 'brevity' );
    return $defaults;
}

//4.1 - Add the post content to the custom columns
add_action( 'manage_events_posts_custom_column', 'brevity_custom_columns_content', 10, 2 );
function brevity_custom_columns_content( $column_name, $post_id ) {
  if ( 'start_date_time' == $column_name ) {
    $date = new DateTime(get_field('start_date_time', $post_id));
    echo  $date->format('F d, Y');
  }
  if ( 'event_venue' == $column_name ) {
    $venue = get_post_meta( $post_id, 'event_venue', true );
    echo $venue;
  }
}



//4.2 - Makes registered columns sortable
add_filter( 'manage_edit-events_sortable_columns', 'my_sortable_events_column' );
function my_sortable_events_column( $columns ) {
  $columns['start_date_time'] = 'start_date_time';
	$columns['event_venue'] = 'event_venue';
  return $columns;
}
add_filter( 'request', 'date_column_orderby' );
function date_column_orderby( $vars ) {
	if ( isset( $vars['orderby'] ) && 'start_date_time' == $vars['orderby'] ) {
    $vars = array_merge( $vars, array(
      'meta_key' => 'start_date_time',
      'orderby' => 'meta_value',
    ) );
  }
  return $vars;
}
add_filter( 'request', 'venue_column_orderby' );
function venue_column_orderby( $vars ) {
	if ( isset( $vars['orderby'] ) && 'event_venue' == $vars['orderby'] ) { 
    $vars = array_merge( $vars, array(
      'meta_key' => 'event_venue',
      'orderby' => 'meta_value',
    ) );
  }
  return $vars;
}



//5.0 - Order Event Queries By Start Date.      
add_action('pre_get_posts', 'events_pre_get_posts');
function events_pre_get_posts( $query )
{
	if( is_admin() ) { return $query; }
		$date_now = date('Y-m-d H:i:s');
    // Set Post Query's (post-types, meta_keys, orderby etc.)
    if( isset($query->query_vars['post_type']) && $query->is_post_type_archive('events') || $query->is_tax('event-category')) { 
    	$meta_query_args = array(
        array(
	        'key' => 'end_date_time',
	        'value' => $date_now,
	        'compare' => '>='
        )
			);
			$query->set('meta_query',$meta_query_args);
    	$query->set('orderby', 'meta_value');  
    	$query->set('meta_key', 'start_date_time');  
    	$query->set('order', 'ASC'); 
    }   
	return $query;
}




//6.0 - Order Events Post Nav By Date. 

// filters
add_filter('get_previous_post_join', 'events_post_join');
add_filter('get_next_post_join', 'events_post_join');
add_filter('get_previous_post_where', 'event_prev_post_where');
add_filter('get_next_post_where', 'event_next_post_where');
add_filter('get_previous_post_sort', 'event_prev_post_sort');
add_filter('get_next_post_sort', 'event_next_post_sort');

// join function
function events_post_join($join) {
	if(is_singular('events')) {
		global $wpdb;
		$new_join = " INNER JOIN $wpdb->postmeta AS pm ON pm.post_id = p.ID";
		return $new_join;
	}
	return $join;
}
// where function prev
function event_prev_post_where($w) {
	if(is_singular('events')) {
		global $wpdb, $post;	
		$prd = get_post_meta($post->ID, 'start_date_time', true);
		$new_w = $wpdb->prepare(" WHERE pm.meta_key = 'start_date_time' AND pm.meta_value < '$prd' AND p.post_type = 'events' AND p.post_status = 'publish'", $id, $name);
		return $new_w;
	}
	return $w;
}
// where function next
function event_next_post_where($w) {
	if(is_singular('events')) {
		global $wpdb, $post;
		$prd = get_post_meta($post->ID, 'start_date_time', true);
		$new_w = $wpdb->prepare(" WHERE pm.meta_key = 'start_date_time' AND pm.meta_value > '$prd' AND p.post_type = 'events' AND p.post_status = 'publish'", $id, $name);
		return $new_w;
	}
	return $w;
}
// sort function prev
function event_prev_post_sort($o) {
	if(is_singular('events')) {
		$new_o = "ORDER BY pm.meta_value DESC LIMIT 1";
		return $new_o;
	}
	return $o;
}
// sort function next
function event_next_post_sort($o) {
	if(is_singular('events')) {
		$new_o = "ORDER BY pm.meta_value ASC LIMIT 1";
		return $new_o;
	}
	return $o;
}
