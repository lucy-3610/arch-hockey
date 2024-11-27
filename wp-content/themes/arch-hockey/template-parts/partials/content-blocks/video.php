<?php

/**
 * Template part for displaying the video partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
$video             = get_sub_field('video');
?>

<?php if (empty($hide_block)) : ?>

    <!-- VIDEO 
	======================================== -->
    <section class="video">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class='embed-container'> <iframe src='<?php echo $video; ?>' width='640' height='360' frameborder='0' allowfullscreen allow='autoplay;'></iframe></div>
                </div>
            </div>
        </div>
    </section><!-- /.video -->

<?php endif; ?>