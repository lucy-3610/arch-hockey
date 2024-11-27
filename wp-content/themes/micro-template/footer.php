<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

</div><!-- .main-content -->

<!-- FOOTER
		======================================== -->
<footer class="footer text-white text-center text-xl-left bg-theme-secondary">
    <div class="container-fluid">
        <div class="row justify-content-center justify-content-lg-between py-4">
            <div class="col-12">
                <nav class="navbar navbar-expand-sm" role="navigation">
                    <div class="container-fluid">
                        <div class="row flex-column flex-xl-row justify-content-center justify-content-xl-between w-100 mx-auto">
                            <div class="col-xl-8">
                                <p class="mb-0 mb-lg-3 mb-xl-0">&copy; <?php echo date("Y"); ?> Arch Hockey</p>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <?php get_template_part('template-parts/partials/general/social', 'menu'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="mobile-nav d-block d-xl-none flex-column mx-auto">
                        <?php get_template_part('template-parts/partials/general/social', 'menu'); ?>
                    </div>
                </nav><!-- nav -->
            </div>
        </div>
    </div>
</footer><!-- footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Page Footer Scripts -->
<?php the_field('footer_script'); ?>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>