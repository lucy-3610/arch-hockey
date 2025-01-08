<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="icon" type="image/svg+xml" href="/wp-content/uploads/2024/08/2024-ArchHockey-1-color.svg">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/slick-1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/slick-1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="../../themes/micro-template/assets/slick-1.8.1/slick/slick.css" /> -->

    <!-- Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/vzx4quv.css">

    <?php // Theme Options
    get_template_part('options/theme', 'styles');
    ?>

    <!-- Page Header Scripts -->
    <?php the_field('header_script'); ?>

    <?php wp_head(); ?>
</head>

<?php // ACF Page ID
$page_id = get_field('page_id');
?>

<body <?php if ($page_id) : echo 'id="' . $page_id . '" ';
        endif; ?><?php body_class($page_id . '-page'); ?>>

    <div id="page" class="site position-relative">
        <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'twentynineteen'); ?></a>

        <!-- HEADER/NAV
		======================================== -->
        <!-- <div class="toast mb-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
            <div class="toast-header">
                <strong class="mx-auto">The winter session has begun at Florissant Ice Rink.</strong>
                <button type="button" data-bs-dismiss="toast" class="ml-2 mb-1 close btn-close" aria-label="Close">
                    <span aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </span>
                </button>
            </div>
        </div> -->
        <header id="masthead" class="site-header">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-lg-between py-4">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg align-items-center p-0" role="navigation">
                            <div class="container-fluid">
                                <div class="row justify-content-center justify-content-xl-between w-100 mx-auto">

                                    <div class="col-xl-9 d-flex flex-column flex-lg-row justify-content-center">
                                        <div class="mx-auto">
                                            <?php get_template_part('template-parts/partials/general/logo'); ?>
                                        </div>
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location'    => 'primary',
                                            'depth'             => 2,
                                            'container'         => 'div',
                                            'container_class'   => 'header-collapse collapse navbar-collapse align-items-center',
                                            'container_id'      => 'navbarCollapse',
                                            'menu_class'        => 'nav navbar-nav mx-auto ml-lg-4 mt-3 mt-lg-0',
                                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'            => new WP_Bootstrap_Navwalker(),
                                        ));
                                        ?>
                                    </div>
                                    <div class="col-xl-3 d-none d-xl-flex justify-content-end align-items-center">
                                        <?php get_template_part('template-parts/partials/general/social', 'menu'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- CHANGE ME to Client's name -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'Change Me'); ?>"><span class="navbar-toggler-icon"></span></button>

                            <div class="mobile-nav d-block d-xl-none flex-column mx-auto">
                                <?php get_template_part('template-parts/partials/general/social', 'menu'); ?>
                            </div>
                        </nav><!-- nav -->
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->

        <div class="main-content">