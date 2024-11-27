<?php
/*
Thunder Bolt 2 - Template Parts - Modules
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Page Builder Module: Columns
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$cs = get_sub_field('cs');
$s_hl = get_sub_field('s_hl');
?>

<div id="module-columns-<?php echo $mod_count; ?>" class="module-columns-wrapper module-wrapper wrapper color-scheme-<?php echo $cs; ?>">
	<div class="module-columns-container container">
		
		<?php if($s_hl) { ?>
			<h2 class="module-columns-title"><?php echo $s_hl; ?></h2>
		<?php } ?>
		
		<?php 
			while( have_rows('cr') ): 
			the_row(); 
			$noc = get_sub_field('noc');
			?>
	 		<div class="row">
	 		<?php if($noc == "Two") { ?>
	 		
	 			<?php if( have_rows('cl2') ): ?>
	 				<?php while( have_rows('cl2') ): the_row(); ?>
	 					
	 					<div class="cl2 column half">
		 					<?php include (TEMPLATEPATH . '/template-parts/modules/module-column-single.php'); ?>
		 				</div> <!-- .cl2 -->
	 			        		      
	 			  <?php endwhile; ?>
	 			<?php endif; ?>
	 		
	 		
	 		<?php } elseif ($noc == "Three") { ?>
	 		
	 			<?php if( have_rows('cl3') ): ?>
	 				<?php while( have_rows('cl3') ): the_row(); ?>
	 			        
	 			    <div class="cl3 column one-third">
		 					<?php include (TEMPLATEPATH . '/template-parts/modules/module-column-single.php'); ?>
	 					</div> <!-- .cl3 -->
			      
	 			  <?php endwhile; ?>
	 			<?php endif; ?>
	 		
	 		
	 		<?php } elseif ($noc == "Four") { ?>
	 		
	 			<?php if( have_rows('cl4') ): ?>
	 				<?php while( have_rows('cl4') ): the_row(); ?>
	 			        
	 			    <div class="cl4 column four">
		 			    <?php include (TEMPLATEPATH . '/template-parts/modules/module-column-single.php'); ?>
	 					</div> <!-- .cl4 -->

	 			  <?php endwhile; ?>
	 			<?php endif; ?>
	 		
	 		<?php } ?>
	 		</div> <!-- .row -->
	  <?php endwhile; ?>
		
		
	</div><!-- .module-columns-container -->
</div> <!-- .module-columns-wrapper -->




