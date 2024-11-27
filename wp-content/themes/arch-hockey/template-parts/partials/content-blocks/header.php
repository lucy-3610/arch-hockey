<?php

/**
 * Template part for displaying the header partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
$heading             = get_sub_field('heading');
$subheading             = get_sub_field('subheading');
?>

<?php if (empty($hide_block)) : ?>

    <!-- HEADER 
	======================================== -->
    <section class="header-partial">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3><?php echo $heading; ?></h3>
                    <h1 class="text-shadow"><?php echo $subheading; ?></h1>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.header-partial -->

<?php endif; ?>