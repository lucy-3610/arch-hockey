<?php
/*
Thunder Bolt 2 - Template Parts - Elements
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Social Navigation
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$sm_facebook   = get_field('sm_facebook', 'options');
$sm_twitter    = get_field('sm_twitter', 'options');
$sm_linkedin   = get_field('sm_linkedin', 'options');
$sm_instagram  = get_field('sm_instagram', 'options');
$sm_youtube    = get_field('sm_youtube', 'options');
$sm_google     = get_field('sm_google', 'options');
?>

<?php if(get_field('sm_links', 'options')) { ?>
	<ul class="social-nav">
		<?php $sm_links = get_field('sm_links', 'options'); ?>
		<?php if( in_array('facebook', $sm_links) ) { ?>
			<li><a href="<?php echo $sm_facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
		<?php } if( in_array('twitter', $sm_links) ) { ?>
			<li><a href="<?php echo $sm_twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
		<?php } if( in_array('linkedin', $sm_links) ) { ?>
			<li><a href="<?php echo $sm_linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
		<?php } if( in_array('instagram', $sm_links) ) { ?>
			<li><a href="<?php echo $sm_instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
		<?php } if( in_array('youtube', $sm_links) ) { ?>
			<li><a href="<?php echo $sm_youtube; ?>" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
		<?php } if( in_array('googleplus', $sm_links) ) { ?>
			<li><a href="<?php echo $sm_google; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
		<?php } ?>		
	</ul>
<?php } ?>
