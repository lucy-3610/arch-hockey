<?php
/*
Thunder Bolt 2 - Template Files
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

The template for displaying the footer.
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

	</div><!-- #template -->
	</div><!-- #template-wrapper -->
	
<!--
	<div id="footer-wrapper" class="wrapper">
		<a id="footer-sitemap-trigger" class="column burger right" href="javascript:;">
			<span></span> Site Map
		</a>
		<?php// include (TEMPLATEPATH . '/template-parts/footer/footer-sitemap.php'); ?>
		<?php// include (TEMPLATEPATH . '/template-parts/footer/footer-content.php'); ?>
	</div>
-->
	
	<div id="sub-footer-wrapper" class="wrapper">
		<?php include (TEMPLATEPATH . '/template-parts/footer/footer-sub-footer.php'); ?>
	</div><!-- #sub-footer-wrapper -->
		
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
