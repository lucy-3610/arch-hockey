<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bplate
 */

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <section class="error-404 not-found my-5 text-center">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e('404: The page can not be found.', 'bplate'); ?></h1>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            </header><!-- .page-header -->

            <div class="page-content">
                <p class="my-4"><?php esc_html_e('It looks like nothing was found at this location. Try searching.', 'bplate'); ?></p>

                <?php get_search_form(); ?>

            </div><!-- .page-content -->
        </section><!-- .error-404 -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
