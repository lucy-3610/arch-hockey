<?php
/*
Thunder Bolt 2 - Functions and Definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Prioritize Search Results
@package Thunder_Bolt_2	
Updated Version: 1.0
*/
 
add_filter( 'the_posts', function( $posts, $q ) {
  if( $q->is_main_query() && $q->is_search() ) {
    usort( $posts, function( $a, $b ){
      $post_types = [
	      'services' => 1,
	      'product'    => 1,
	      'case-studies' => 2,
	      'events'    => 3,
        'post'		=> 4,
        'page'    => 5,
        'testimonials' => 6,
        'bios' => 7
      ];              
      if ( $post_types[$a->post_type] != $post_types[$b->post_type] ) {
        return $post_types[$a->post_type] - $post_types[$b->post_type];
      } else {
        return $a->post_date < $b->post_date; // Change to > if you need oldest posts first
      }
    });
  }
  return $posts;
}, 10, 2 );


