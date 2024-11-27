<?php
/*
Thunder Bolt 2 - Functions and Definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Registered Widget Areas (Sidebars)
@package Thunder_Bolt_2	
Updated Version: 1.0

Usage: 	<?php dynamic_sidebar( 'sidebar-1' ); ?>
 
TABLE OF CONTENTS: 
1.0 - Sidebar 1
*/

function thunder_bolt_2_widgets_init() {
	
	//1.0 - Sidebar 1
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'thunder-bolt' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'thunder_bolt_2_widgets_init' );



