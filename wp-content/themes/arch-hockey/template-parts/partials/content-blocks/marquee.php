<?php

/**
 * Template part for displaying the marquee partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
?>

<?php if (empty($hide_block)) : ?>

    <!-- MARQUEE 
	======================================== -->
    <section class="marquee">
        <div class="container-fluid">
            <div class="row">
                <marquee class="marquee-scroll" direction=”right” onmouseover="stop()" onmouseout="start()">
                    <div class="d-flex justity-content-between"><h2>#1 Female Entrepreneur in the 904, Ashley Hanna</h2> <h2>#1 Yoga Instructor, Tiffany Howard </h2> <h2>#1 Fitness Studio </h2> <h2>#1 Yoga Studio </h2> <h2> #1 Female Entrepreneur in the 904, Ashley Hanna</h2></div>
                </marquee>
            </div><!-- /.row -->  
        </div><!-- /.container -->
    </section><!-- /.marquee -->

<?php endif; ?>