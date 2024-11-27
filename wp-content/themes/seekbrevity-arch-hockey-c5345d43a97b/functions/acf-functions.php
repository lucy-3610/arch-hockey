<?php
/*
Thunder Bolt 2 - Functions and Definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

ACF Theme Functions
@package Thunder_Bolt_2
Updated Version: 1.0

TABLE OF CONTENTS: 
1.0 - Theme Options
	1.1 Theme Options
	1.2 Socail Settings
	1.3 Header Options
	1.4 Footer Options
	1.5 Sidebar Options
2.0 - Google Maps API Key
*/

//1.0 - Theme Options
if( function_exists('acf_add_options_page') ) {
 	
 	//1.1 Theme Options
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title' 	=> 'Theme Options',
		'redirect' 		=> false
	));
	
	//1.2 Socail Settings
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Settings',
		'menu_title' 	=> 'Social Settings',
		'parent_slug' 	=> $parent['menu_slug'],
	));
	
	//1.3 Header Options
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Options',
		'menu_title' 	=> 'Header Options',
		'parent_slug' 	=> $parent['menu_slug'],
	));
	
	//1.4 Footer Options
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Options',
		'menu_title' 	=> 'Footer Options',
		'parent_slug' 	=> $parent['menu_slug'],
	));
	
	//1.5 Sidebar Options
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Sidebar Options',
		'menu_title' 	=> 'Sidebar Options',
		'parent_slug' 	=> $parent['menu_slug'],
	));
	
}

//2.0 - Google Maps API Key (https://developers.google.com/maps/documentation/javascript/get-api-key)
function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyBgyLi3EVax0zHDlijOFuSs94L9QUSXF98');
} 
add_action('acf/init', 'my_acf_init');



