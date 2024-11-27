<?php
/*
Thunder Bolt 2 - Template Parts - Header
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Header Mobile Navigation
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<a id="mobile-nav" class="mobile burger" href="#mobile-navigation">
	<span></span>
</a>
			
<nav id="mobile-navigation" role="navigation" style="display: none;">	
	<a id="mobile-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<?php include (TEMPLATEPATH . '/images/logo-header.svg'); ?>
	</a>
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
<!--
	<div id="mobile-search">
		<?php include (TEMPLATEPATH . '/template-parts/elements/search-form.php'); ?>
	</div>
-->
	<div id="mobile-social">
		<?php include (TEMPLATEPATH . '/template-parts/elements/social-nav.php'); ?>
	</div>
</nav><!-- #mobile-navigation -->