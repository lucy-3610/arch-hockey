<?php

/*
    Template Name: Checklist Page Template
*/

get_header(); ?>

<?php // Flexible Content
if (have_rows('content_blocks')) :
    while (have_rows('content_blocks')) : the_row();
        get_template_part('template-parts/partials/all', 'partials');
    endwhile;
endif; ?>

<?php get_footer(); ?>