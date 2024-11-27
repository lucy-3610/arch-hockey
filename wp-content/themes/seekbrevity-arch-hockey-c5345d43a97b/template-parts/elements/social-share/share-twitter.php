<?php 
/*
Thunder Bolt 2 - Template Parts - Elements - Social Share
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Social Share - Twitter
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$hashtag = get_field('twitter_hashtag', 'options');
$twitterHandle = get_field('twitter_handle', 'options');
?>

<a onclick="window.open('https://twitter.com/intent/tweet?url=<?php the_permalink(); if($hashtag) { ?>&hashtags=<?php echo $hashtag; } if ($twitterHandle) { ?>&via=<?php echo $twitterHandle; } ?>','Share <?php the_title(); ?>','width=600,height=400')" class="twitter social-share">
	<i class="fa fa-twitter"></i>
</a>
