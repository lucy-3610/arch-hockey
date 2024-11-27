<?php
/*
Thunder Bolt 2 - Template Parts - Elements - Social Share
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Social Share - Open Graph Markup
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$og_app_id = get_field('og_app_id', 'options');

if ( has_post_thumbnail() ) { 
	$og_img_id = get_post_thumbnail_id();
	$og_img_url_array = wp_get_attachment_image_src($og_img_id, '', true);
	$og_img_src = $og_img_url_array[0];
} else if ( get_field('gh_image') ) {
	$og_img_url_array = wp_get_attachment_image_src(get_field('gh_image'), '');
	$og_img_src = $og_img_url_array[0];
} else if ( get_field('og_default_img', 'options') ) {
	$og_img_url_array = wp_get_attachment_image_src(get_field('og_default_img', 'options'), '');
	$og_img_src = $og_img_url_array[0];
}

if ( get_field('gh_headline') ) { 
	$og_title = get_field('gh_headline');
} else { 
	$og_title = $post->post_title;
}

if ( $excerpt = $post->post_content) {
	$excerpt = strip_tags($post->post_content);
	$excerpt = str_replace("", "'", $excerpt);
	$excerpt = substr($excerpt, 0, 200);
} else if ( get_field('og_default_description', 'options') ) { 
	$excerpt = get_field('og_default_description', 'options');
	$excerpt = substr($excerpt, 0, 200);
}
?>

<meta property="fb:app_id"             content="<?php echo $og_app_id; ?>"/>
<meta property="og:url"                content="<?php the_permalink();?>" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="<?php echo $og_title; ?>" />
<meta property="og:description"        content="<?php echo $excerpt; ?>" />
<meta property="og:image"              content="<?php echo $og_img_src; ?>" />
