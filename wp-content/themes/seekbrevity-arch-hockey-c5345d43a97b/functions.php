<?php
/*
Thunder Bolt 2 - Template Files
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Thunder Bolt functions and definitions.
@package Thunder_Bolt_2
Updated Version: 1.0


TABLE OF CONTENTS: 
1.0 - Core Theme Functions
2.0 - Post Types
3.0 - Additional Theme Features
*/


//1.0 - Core Theme Functions

//Theme Setup (core wp options)
require get_template_directory() . '/functions/theme-setup.php';

//ACF Theme Options
require get_template_directory() . '/functions/acf-functions.php';

// Load the newest version of jQuery. 
require get_template_directory() . '/functions/jquery-update.php';

//Enqueued Scripts & Styles.
require get_template_directory() . '/functions/enqueue-scripts.php';

//Registered Menus
require get_template_directory() . '/functions/menus.php';

// Load custom image sizes.
require get_template_directory() . '/functions/image-sizes.php';

//Custom template tags for this theme.
require get_template_directory() . '/functions/template-tags.php';

//Registered Widget Areas (sidebars)
//require get_template_directory() . '/functions/widget-areas.php';



//2.0 - Post Types

// Load Bios Posttype. 
//require get_template_directory() . '/functions/posttypes/posttype-bios.php';

//Load Case Studies Posttype. 
//require get_template_directory() . '/functions/posttypes/posttype-casestudies.php';

//Load Event Posttype. 
//require get_template_directory() . '/functions/posttypes/posttype-events.php';

// Load Services Posttype.
//require get_template_directory() . '/functions/posttypes/posttype-services.php';

// Load Testimonials Posttype.
//require get_template_directory() . '/functions/posttypes/posttype-testimonials.php';

// Load Schedule Posttype.
require get_template_directory() . '/functions/posttypes/posttype-schedule.php';

// Load Champions Posttype.
require get_template_directory() . '/functions/posttypes/posttype-standings.php';

// Load Stats Posttype.
require get_template_directory() . '/functions/posttypes/posttype-stats.php';

// Load Player of the Week Posttype.
require get_template_directory() . '/functions/posttypes/posttype-pow.php';

// Load Champions Posttype.
require get_template_directory() . '/functions/posttypes/posttype-champions.php';





//3.0 - Additional Theme Features

// Add Page Builder Content to Search Content. 
require get_template_directory() . '/functions/pb-search-content.php'; 

//Add Prioritize Search 
require get_template_directory() . '/functions/prioritize-search.php';

// Load custom excerpt Lengths. 
require get_template_directory() . '/functions/custom-excerpt.php'; 

//Add Numbered Pagination 
require get_template_directory() . '/functions/numbered-pagination.php';

// Load Breadcrumbs. 
require get_template_directory() . '/functions/breadcrumbs.php'; 

//Add Column Support to Gravity Forms 
require get_template_directory() . '/functions/form-columns.php';
