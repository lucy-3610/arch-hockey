<?php

/**
    Template part for displaying the Gravity Forms partial
 */

//Advanced Custom Fields 
$form_id 		= get_sub_field('form_id');
$form_title 	= get_sub_field('form_title');
$gravityforms 	= get_sub_field('gravityforms');

?>

<!-- GRAVITY FORMS
========================= -->
<section id="form-trigger <?php if($form_id): echo 'form-' . $form_id . ''; endif; ?>" class="form"><!-- Trigger animation background -->
	<div class="container">
		<div class="row">
			
			<div class="col-md-8 py-3">
                <div class="footer-form">
                	<h4 class="f-orange">Get In Touch</h4>
                	<?php gravity_form( $gravityforms['value'], false, false, false, '', false ); ?>
                </div><!-- .footer-form -->
            </div><!-- .col -->

		</div><!-- row -->
	</div><!-- container -->
</section><!-- form -->