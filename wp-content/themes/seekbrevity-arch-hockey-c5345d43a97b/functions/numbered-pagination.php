<?php
/*
Thunder Bolt 2 - Functions and Definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Numbered Pagination
@package Thunder_Bolt_2	
Updated Version: 1.0

Usage:
if (function_exists("pagination")) { 
	echo "<div class='index-pag'>";
	pagination($custom_query->max_num_pages); 
	echo "</div>";
};
 
TABLE OF CONTENTS: 
1.0 - Numbered Pagination
*/

//1.0 - numbered pagination
function pagination($pages = '', $range = 2) {  
	$showitems = ($range * 2)+1;  
	global $paged;
	if(empty($paged)) $paged = 1;
	if($pages == '') {
	  global $wp_query;
	  $pages = $wp_query->max_num_pages;
	  if(!$pages) {
	    $pages = 1;
	  }
	}  
	if(1 != $pages) {
	  if($paged > 1 && $showitems < $pages) { 
		  echo "<a class=\"pag-prev\" href='".get_pagenum_link($paged - 1)."'>Previous</a>"; 
		}
    for ($i=1; $i <= $pages; $i++) {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
        echo ($paged == $i)? "<span class=\"current pag-number\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive pag-number\">".$i."</a>";
      }
    }
	  if ($paged < $pages && $showitems < $pages) { 
		  echo "<a class=\"pag-next\" href=\"".get_pagenum_link($paged + 1)."\">Next</a>"; 
		}  
	}
}


