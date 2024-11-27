<?php

/**
 * View: Default Template for Events
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/default-template.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.0.0
 */

use Tribe\Events\Views\V2\Template_Bootstrap;

$heading             = get_sub_field('heading');
$subheading             = get_sub_field('subheading');

get_header(); ?>

<!-- SPACER
	========================= -->
<section class="spacer">
    <div class="container-fluid">
        <div class="row">
            <div class="my-3 my-sm-4 my-md-4 my-lg-4 my-xl-4"></div>
        </div>
    </div>
</section>

<!-- HEADER 
	======================================== -->
<section class="header-partial">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3>See What’s Going On</h3>
                <h1 class="text-shadow">BCHS Events</h1>
            </div>
        </div>
    </div><!-- /.container -->
</section><!-- /.header-partial -->

<!-- SPACER
	========================= -->
<section class="spacer">
    <div class="container-fluid">
        <div class="row">
            <div class="my-3 my-sm-3 my-md-3 my-lg-3 my-xl-3"></div>
        </div>
    </div>
</section>

<!-- DIVIDER 
	======================================== -->
<?php get_template_part('template-parts/partials/content-blocks/divider'); ?>

<?php echo tribe(Template_Bootstrap::class)->get_view_html(); ?>

<!-- MEMBERSHIPS 
	======================================== -->
<section class="memberships">
    <div class="container my-4 my-sm-3">
        <div class="row d-flex align-items-center color-white text-center text-lg-left">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <h2 class="f-400">Join The Team</h2>
                <h2>Behind The <span class="f-400">Team</span></h2>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column flex-sm-row flex-lg-column flex-xl-row justify-content-center justify-content-lg-end">
                    <a class="btn bg-white color-black anchor-primary-hover" rel="noopener noreferrer" href="<?php echo site_url('/members'); ?>">Member Signup</a>
                    <a class="btn bg-white color-black anchor-primary-hover ml-sm-3 ml-lg-0 ml-xl-3 mt-3 mt-sm-0 mt-lg-3 mt-xl-0" rel="noopener noreferrer" href="<?php echo site_url('/business-sponsors'); ?>">Sponsor Signup</a>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.memberships -->

<?php get_footer();
