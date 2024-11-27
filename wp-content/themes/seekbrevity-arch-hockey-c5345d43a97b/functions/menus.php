<?php
/*
Thunder Bolt 2 - Functions and Definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Registered Menus
@package Thunder_Bolt_2	
Updated Version: 1.0

Usage: <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
 
TABLE OF CONTENTS: 
1.0 - Primary Navigation
2.0 - Footer Navigation
*/

// 1.0 - Primary Navigation
register_nav_menus( array(
	'primary' => esc_html__( 'Primary', 'thunder-bolt' ),
) );


// 2.0 - Footer Navigation
register_nav_menus( array(
	'footer' => esc_html__( 'Footer', 'thunder-bolt' ),
) );