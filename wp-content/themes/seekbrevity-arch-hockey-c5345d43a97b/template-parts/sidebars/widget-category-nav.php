<?php
/*
Thunder Bolt 2 - Template Parts - Sidebar
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Sidebar Widget - Category Navigation
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<aside class="widget sidebar-nav cat-nav">
	<h3 class="widget-title"><?php _e( 'Categories', 'brevity-2016' ); ?></h3>
	<ul class="nav-list">
		<?php
			wp_list_categories( array(
				'orderby'    => 'count',
				'order'      => 'DESC',
				'show_count' => 0,
				'title_li'   => '',
				'number'     => 10,
			) );
		?>
	</ul>
</aside><!-- .sidebar-nav -->