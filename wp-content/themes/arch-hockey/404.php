<?php

/**
 * The template for displaying 404 page
 */

get_header();
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="page-content">

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center mt-5 mb-4">
                            <div class="404-header mb-5 pt-5">
                                <h1 class="mb-2">Page not found.</h1>
                                <h4>We can't seem to find what you are looking for.</h4>
                            </div>

                            <div class="404-search-box">
                                <p class="color-secondary mb-2">Please return to the <a class="color-primary color-secondary-hover" href="<?php echo get_site_url(); ?>">home page</a>.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </article><!-- #post-<?php the_ID(); ?> -->

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
