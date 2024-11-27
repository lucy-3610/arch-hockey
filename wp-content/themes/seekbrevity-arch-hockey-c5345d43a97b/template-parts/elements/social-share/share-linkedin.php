<?php
/*
Thunder Bolt 2 - Template Parts - Elements - Social Share
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Social Share - LinkedIn
@package Thunder_Bolt_2
Updated Version: 1.0
*/

//Source Site and Current Page URL
$site = 'http://' . $_SERVER['HTTP_HOST'];
$currentPage = get_permalink();

// Meta information for sharing. Title, Source Site, Current Page Url, and Summary Description
$title = get_the_title($id);
$postURL = urlencode($currentPage);
if( get_the_content($post->ID) ) { 
	$description = urlencode(excerpt(40));
}
$inUrl = "http://www.linkedin.com/shareArticle?mini=true&url=".$postURL."&title=".$title."&summary=".$description."&source=".$site;
?>


<a onclick="window.open('<?php echo $inUrl; ?>','<?php the_title(); ?>','width=600,height=400')"  class="linkedin social-share">
	<i class="fa fa-linkedin"></i>
</a>