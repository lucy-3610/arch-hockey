<?php
/**
 * Template part for displaying social links partial
 */
?>

<?php
// Get Theme Options
$social_links = get_field('social_links', 'option');
?>

<div class="social-links d-flex justify-content-start align-items-center">
    <?php if ($social_links['facebook']): ?>
        <div class="social-icon d-flex justify-content-center align-items-center mx-1">
            <a href="<?php echo $social_links['facebook']; ?>" target="_blank" class="d-flex justify-content-center align-items-center anchor-primary anchor-white-hover">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
        </div><!-- .social-icon -->
    <?php endif; ?>

    <?php if ($social_links['twitter']): ?>
        <div class="social-icon d-flex justify-content-center align-items-center mx-1">
            <a href="<?php echo $social_links['twitter']; ?>" target="_blank" class="d-flex justify-content-center align-items-center anchor-primary anchor-white-hover">
                <i class="fa-brands fa-twitter"></i>
            </a>
        </div><!-- .social-icon -->
    <?php endif; ?>

    <?php if ($social_links['instagram']): ?>
        <div class="social-icon d-flex justify-content-center align-items-center mx-1">
            <a href="<?php echo $social_links['instagram']; ?>" target="_blank" class="d-flex justify-content-center align-items-center anchor-primary anchor-white-hover">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div><!-- .social-icon -->
    <?php endif; ?>

    <?php if ($social_links['linkedin']): ?>
        <div class="social-icon d-flex justify-content-center align-items-center mx-1">
            <a href="<?php echo $social_links['linkedin']; ?>" target="_blank" class="d-flex justify-content-center align-items-center anchor-primary anchor-white-hover">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
        </div><!-- .social-icon -->
    <?php endif; ?>

    <?php if ($social_links['youtube']): ?>
        <div class="social-icon d-flex justify-content-center align-items-center mx-1">
            <a href="<?php echo $social_links['youtube']; ?>" target="_blank" class="d-flex justify-content-center align-items-center anchor-primary anchor-white-hover">
                <i class="fa-brands fa-youtube"></i>
            </a>
        </div><!-- .social-icon -->
    <?php endif; ?>

    <?php if ($social_links['tiktok']): ?>
        <div class="social-icon d-flex justify-content-center align-items-center mx-1">
            <a href="<?php echo $social_links['tiktok']; ?>" target="_blank" class="d-flex justify-content-center align-items-center anchor-primary anchor-white-hover">
                <i class="fa-brands fa-tiktok"></i>
            </a>
        </div><!-- .social-icon -->
    <?php endif; ?>

</div><!-- .social-links -->