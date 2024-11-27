<?php
	
/*
   Template part for displaying the form content on the Home Page
 */

?>

<!-- FORM SECTION
======================================== -->
<section class="form py-5">

    <div class="container">
        <div class="row">
	        
            <div class="col-md-12 mx-auto">
                <div class="form-wrapper bg-blue py-5 px-md-5 px-4 d-block d-md-flex justify-content-around align-items-center">
	                <h2 class="sans white uppercase mb-md-0 mb-4 text-md-left text-center">Join the Fight to Keep Michigan Safe</h2>
                    <?php gravity_form(1, false, false, false, '', false); ?>
                </div><!-- .form-wrapper -->
            </div><!-- .col -->
            
        </div><!-- .row -->
    </div><!-- .container -->
	
</section><!-- .form -->