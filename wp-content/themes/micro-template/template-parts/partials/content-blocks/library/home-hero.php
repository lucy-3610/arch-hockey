<?php

/**
    Template part for displaying the Home Hero BG Video partial
 */

//Advanced Custom Fields 

$bg_video 	= get_sub_field('bg_video');
?>

<!-- Home Hero BG Video
========================= -->
<section class="hero-video-bg">
    <div class="container">
        <div class="row">
        
            <div class="hero-video d-none d-md-block">
                <div class="video w-100 h-100">
                    <video autoplay="" playsinline="" loop="" muted="" id="video-bg">
                        <source src="https://devmultus.wpengine.com/wp-content/uploads/2021/07/logo_intro.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        
        </div>
    </div>
</section>