<?php
/*
Thunder Bolt 2 - Template Parts - Header
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Header Main Navigation
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<nav id="main-navigation" class="desktop" role="navigation">		
<!--
	<div id="header-search">
		<a class="header-search-trigger right" href="javascript:;">
			<i class="fa fa-search" aria-hidden="true" ></i>
			<i class="fa fa-times" aria-hidden="true" ></i>
		</a>
		<?php include (TEMPLATEPATH . '/template-parts/elements/search-form.php'); ?>
	</div>
-->
	<div id="primary-navigation" class="column sixteen">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</div><!-- #primary-navigation -->
</nav><!-- #main-navigation -->
