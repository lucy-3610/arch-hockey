<?php
/*
Thunder Bolt 2 - Template Parts - Content
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Default Page Header
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<header id="page-header" class="page-header-wrapper wrapper">
	<div class="page-header-container container">
		<div class="page-header column sixteen">
			<h1 class="title"><?php the_title(); ?></h1>
			<?php thunder_bolt_2_breadcrumbs(); ?>
		</div> <!-- .page-header -->
	</div> <!-- .page-header-container -->
</header> <!-- .page-header-wrapper -->