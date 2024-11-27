<?php
/*
Thunder Bolt 2 - Functions and Definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Most Recent Jquery library
@package Thunder_Bolt_2	
Updated Version: 1.0
*/
 
 
 //Making jQuery Google API
function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, '2.2.4');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');