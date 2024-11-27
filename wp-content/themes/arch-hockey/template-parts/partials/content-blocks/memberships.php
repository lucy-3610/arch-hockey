<?php

/**
 * Template part for displaying the memberships partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
?>

<?php if (empty($hide_block)) : ?>

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
                        <a class="btn bg-white bg-theme-primary-hover color-black anchor-white-hover" rel="noopener noreferrer" href="<?php echo site_url('/memberships/personal-membership'); ?>">Personal Membership</a>
                        <a class="btn bg-white bg-theme-primary-hover color-black anchor-white-hover ml-sm-3 ml-lg-0 ml-xl-3 mt-3 mt-sm-0 mt-lg-3 mt-xl-0" rel="noopener noreferrer" href="<?php echo site_url('/memberships/business-membership'); ?>">Business Membership</a>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.memberships -->

<?php endif; ?>