<?php
/*
Thunder Bolt 2 - Template Files
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

The file controls the sidebar content.
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<div id="content-sidebar" class="widget-area column five right">
	
	<aside class="widget widget-search">
		<?php include (TEMPLATEPATH . '/template-parts/elements/search-form.php'); ?>
	</aside>
	
	<?php if ( is_page() ) {  
		include (TEMPLATEPATH . '/template-parts/sidebars/sidebar-page.php'); 
	} else if ( is_single() ) {  
		include (TEMPLATEPATH . '/template-parts/sidebars/sidebar-single.php');  
	} else if ( is_archive() || is_home() ) {  
		include (TEMPLATEPATH . '/template-parts/sidebars/sidebar-index.php');
	} else if ( is_search() ) {  
		include (TEMPLATEPATH . '/template-parts/sidebars/sidebar-search.php');
	} ?>

</div><!-- #content-sidebar -->