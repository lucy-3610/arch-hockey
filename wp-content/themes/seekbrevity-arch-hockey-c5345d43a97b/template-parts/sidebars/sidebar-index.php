<?php
/*
Thunder Bolt 2 - Template Parts - Sidebar
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Index & Archive Sidebar
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$sb_form = get_field('index_sb_form', 'options');
?>


<?php 
	// Categroy Nav
	include (TEMPLATEPATH . '/template-parts/sidebars/widget-category-nav.php');
	
	//Index Sidebar Form
	if($sb_form) { 
		echo '<div class="sidebar-form widget">';
	    gravity_form_enqueue_scripts($sb_form['id'], true);
	    gravity_form($sb_form['id'], true, true, true, '', true, 33);
	  echo '</div>'; 
	}
	
	//Site-Wide Sidebar Callout
	if( have_rows('sb_callout', 'options') ):
	  while( have_rows('sb_callout', 'options') ): the_row(); 
	  	$where_sb_appear = get_sub_field('where_sb_appear','options');
			if ( in_array('Blog Index & Archives', $where_sb_appear) )  {
				include (TEMPLATEPATH . '/template-parts/sidebars/widget-cta.php');
			} 
		endwhile; 
	endif; 
?>