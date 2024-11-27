<?php

/**
 * Template part for displaying the button partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
$button_title             = get_sub_field('button_title');
$external_link             = get_sub_field('external_link');
$image_upload             = get_sub_field('image_upload');
$file_upload             = get_sub_field('file_upload');
$button_link;

if (!empty($external_link)) {
    $button_link = $external_link;
} elseif (!empty($image_upload)) {
    $button_link = $image_upload['url'];
} else {
    $button_link = $file_upload['url'];
}
?>

<?php if (empty($hide_block)) : ?>

    <!-- BUTTON 
	======================================== -->
    <section class="button-partial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col d-flex justify-content-center">
                    <a target="_blank" rel="noopener noreferrer" href="<?php echo $button_link; ?>"><button class="btn btn-black"><?php echo $button_title; ?></button></a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.button-partial -->

<?php endif; ?>