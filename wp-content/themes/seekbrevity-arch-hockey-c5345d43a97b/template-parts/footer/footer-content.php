<?php
/*
Thunder Bolt 2 - Template Parts - Footer
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Footer Content
@package Thunder_Bolt_2
Updated Version: 1.0
*/

//Footer Links
$footer_link_title = get_field('footer_link_title','options');

//Footer Connect
$footer_form = get_field('footer_form','options');

//Footer Contact
$gi_name = get_field('gi_name','options');
$gi_address_1 = get_field('gi_address_1', 'options');
$gi_address_2 = get_field('gi_address_2', 'options');
$gi_phone = get_field('gi_phone', 'options');
$location = get_field('gi_location', 'options');
?>


<footer id="footer-content" class="container">

	<!-- Footer Nav -->
	<div id="footer-nav" class="column four">
	  <h3>Footer Navigation</h3>
	  <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
	</div><!-- #footer-nav -->
	
	<!-- Footer Links -->
  <div id="footer-links" class="column four">
	  <?php if($footer_link_title) { ?>
	  	<h3><?php echo $footer_link_title; ?></h3>
	  <?php } ?>
		<ul id="footer-links-list">
    <?php 
	    while( have_rows('footer_links','options') ): the_row(); 
	    $lu = get_sub_field('lu','options');
	    $lt = get_sub_field('lt','options');
	    $nw = get_sub_field('nw','options');
    ?>
    	<li>
	      <a href="<?php echo $lu; ?>" <?php if($nw) { ?> target="_blank" <?php } ?>>
					<?php echo $lt; ?>
				</a>
			</li>
    <?php endwhile; ?>
		</ul>
  </div><!-- #footer-links -->
  
  <!-- Footer Links -->
  <div id="footer-connect" class="column four">
	  <h3>Stay Connected</h3>
	  <?php if ($footer_form) { ?>
	  	<div id="footer-form">
			  <?php  
			    gravity_form_enqueue_scripts($footer_form['id'], true);
			    gravity_form($footer_form['id'], false, false, true, '', true, 33); 
		  	?>
	  	</div><!-- #footer-form -->
		<?php } ?>
		<div id="footer-social">	
			<?php include (TEMPLATEPATH . '/template-parts/elements/social-nav.php'); ?>
		</div><!-- #footer-social -->
	</div><!-- #footer-connect -->
	
	<!-- Footer Contact -->
	<div id="footer-contact" class="column four">
		<?php if($gi_name) { echo '<h3>'. $gi_name .'</h3>'; } ?>
		<?php if($gi_address_1 || $gi_address_2) { ?>
			<a class="footer-address" href="https://www.google.com/maps/place/<?php echo urlencode( $location['address'] ); ?>" target="_blank">
				<?php echo $gi_address_1; if( $gi_address_1 && $gi_address_2) { ?><br><?php } echo $gi_address_2; ?>
			</a>
		<?php } ?>
		<?php if($gi_phone) { ?>
			 <div class="footer-phone"><?php echo $gi_phone; ?></div>
		<?php } ?>
	</div><!-- #footer-contact -->
		
</footer><!-- #footer-content -->

