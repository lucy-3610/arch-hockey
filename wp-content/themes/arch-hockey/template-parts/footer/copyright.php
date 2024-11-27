<?php
/**
 * Template part for displaying the copyright partial
 */


 // Get Theme Options
$disclaimer = get_field('disclaimer', 'option');
?>

<div class="copyright d-block d-md-flex justify-content-center align-items-center pt-3 text-center">
    <p class="py-1 px-2"><?php echo $disclaimer; ?></p>
</div><!-- .copyright -->