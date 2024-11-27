<?php
/*
Thunder Bolt 2 - Template Parts - Sidebar
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Single Post Sidebar
@package Thunder_Bolt_2
Updated Version: 1.0
*/

if ( get_field('display_sw_sidebar_form') ) {
	$sb_form = get_field('single_sb_form', 'options');
} else { 
	$sb_form = get_field('sb_form');
}
?>


<?php 
	// Categroy Nav
	include (TEMPLATEPATH . '/template-parts/sidebars/widget-category-nav.php');
	
	//Single Post Sidebar Form
	if($sb_form) { 
		echo '<div class="sidebar-form widget">';
	    gravity_form_enqueue_scripts($sb_form['id'], true);
	    gravity_form($sb_form['id'], true, true, true, '', true, 33);
	  echo '</div>'; 
	}
	
	//Post Specific Sidebar Options
	if( have_rows('sb_callout') ):
	  while( have_rows('sb_callout') ): the_row(); 
	  	include (TEMPLATEPATH . '/template-parts/sidebars/widget-cta.php');
		endwhile; 
	endif; 

	//Site-Wide Sidebar Options
	if ( get_field('display_sw_sidebar') ) {
		if( have_rows('sb_callout', 'options') ):
		  while( have_rows('sb_callout', 'options') ): the_row(); 
		  	$where_sb_appear = get_sub_field('where_sb_appear','options');
				if ( in_array('Single Posts', $where_sb_appear) )  {  
					include (TEMPLATEPATH . '/template-parts/sidebars/widget-cta.php');
				} 
			endwhile; 
		endif; 
	}
?>