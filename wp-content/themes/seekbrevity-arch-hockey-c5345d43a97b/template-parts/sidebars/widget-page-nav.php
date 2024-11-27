<?php
/*
Thunder Bolt 2 - Template Parts - Sidebar
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Sidebar Widget - Page Navigation
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<aside class="widget sidebar-nav page-nav">
	<?php /* Creates a menu for pages beneath the level of the current page */
		if (is_page() and ($notfound != '1')) {
			$current_page = $post->ID;
			while($current_page) {
			$page_query = $wpdb->get_row("SELECT ID, post_title, post_status, post_parent FROM $wpdb->posts WHERE ID = '$current_page'");
			$current_page = $page_query->post_parent;
		}
		$parent_id = $page_query->ID;
		$parent_title = $page_query->post_title;
		if ($wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = '$parent_id' AND post_status != 'attachment'")) { ?>
		<h3 class="widget-title"><a href="<?php echo get_permalink($parent_id); ?>"><?php echo $parent_title; ?></a></h3>
		<ul class="nav-list">
			<?php wp_list_pages('sort_column=menu_order&title_li=&child_of='. $parent_id); ?>
		</ul>
	<?php } } ?>
</aside><!-- .sidebar-nav -->