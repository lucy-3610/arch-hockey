<?php	
/*
Thunder Bolt 2 - Template Parts - Elements - Social Share
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Social Share - Pinterest
@package Thunder_Bolt_2
Updated Version: 1.0
*/

//Source Site and Current Page URL
$site = 'http://' . $_SERVER['HTTP_HOST'];
$currentPage = get_permalink();

// Meta information for sharing. Current Page, Image, and Description
$postURL = urlencode($currentPage);
if( get_the_content($post->ID) ) { 
	$description = urlencode(excerpt(40));
}
$media = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$pinURL =	"https://www.pinterest.com/pin/create/button/".
					"?url=".$postURL.
					"&media=".$media.
					"&description=".$description;
?>

<a onclick="window.open('<?php echo $pinURL; ?>','<?php the_title(); ?>','width=600,height=400')">
  <i class="fa fa-pinterest-p"></i>
</a>

