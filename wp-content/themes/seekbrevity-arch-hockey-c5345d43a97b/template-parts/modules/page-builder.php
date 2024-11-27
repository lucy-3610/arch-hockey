<?php
/*
Thunder Bolt 2 - Template Parts - Modules
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Page Builder
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>


<div id="page-builder">
<?php if( have_rows('pg_mdls') ):
	$mod_count = 1;
	while ( have_rows('pg_mdls') ) : the_row();
		if( get_row_layout() == 'full' ): 
			// if is a full width module
			include (TEMPLATEPATH . '/template-parts/modules/module-full.php');
			$mod_count = 1 + $mod_count;
		elseif( get_row_layout() == 'fifty_fifty' ): 
			// if is a 50/50 module
			include (TEMPLATEPATH . '/template-parts/modules/module-5050.php');
			$mod_count = 1 + $mod_count;
		elseif( get_row_layout() == 'columns' ):
			// if is a columns module
			include (TEMPLATEPATH . '/template-parts/modules/module-columns.php');
			$mod_count = 1 + $mod_count;
		elseif( get_row_layout() == 'gallery' ):
			// if is a gallery module
			include (TEMPLATEPATH . '/template-parts/modules/module-gallery.php');
			$mod_count = 1 + $mod_count;
		endif;
	endwhile;
endif; ?>
</div> <!-- #page-builder -->
