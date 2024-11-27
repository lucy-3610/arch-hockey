<?php
/*
Thunder Bolt 2 - Template Parts - Footer
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Site Map
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$column_counter = get_field('footer_sitemap', 'options');
$total_columns = count( $column_counter );
?>


<?php if( have_rows('footer_sitemap', 'options') ): ?>
	<div id="sitemap-wrapper" class="wrapper">
		<div id="sitemap" class="container sm-cols-<?php echo $total_columns; ?>">
			<?php 
				while( have_rows('footer_sitemap', 'options') ): 
				the_row(); 
				$parent_lt = get_sub_field('parent_lt');
				$parent_lu = get_sub_field('parent_lu');
			?>
				
					<div class="sitemap-column">
						<?php if( $parent_lt && $parent_lu ) { ?>
							<h5>
								<a class="parent-link" href="<?php echo $parent_lu; ?>">
									<?php echo $parent_lt; ?>
								</a>
							</h5>
						<?php } else if( $parent_lt ) { ?>
							<h5>
								<?php echo $parent_lt; ?>
							</h5>
						<?php } ?>
						
						<?php if( have_rows('links') ): ?>
							<ul class="sm-links">
							<?php 
								while( have_rows('links') ): 
								the_row(); 
								$lt = get_sub_field('lt');
								$lu = get_sub_field('lu');
								$nw = get_sub_field('nw');
							?>
								<li class="sm-links">
						    	<a href="<?php echo $lu; ?>" <?php if($nw) { ?>target="_blank"<?php } ?>>
							    	<?php echo $lt; ?>
						    	</a>
								</li>
						  <?php endwhile; ?>
						 </ul>
						<?php endif; ?>
					</div>
					 
			<?php endwhile; ?>
		</div>	
	</div><!-- #sitemap-wrapper -->
<?php endif; ?>
