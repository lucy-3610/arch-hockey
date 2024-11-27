<?php

/**
 * Template part for displaying the featured blog
 */

//Advanced Custom Fields 
$hide_block     = get_sub_field('hide_block');
$image          = get_sub_field('image');
$heading        = get_sub_field('heading');
$subheading     = get_sub_field('subheading');
$content        = get_sub_field('content');
$read_more_text = get_sub_field('read_more_text');
$read_more_link  = get_sub_field('read_more_link');

// $reverse_order = $image_right ? "flex-row-reverse" : "";

?>

<?php if (empty($hide_block)) : ?>
    <section>
        <div class="container img-text-container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <div class="col-lg-6 pt-1 pt-lg-0">
                    <h3 class="h2"><?php echo $heading; ?></h3>
                    <h4 class="p"><?php echo $subheading; ?></h4>
                    <?php echo $content; ?>
                    <p class="text-right"><a class="text-uppercase f-700 anchor-primary anchor-secondary-hover" href="<?php echo $read_more_link; ?>"><?php echo $read_more_text; ?></a></p>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>