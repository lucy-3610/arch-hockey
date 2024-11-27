<?php 
/*
Thunder Bolt 2 - Template Parts - Elements - Social Share
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Social Share - Facebook
@package Thunder_Bolt_2
Updated Version: 1.0
*/

//Source Site and Current Page URL
$site = 'http://' . $_SERVER['HTTP_HOST'];
$currentPage = get_permalink();

// Meta information for sharing. App Id, Caption, Post Link, and Image URL.

if( get_post_thumbnail_id($post->ID) ) {
	$imageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
}
$postURL = urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
$caption = urlencode($currentPage);
if( get_the_content($post->ID) ) {
	$description = urlencode( excerpt(80) );
}
$app_id = "834153980027556";

$fbURL = "https://www.facebook.com/dialog/feed?app_id=".$app_id."&display=popup&caption=". $caption ."&description=". $description ."&link=". $postURL ."&redirect_uri=https%3A%2F%2Ffacebook.com&picture=" . $imageurl;
?>


<a onclick="window.open('<?php echo $fbURL; ?>','<?php the_title(); ?>','width=600,height=400')"  class="linkedin social-share">
	<i class="fa fa-facebook"></i>
</a>