<?php

/**
 * Template part for displaying the quote partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');

$bg_image             = get_sub_field('bg_image');
$logo             = get_sub_field('logo');
$quote             = get_sub_field('quote');
$title             = get_sub_field('title');
$name             = get_sub_field('name');

$theme_primary_color    = get_field('theme_primary_color', 'option');
$rgba_primary = hex2rgba($theme_primary_color, 0.9);
?>

<?php if (empty($hide_block)) : ?>

    <!-- QUOTE 
	======================================== -->
    <section class="quote" style="background: linear-gradient(to bottom, <?php echo $rgba_primary; ?>, <?php echo $rgba_primary; ?>), url('<?php echo $bg_image['url']; ?>') no-repeat 50% 30%; background-size: cover;">
        <img class="absolute-center" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 position-relative text-center color-white">
                    <i class="d-none d-sm-block fa-solid fa-quote-left fa-3x"></i>
                    <div class="mb-4"><?php echo $quote; ?></div>
                    <?php echo $title; ?>,
                    <div class="f-700"><?php echo $name; ?></div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.quote -->

<?php endif; ?>