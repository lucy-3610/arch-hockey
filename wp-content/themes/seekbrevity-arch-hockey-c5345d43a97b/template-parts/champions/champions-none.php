<?php
/*
Thunder Bolt 2 - Template Parts - Content
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Template part for displaying a message that Champions cannot be found.
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<section class="no-results not-found">

	<header class="entry-header">
		<h1 class="entry-title"><?php esc_html_e( 'No Schedules Found', 'thunder-bolt' ); ?></h1>
	</header><!-- .page-header -->

	<div class="entry-content">
		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'thunder-bolt' ); ?></p>
		<?php include (TEMPLATEPATH . '/template-parts/elements/search-form.php'); ?>
	</div><!-- .page-content -->

</section><!-- .no-results -->
