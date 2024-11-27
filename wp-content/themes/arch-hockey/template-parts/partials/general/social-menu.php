<?php

/**
 * Template part for displaying social links partial
 */
?>

<?php
// Get Theme Options
$social_links = get_field('social_links', 'option');
?>

<div class="social-links d-flex justify-content-end align-items-center">
    <?php if ($social_links['facebook']) : ?>
        <a href="<?php echo $social_links['facebook']; ?>" target="_blank" class="d-flex justify-content-center align-items-center">
            <span class="social-icon d-flex justify-content-center align-items-center color-white color-primary-hover mx-1">
                <i class="fab fa-facebook-f"></i>
            </span><!-- .social-icon -->
        </a>
    <?php endif; ?>

    <?php if ($social_links['twitter']) : ?>
        <a href="<?php echo $social_links['twitter']; ?>" target="_blank" class="d-flex justify-content-center align-items-center color-white anchor-white-hover">
            <span class="social-icon d-flex justify-content-center align-items-center mx-1">
                <i class="fab fa-twitter"></i>
            </span><!-- .social-icon -->
        </a>
    <?php endif; ?>

    <?php if ($social_links['instagram']) : ?>
        <a href="<?php echo $social_links['instagram']; ?>" target="_blank" class="d-flex justify-content-center align-items-center color-white anchor-white-hover">
            <span class="social-icon d-flex justify-content-center align-items-center mx-1">
                <i class="fab fa-instagram"></i>
            </span><!-- .social-icon -->
        </a>
    <?php endif; ?>

    <?php if ($social_links['linkedin']) : ?>
        <a href="<?php echo $social_links['linkedin']; ?>" target="_blank" class="d-flex justify-content-center align-items-center color-white anchor-white-hover">
            <span class="social-icon d-flex justify-content-center align-items-center mx-1">
                <i class="fab fa-linkedin"></i>
            </span><!-- .social-icon -->
        </a>
    <?php endif; ?>

    <?php if ($social_links['youtube']) : ?>
        <a href="<?php echo $social_links['youtube']; ?>" target="_blank" class="d-flex justify-content-center align-items-center color-white anchor-white-hover">
            <span class="social-icon d-flex justify-content-center align-items-center mx-1">
                <i class="fa-brands fa-youtube"></i>
            </span><!-- .social-icon -->
        </a>
    <?php endif; ?>

    <?php if ($social_links['tiktok']) : ?>
        <a href="<?php echo $social_links['tiktok']; ?>" target="_blank" class="d-flex justify-content-center align-items-center color-white anchor-white-hover">
            <span class="social-icon d-flex justify-content-center align-items-center mx-1">
                <i class="fa-brands fa-tiktok"></i>
            </span><!-- .social-icon -->
        </a>
    <?php endif; ?>

</div><!-- .social-links -->