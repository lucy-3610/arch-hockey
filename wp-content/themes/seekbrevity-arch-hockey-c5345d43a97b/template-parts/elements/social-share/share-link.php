<?php
/*
Thunder Bolt 2 - Template Parts - Elements - Social Share
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Social Share - Link
@package Thunder_Bolt_2
Updated Version: 1.0
*/

//Current Page URL
$currentPage = get_permalink();
?>

<a onclick="copyToClipboard('<?php echo $currentPage; ?>')" class="copyURL social-share">
	<i class="fa fa-link"></i>
</a>


<script>
  function copyToClipboard(text) {
	  window.prompt("Copy to clipboard: Ctrl+C, Enter", text);
  }
</script>