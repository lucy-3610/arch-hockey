<?php

/**
 * Template part for displaying the divider partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
?>

<?php if (empty($hide_block)) : ?>

    <!-- DIVIDER 
	======================================== -->
    <section class="divider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 d-flex align-items-center">

                    <div class="divider-line bg-theme-primary"></div>

                    <i class="fa-solid fa-football fa-3x mx-3 mx-sm-4"></i>

                    <div class="divider-line bg-theme-primary"></div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.divider -->

<?php endif; ?>