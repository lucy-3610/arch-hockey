<?php
/*
Thunder Bolt 2 - Template Parts - Elements
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Search Form
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<form role="search" method="get" class="searchform tb-searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div>
    <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search" />
    <input type="submit" class="searchsubmit tb-searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
    <i class="fa fa-search" aria-hidden="true"></i>
  </div>
</form>