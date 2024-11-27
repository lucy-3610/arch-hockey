<?php
/*
Thunder Bolt 2 - Functions and Definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Theme Setup
@package Thunder_Bolt_2	
Updated Version: 1.0
 
TABLE OF CONTENTS:
1.0 - Registered html 5 Elements 
	1.1 - Registered html 5 Elements
	1.2 - Registered Post-Formats
2.0 - Hide Customizer	 
3.0 - Disable Link Manager	
4.0 - Remove Items from Menu Nav Bar
*/

//1.0 - Registered html 5 Elements 
if ( ! function_exists( 'thunder_bolt_2_setup' ) ) :
	function thunder_bolt_2_setup() {
		load_theme_textdomain( 'thunder-bolt', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
	
		// 1.0 - Registered html 5 Elements
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	
		// 2.0 - Registered Post-Formats
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
		  'link',
		) );
		
	}
endif;
add_action( 'after_setup_theme', 'thunder_bolt_2_setup' );

//2.0 - Hide Customizer	 
function remove_customize_page(){
	global $submenu;
	unset($submenu['themes.php'][6]); // remove Customizer link
}
add_action( 'admin_menu', 'remove_customize_page');

//3.0 - Disable Menu Items	
add_action( 'admin_menu', 'mf_remove_menu_pages' );
function mf_remove_menu_pages() {
	global $current_user;
	$user_id = get_current_user_id();
	remove_menu_page('edit-comments.php');
	remove_menu_page('link-manager.php');
	remove_submenu_page('themes.php','theme-editor.php');
	if ( $current_user->ID == 1 ) { 
		// If User ID is 1, do nothing
	} else {
		define('DISALLOW_FILE_MODS',true);
	  remove_menu_page('edit.php?post_type=acf-field-group');
	  remove_submenu_page('themes.php','themes.php');
	}
}

//4.0 - Remove Items from Menu Nav Bar
add_action( 'admin_bar_menu', 'remove_nodes', 999 );
function remove_nodes( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'new-content' );
	$wp_admin_bar->remove_node( 'comments' );
	$wp_admin_bar->remove_node( 'customize' );
}
