<?php

/**
 * The template for displaying the footer content
 */
?>

<?php
// Get Theme Options
$google_maps_url       = get_field('google_maps_url', 'option');
$address_line_1        = get_field('address_line_1', 'option');
$city_state_zip        = get_field('city_state_zip', 'option');
$email_address         = get_field('email_address', 'option');
$sitemap_url           = get_field('sitemap_url', 'option');
?>

<section class="bg-black color-white pt-4 pb-2">
    <div class="container-fluid container-xl footer-content-wrap">
        <!-- Footer Content -->
        <div class="row my-4">
            <div class="col-lg-4 border-primary">
                <div class="d-flex justify-content-center mb-4">
                    <?php get_template_part('template-parts/partials/general/small', 'logo'); ?>
                </div>
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <a class="color-white color-primary-hover" target="_blank" rel="noopener noreferrer" href="<?php echo $google_maps_url; ?>">
                        <div class="d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-location-dot fa-2x mr-2"></i>
                            <div>
                                <?php echo $address_line_1; ?>
                                <br>
                                <?php echo $city_state_zip; ?>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="d-flex justify-content-center align-items-center mb-3">
                    <a class="color-white color-primary-hover" target="_blank" rel="noopener noreferrer" href="mailto:<?php echo $email_address; ?>">
                        <i class="fa-solid fa-envelope fa-xl mr-2"></i>
                        <?php echo $email_address; ?>
                    </a>
                </div>

                <div class="d-flex justify-content-center">
                    <?php get_template_part('template-parts/partials/general/social', 'menu'); ?>
                </div>
            </div><!-- .col-4 -->

            <div class="col-lg-4 border-primary">
                <h3 class="text-center text-uppercase mt-5 mt-lg-0 mb-3">Navigation</h3>
                <div class="section-divider"></div>
                <?php get_template_part('template-parts/footer/footer', 'nav-wrap'); ?>
            </div><!-- .col-4 -->

            <div class="col-lg-4">
                <h3 class="text-center text-uppercase mt-4 mt-lg-0 mb-3">Upcoming Events</h3>
                <div class="section-divider"></div>
                <div class="p-2 py-lg-4">
                    <?php dynamic_sidebar('footer'); ?>
                </div>
            </div><!-- .col-4 -->
        </div><!-- .row -->

        <div class="row justify-content-center footer-fz">
            <div class="col d-flex justify-content-center mb-2">
                <form action="https://www.paypal.com/donate" method="post" target="_top">
                    <input type="hidden" name="business" value="23EHA9W72SWMG" />
                    <input type="hidden" name="no_recurring" value="0" />
                    <input type="hidden" name="currency_code" value="USD" />
                    <input type="image" src="https://pics.paypal.com/00/s/MTUyMmQ5NmQtYzc4Zi00NzY5LWFmZTgtM2EwNzFiNmIxOWRl/file.PNG" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                    <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
                </form>
            </div>
            <div class="col-12 text-center">
                <a class="color-white color-primary-hover" href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a> | <a class="color-white color-primary-hover" href="<?php echo site_url('/terms-conditions'); ?>">Terms and Conditions</a> | <a class="color-white color-primary-hover" href="/<?php echo $sitemap_url; ?>">Sitemap</a>
            </div><!-- .col-12 -->
        </div><!-- .row -->
    </div><!-- .footer-wrap -->
</section><!-- /.footer-middle -->

<section class="footer-fz color-secondary">
    <div class="container text-center">
        <div class="row my-2">
            <div class="col">
                <!-- Copyright -->
                &copy; <?php echo date("Y"); ?> Baker County High School. All Rights Reserved. Developed by <a class="color-secondary color-primary-hover" target="_blank" rel="noopener noreferrer" href="https://www.majoritystrategies.com/">Majority Strategies</a>
            </div><!-- .col-12 -->
        </div><!-- .row -->
    </div><!-- /.container -->
</section><!-- /.footer-fz -->