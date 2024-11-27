<?php
/*
Thunder Bolt 2 - Template Parts - Header
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Header Sponsors
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

	

<div id="header-sponsors">

	<?php 
		$rows = get_field('header_sponsors', 'options');
		if($rows) {
			$limit = 0;
			shuffle( $rows );
			foreach($rows as $row) {
			$limit++;
			if( $limit > 1 ) { break; }
			$logo = $row['logo'];
			$link = $row['link'];
	?>
			<a class="header-sponsor" href="<?php echo $link; ?>" target="_blank">
				<img src="<?php echo $logo; ?>"/>
			</a>
			<?php
			}
		}
	?>

</div><!-- .header-sponsors -->