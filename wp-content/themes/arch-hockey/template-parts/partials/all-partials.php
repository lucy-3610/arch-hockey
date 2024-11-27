<?php

/**
 * Template part for pulling all partials
 */
?>

<?php // Flexible Content Blocks

// Button
if (get_row_layout() == 'button') :
	get_template_part('template-parts/partials/content-blocks/button');

// Custom Content: Container-Fluid
elseif (get_row_layout() == 'custom_content_full_width') :
	get_template_part('template-parts/partials/content-blocks/custom-content-full', 'width');

// Custom Content: Container
elseif (get_row_layout() == 'custom_content_max_width') :
	get_template_part('template-parts/partials/content-blocks/custom-content-max', 'width');

// Divider
elseif (get_row_layout() == 'divider') :
	get_template_part('template-parts/partials/content-blocks/divider');

// Events
elseif (get_row_layout() == 'events') :
	get_template_part('template-parts/partials/content-blocks/events');

// Form
elseif (get_row_layout() == 'form') :
	get_template_part('template-parts/partials/content-blocks/form');

// Google Maps
elseif (get_row_layout() == 'google_maps') :
	get_template_part('template-parts/partials/content-blocks/google', 'maps');

// Header
elseif (get_row_layout() == 'header') :
	get_template_part('template-parts/partials/content-blocks/header');

// Hero
elseif (get_row_layout() == 'hero') :
	get_template_part('template-parts/partials/content-blocks/hero');

// Home Hero
elseif (get_row_layout() == 'hero_home') :
	get_template_part('template-parts/partials/content-blocks/hero', 'home');

// Image Gallery
elseif (get_row_layout() == 'image_gallery') :
	get_template_part('template-parts/partials/content-blocks/image', 'gallery');

// Instagram Feed
elseif (get_row_layout() == 'instagram_feed') :
	get_template_part('template-parts/partials/content-blocks/instagram', 'feed');

// Locations
elseif (get_row_layout() == 'locations') :
	get_template_part('template-parts/partials/content-blocks/locations');

// Membership Signup
elseif (get_row_layout() == 'membership_signup') :
	get_template_part('template-parts/partials/content-blocks/membership', 'signup');

// Memberships
elseif (get_row_layout() == 'memberships') :
	get_template_part('template-parts/partials/content-blocks/memberships');

// Pricing
elseif (get_row_layout() == 'pricing') :
	get_template_part('template-parts/partials/content-blocks/pricing');

// Quote
elseif (get_row_layout() == 'quote') :
	get_template_part('template-parts/partials/content-blocks/quote');

// Seniors
elseif (get_row_layout() == 'seniors') :
	get_template_part('template-parts/partials/content-blocks/seniors');

// Spacer
elseif (get_row_layout() == 'spacer') :
	get_template_part('template-parts/partials/content-blocks/spacer');

// Sponsors
elseif (get_row_layout() == 'sponsors') :
	get_template_part('template-parts/partials/content-blocks/sponsors');

// Video
elseif (get_row_layout() == 'video') :
	get_template_part('template-parts/partials/content-blocks/video');

endif; ?>