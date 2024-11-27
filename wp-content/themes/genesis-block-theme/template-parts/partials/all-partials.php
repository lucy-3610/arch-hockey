<?php

/**
 * Template part for pulling all partials
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<?php // Flexible Content Blocks

// Checklist
if (get_row_layout() == 'checklist_block') :
    get_template_part('template-parts/partials/content-blocks/checklist');

// Checklist
elseif (get_row_layout() == 'knockout_checklist') :
    get_template_part('template-parts/partials/content-blocks/knockout', 'checklist');

// Cards
elseif (get_row_layout() == 'cards') :
    get_template_part('template-parts/partials/content-blocks/cards');

// Custom Content: Container
elseif (get_row_layout() == 'custom_content') :
    get_template_part('template-parts/partials/content-blocks/custom', 'content');

// Gravity Forms
elseif (get_row_layout() == 'form') :
    get_template_part('template-parts/partials/content-blocks/form');

// Image
elseif (get_row_layout() == 'image') :
    get_template_part('template-parts/partials/content-blocks/image');

// Image and Text
elseif (get_row_layout() == 'image_text') :
    get_template_part('template-parts/partials/content-blocks/img', 'text');

// Spacer
elseif (get_row_layout() == 'spacer') :
    get_template_part('template-parts/partials/content-blocks/spacer');

// Text
elseif (get_row_layout() == 'text') :
    get_template_part('template-parts/partials/content-blocks/text');

// Video
elseif (get_row_layout() == 'video') :
    get_template_part('template-parts/partials/content-blocks/video');

endif; ?>