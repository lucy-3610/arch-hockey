<?php
/*
Thunder Bolt 2 - Template Parts - Header
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Header Message Bar
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$hmb = get_field('hmb', 'options');
$hmb_tx = get_field('hmb_tx', 'options');
$hmb_reappear = get_field('hmb_reappear', 'options')
?>

<?php if($hmb) { ?>
	<script>
		// Check for Cookie	
		$(function () { 
			var myCookie = readCookie('hide-message-bar');
			if (myCookie) { 
				$('#header-message-bar').css({'display':'none'});	
			} else {
				$('#header-message-bar').css({'display':'block'});
			}
		});
	</script>
	
	<div id="header-message-bar" class="message-bar-wrapper wrapper">	
		<div class="message-bar-container container">
		 <?php echo $hmb_tx; ?>
		 <a class="close" href="javascript:;">Close</a>
		</div>
	</div><!-- #utlitly-navigation -->	
	
	<script>
		// Close Message Bar and Set Cookie	
		$( "#header-message-bar .close" ).click(function() {
			 $('#header-message-bar').addClass('hide');
			 createCookie('hide-message-bar', '1', <?php echo $hmb_reappear; ?>)
		});
	</script>
<?php } ?>