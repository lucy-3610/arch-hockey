<?php
/*
Thunder Bolt 2 - Template Parts - Content
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Single Schedule Header
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$thumb_id = get_post_thumbnail_id();
if ($thumb_id) {
    $thumb_url = wp_get_attachment_image_src($thumb_id, 'header_img', true);
} else {
    $thumb_id = get_field('schedules_ahi', 'options');
    $thumb_url =  wp_get_attachment_image_src($thumb_id, 'header_img');
}
$start_date = get_field('start_date');
$end_date = get_field('end_date');
?>

<header id="single-schedule-header" class="page-header-wrapper wrapper" <?php if ($thumb_id) { ?>style="background-image: url('<?php echo $thumb_url[0]; ?>');" <?php } ?>>
    <div class="page-header-container container">
        <div class="page-header column sixteen">
            <h6 class="sub-title">Schedule</h6>
            <h1 class="title"><?php the_title(); ?></h1>
            <h4 class="dates">
                <?php echo date('M Y', strtotime($start_date)); ?> - <?php echo date('M Y', strtotime($end_date)); ?>
            </h4>
        </div> <!-- .page-header -->
    </div> <!-- .page-header-container -->
</header> <!-- .page-header-wrapper -->