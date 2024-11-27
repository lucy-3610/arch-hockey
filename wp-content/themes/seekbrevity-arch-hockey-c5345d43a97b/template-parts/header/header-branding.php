<?php
/*
Thunder Bolt 2 - Template Parts - Header
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Header Branding (Home Logo)
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>


<div id="utility-nav">
	<div id="header-sponsors-wrapper" class="column six desktop">
	  <?php include (TEMPLATEPATH . '/template-parts/header/header-sponsors.php'); ?>
	</div>
	
	<div id="header-logo" class="column four">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php include (TEMPLATEPATH . '/images/logo-header.svg'); ?>
			<span class="mobile">Arch Hockey</span>
		</a>
	</div>
	
	<div id="header-social" class="column six desktop">
	  <?php include (TEMPLATEPATH . '/template-parts/elements/social-nav.php'); ?>
	</div>
</div> <!-- #utility-nav -->

