<?php

/**
 * Template part for displaying the schedule partial
 */

//Advanced Custom Fields
$workshop_script    = get_sub_field('workshop_script'); 
$class_script    = get_sub_field('class_script'); 
$sauna_link    = get_sub_field('sauna_link'); 
$hide_block         = get_sub_field('hide_block');
?>

<?php if (empty($hide_block)) : ?>

    <!-- SCHEDULE FROM MINDBODY
	======================================== -->
    <section class="schedule">
        <div class="container">
            <div class="row">
		
                <div class="col-12 mx-auto">
					
					<div class="tabs">
						<div class="tab workshop-tab-selector" data-val="WORKSHOP">Workshops</div>
						<div class="tab class-tab-selector" data-val="CLASSES">Classes</div>
						<a href="<?php echo $sauna_link;?>" class="tab sauna-tab-selector">Sauna</a>
					</div>
				
					<div class="tab-content enroll workshop">
						<?php echo $workshop_script;?>
					</div>

					<div class="tab-content class">
					<?php echo $class_script;?>
					</div>
				</div> 
				<!-- /.col-12 -->
                
            </div> <!-- /.row -->  
        </div><!-- /.container -->
    </section><!-- /.schedule -->

<?php endif; ?>