<?php
/*
Thunder Bolt 2 - Functions and Definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Enqueued Scripts & Styles.
@package Thunder_Bolt_2	
Updated Version: 1.0
 
TABLE OF CONTENTS: 
1.0 - Style Sheet
2.0 - Default Theme Scripts
3.0 - Vendor Scripts 
4.0 - Init Scripts 
5.0 - Page Specific Scripts 
*/

function thunder_bolt_2_scripts() {
	// 1.0 - Style Sheet
	wp_enqueue_style( 'thunder-bolt-2-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', array(), true   );
	
	// 2.0 - Default Theme Scripts
	wp_enqueue_script( 'thunder-bolt-2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
		
	// 3.0 - Vendor Scripts 
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), true );
	wp_enqueue_script( 'mobile-nav', get_template_directory_uri() . '/js/sidr.js', array(), true );
	wp_enqueue_script( 'cookies', get_template_directory_uri() . '/js/cookie.js', array(), true );
	wp_enqueue_script( 'popup', get_template_directory_uri() . '/js/popup.js', array(), true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array(), true );
	
	// 4.0 - Init Scripts 
	wp_enqueue_script( 'inits', get_template_directory_uri() . '/js/inits.js', array(), true );
	
	//5.0 - Page Specific Scripts

}
add_action( 'wp_enqueue_scripts', 'thunder_bolt_2_scripts' );