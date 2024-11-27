<?php

/**
 * Template that generates CSS from the theme styles
 */

//Pull Theme Options
$header_font_link       = get_field('header_font_link', 'option');
$header_font_family     = get_field('header_font_family', 'option');
$body_font_link         = get_field('body_font_link', 'option');
$body_font_family       = get_field('body_font_family', 'option');
$theme_primary_color    = get_field('theme_primary_color', 'option');
$theme_secondary_color  = get_field('theme_secondary_color', 'option');
$theme_tertiary_color   = get_field('theme_tertiary_color', 'option');
$theme_quaternary_color = get_field('theme_quaternary_color', 'option');

// Opaque Primary Color
$rgba_primary = hex2rgba($theme_primary_color, 0.7);

// Opaque Secondary Color
$color = $theme_secondary_color;
$rgb = hex2rgba($color);
$rgba = hex2rgba($color, 0.5);
?>

<!-- Theme Font-Family -->
<?php echo $header_font_link; ?>
<?php echo $body_font_link; ?>

<!-- Theme Styles -->
<style type="text/css">
    /* --------------------
        General
    -------------------- */
    body {
        font-family: <?php echo $body_font_family; ?> !important;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Montserrat', sans-serif !important;
    }

    .font-header {
        font-family: <?php echo $header_font_family; ?> !important;
    }

    .font-body {
        font-family: <?php echo $body_font_family; ?> !important;
    }

    /* --------------------
        Text
    -------------------- */
    .tribe-common .tribe-common-c-svgicon,
    .color-primary {
        color: <?php echo $theme_primary_color; ?> !important;
    }

    .color-secondary {
        color: <?php echo $theme_secondary_color; ?> !important;
    }

    .color-tertiary {
        color: <?php echo $theme_tertiary_color; ?> !important;
    }

    .color-quaternary {
        color: <?php echo $theme_quaternary_color; ?> !important;
    }

    /* Color Hovers */
    .gform_footer .gform_button:hover,
    .gform_footer .gform_button:focus,
    footer .tribe-common .tribe-common-anchor-thin:hover,
    footer .tribe-common .tribe-common-anchor-thin:focus,
    .color-primary-hover:hover,
    .color-primary-hover:focus {
        color: <?php echo $theme_primary_color; ?> !important;
    }

    .color-secondary-hover:hover,
    .color-secondary-hover:focus {
        color: <?php echo $theme_secondary_color; ?> !important;
    }

    .color-tertiary-hover:hover,
    .color-tertiary-hover:focus {
        color: <?php echo $theme_tertiary_color; ?> !important;
    }

    .color-quaternary-hover:hover,
    .color-quaternary-hover:focus {
        color: <?php echo $theme_quaternary_color; ?> !important;
    }

    /* --------------------
        Backgrounds
    -------------------- */
    .tribe-events .tribe-events-c-search__button,
    .tribe-common--breakpoint-medium.tribe-events .tribe-events-c-view-selector--tabs .tribe-events-c-view-selector__list-item--active .tribe-events-c-view-selector__list-item-link:after,
    .bg-theme-primary {
        background: <?php echo $theme_primary_color; ?> !important;
    }

    .bg-theme-secondary {
        background: <?php echo $theme_secondary_color; ?> !important;
    }

    .section-divider,
    .bg-theme-tertiary {
        background: <?php echo $theme_tertiary_color; ?> !important;
    }

    .bg-theme-quaternary {
        background: <?php echo $theme_quaternary_color; ?> !important;
    }

    /* Background Hovers */
    .bg-theme-primary-hover:hover {
        background: <?php echo $theme_primary_color; ?> !important;
    }

    .bg-theme-secondary-hover:hover {
        background: <?php echo $theme_secondary_color; ?> !important;
    }

    .bg-theme-secondary-opaque-hover:hover {
        background: <?php echo $rgba; ?> !important;
    }

    .bg-theme-tertiary-hover:hover {
        background: <?php echo $theme_tertiary_color; ?> !important;
    }

    .bg-theme-quaternary-hover:hover {
        background: <?php echo $theme_quaternary_color; ?> !important;
    }

    /* --------------------
        Anchor Text 
    -------------------- */
    a.anchor-primary {
        color: <?php echo $theme_primary_color; ?> !important;
    }

    a.anchor-secondary {
        color: <?php echo $theme_secondary_color; ?> !important;
    }

    a.anchor-tertiary {
        color: <?php echo $theme_tertiary_color; ?> !important;
    }

    a.anchor-quaternary {
        color: <?php echo $theme_quaternary_color; ?> !important;
    }

    /* Anchor Hovers */
    a.anchor-primary-hover:hover {
        color: <?php echo $theme_primary_color; ?> !important;
    }

    a.anchor-secondary-hover:hover {
        color: <?php echo $theme_secondary_color; ?> !important;
    }

    a.anchor-tertiary-hover:hover {
        color: <?php echo $theme_tertiary_color; ?> !important;
    }

    a.anchor-quaternary-hover:hover {
        color: <?php echo $theme_quaternary_color; ?> !important;
    }

    a.anchor-white-hover:hover {
        color: #fff !important;
    }

    /* Anchor .active Class */
    li.main-menu-item.active a.anchor-primary-active {
        color: <?php echo $theme_primary_color; ?> !important;
    }

    li.main-menu-item.active a.anchor-secondary-active {
        color: <?php echo $theme_secondary_color; ?> !important;
    }

    li.main-menu-item.active a.anchor-tertiary-active {
        color: <?php echo $theme_tertiary_color; ?> !important;
    }

    li.main-menu-item.active a.anchor-quaternary-active {
        color: <?php echo $theme_quaternary_color; ?> !important;
    }

    /* --------------------
        Buttons 
    -------------------- */
    .btn-theme-primary {
        background: <?php echo $theme_primary_color; ?> !important;
    }

    .btn-theme-secondary {
        background: <?php echo $theme_secondary_color; ?> !important;
    }

    .btn-theme-tertiary {
        background: <?php echo $theme_tertiary_color; ?> !important;
    }

    .btn-theme-quaternary {
        background: <?php echo $theme_quaternary_color; ?> !important;
    }

    /* Button Hovers Only */
    .btn-theme-primary-hover:hover {
        background: <?php echo $theme_primary_color; ?> !important;
    }

    .btn-theme-secondary-hover:hover {
        background: <?php echo $theme_secondary_color; ?> !important;
    }

    .btn-theme-secondary:active {
        background: <?php echo $theme_primary_color; ?> !important;
    }

    .btn-theme-tertiary-hover:hover {
        background: <?php echo $theme_tertiary_color; ?> !important;
    }

    .btn-theme-quaternary-hover:hover {
        background: <?php echo $theme_quaternary_color; ?> !important;
    }

    /* Border Buttons */
    .tribe-common .tribe-common-c-btn-border,
    .tribe-common a.tribe-common-c-btn-border,
    .btn-theme-primary-bd {
        background: transparent;
        border: 1px solid <?php echo $theme_primary_color; ?>;
        color: <?php echo $theme_primary_color; ?> !important;
    }

    .tribe-events .datepicker .day.active,
    .tribe-events .datepicker .day.active.focused,
    .tribe-events .datepicker .day.active:focus,
    .tribe-events .datepicker .day.active:hover,
    .tribe-events .datepicker .month.active,
    .tribe-events .datepicker .month.active.focused,
    .tribe-events .datepicker .month.active:focus,
    .tribe-events .datepicker .month.active:hover,
    .tribe-events .datepicker .year.active,
    .tribe-events .datepicker .year.active.focused,
    .tribe-events .datepicker .year.active:focus,
    .tribe-events .datepicker .year.active:hover,
    .single-tribe_events .tribe-events-c-subscribe-dropdown .tribe-events-c-subscribe-dropdown__button.tribe-events-c-subscribe-dropdown__button--active,
    .single-tribe_events .tribe-events-c-subscribe-dropdown .tribe-events-c-subscribe-dropdown__button:focus,
    .single-tribe_events .tribe-events-c-subscribe-dropdown .tribe-events-c-subscribe-dropdown__button:focus-within,
    .single-tribe_events .tribe-events-c-subscribe-dropdown .tribe-events-c-subscribe-dropdown__button:hover,
    .tribe-events .tribe-events-c-subscribe-dropdown .tribe-events-c-subscribe-dropdown__button.tribe-events-c-subscribe-dropdown__button--active,
    .tribe-events .tribe-events-c-subscribe-dropdown .tribe-events-c-subscribe-dropdown__button:focus,
    .tribe-events .tribe-events-c-subscribe-dropdown .tribe-events-c-subscribe-dropdown__button:focus-within,
    .tribe-events .tribe-events-c-subscribe-dropdown .tribe-events-c-subscribe-dropdown__button:hover {
        background: <?php echo $theme_primary_color; ?> !important;
        color: #fff !important;
    }

    footer .tribe-events-widget .tribe-events-widget-events-list__view-more-link:active,
    footer .tribe-events-widget .tribe-events-widget-events-list__view-more-link:focus,
    footer .tribe-events-widget .tribe-events-widget-events-list__view-more-link:hover {
        border-bottom-color: transparent;
    }

    footer .tribe-common .tribe-common-anchor-thin:active,
    footer .tribe-common .tribe-common-anchor-thin:focus,
    footer .tribe-common .tribe-common-anchor-thin:hover {
        border-bottom: 1px solid transparent;
    }

    .btn-theme-primary-bd:hover {
        background: <?php echo $theme_primary_color; ?>;
        border: 1px solid <?php echo $theme_primary_color; ?>;
        color: #fff !important;
    }

    .btn-theme-secondary-bd {
        background: transparent;
        border: 1px solid <?php echo $theme_secondary_color; ?>;
        color: <?php echo $theme_secondary_color; ?> !important;
    }

    .btn-theme-secondary-bd:hover {
        background: <?php echo $theme_secondary_color; ?>;
        border: 1px solid <?php echo $theme_secondary_color; ?>;
        color: #fff !important;
    }

    .btn-theme-tertiary-bd {
        background: transparent;
        border: 1px solid <?php echo $theme_tertiary_color; ?>;
        color: <?php echo $theme_tertiary_color; ?> !important;
    }

    .btn-theme-tertiary-bd:hover {
        background: <?php echo $theme_tertiary_color; ?>;
        border: 1px solid <?php echo $theme_tertiary_color; ?>;
        color: #fff !important;
    }

    .btn-theme-quaternary-bd {
        background: transparent;
        border: 1px solid <?php echo $theme_quaternary_color; ?>;
        color: <?php echo $theme_quaternary_color; ?> !important;
    }

    .btn-theme-quaternary-bd:hover {
        background: <?php echo $theme_quaternary_color; ?>;
        border: 1px solid <?php echo $theme_quaternary_color; ?>;
        color: #fff !important;
    }

    /* WP Search Button */
    input.search-submit {
        background: <?php echo $theme_primary_color; ?>;
        border-radius: 0;
    }

    /* --------------------
        Border 
    -------------------- */
    .tribe-common .tribe-common-c-btn-border,
    .tribe-common a.tribe-common-c-btn-border,
    .border-primary {
        border-color: <?php echo $theme_primary_color; ?> !important;
    }

    .border-secondary {
        border-color: <?php echo $theme_secondary_color; ?> !important;
    }

    .border-tertiary {
        border-color: <?php echo $theme_tertiary_color; ?> !important;
    }

    .border-quaternary {
        border-color: <?php echo $theme_quaternary_color; ?> !important;
    }

    /* Border Hovers */
    .border-primary-hover:hover {
        border-color: <?php echo $theme_primary_color; ?> !important;
    }

    .border-secondary-hover:hover {
        border-color: <?php echo $theme_secondary_color; ?> !important;
    }

    .border-tertiary-hover:hover {
        border-color: <?php echo $theme_tertiary_color; ?> !important;
    }

    .border-quaternary-hover:hover {
        border-color: <?php echo $theme_quaternary_color; ?> !important;
    }

    /* --------------------
        Pseudo Classes
    -------------------- */
    /* Before */
    .before-primary *:before {
        color: <?php echo $theme_primary_color; ?> !important;
    }

    .before-secondary *:before {
        color: <?php echo $theme_secondary_color; ?> !important;
    }

    .before-tertiary *:before {
        color: <?php echo $theme_tertiary_color; ?> !important;
    }

    .before-quaternary *:before {
        color: <?php echo $theme_quaternary_color; ?> !important;
    }

    /* After */
    .after-primary *:after {
        color: <?php echo $theme_primary_color; ?> !important;
    }

    .after-secondary *:after {
        color: <?php echo $theme_secondary_color; ?> !important;
    }

    .after-tertiary *:after {
        color: <?php echo $theme_tertiary_color; ?> !important;
    }

    .after-quaternary *:after {
        color: <?php echo $theme_quaternary_color; ?> !important;
    }

    /* --------------------
        Miscellaneous 
    -------------------- */
    /* Modal Close */
    .close {
        color: <?php echo $theme_primary_color; ?> !important;
    }

    /* Google Maps */
    .gm-style {
        font-family: <?php echo $body_font_family; ?> !important;
    }

    /* Sub-Menu Top Arrow */
    .desktop-navigation .sub-menu:after {
        border-bottom-color: <?php echo $theme_primary_color; ?> !important;
    }

    .desktop-navigation .sub-menu-item:hover {
        border-left: 3px solid <?php echo $theme_primary_color; ?> !important;
    }

    .filter h3 {
        cursor: pointer;
    }

    .filter h3.active {
        position: relative;
    }

    .filter h3.active:before {
        width: 100% !important;
        height: 2px !important;
    }

    /* Footer Links */
    .filter h3.active:before,
    .tribe-events-widget-events-list__view-more-link::before,
    .footer .main-menu-item a:not(.anchor-tertiary)::before {
        background: <?php echo $theme_primary_color; ?> !important;
        position: absolute;
        content: ' ';
        bottom: -4px;
        width: 30px;
        height: 1px;
    }

    .tribe-events-widget-events-list__view-more-link {
        position: relative;
        margin: 1rem !important;
    }

    .social-icon svg:hover,
    .social-icon svg:focus {
        color: <?php echo $theme_primary_color; ?> !important;
    }

    /* Text Overlay Arrow */
    .overlay-content.order-md-1:before {
        border-right: 20px solid <?php echo $theme_primary_color; ?> !important;
    }

    .overlay-content.order-md-0:before {
        border-left: 20px solid <?php echo $theme_primary_color; ?> !important;
        left: unset !important;
        right: -40px !important;
    }

    /* Sitemap */
    .sitemap .page_item a:hover {
        color: <?php echo $theme_primary_color; ?> !important;
    }

    /* Home Hero Overlay */
    .overlay {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background: <?php echo $rgba_primary; ?> !important;
        clip-path: polygon(49% 0, 100% 0%, 100% 100%, 37% 100%);
    }

    /* Seniors Partial */
    .seniors::before,
    .seniors::after {
        background: <?php echo $theme_primary_color; ?> !important;
        position: absolute;
        content: ' ';
        left: 50%;
        transform: translateX(-50%);
        width: 1px;
        height: 35%;
    }

    .seniors::before {
        top: 7%;
    }

    .seniors::after {
        bottom: 7%;
    }

    .seniors h3 {
        margin: 0.5rem 0;
    }

    /* Membership Signup Partial */
    .membership-signup h2::after {
        background: <?php echo $theme_primary_color; ?> !important;
        position: absolute;
        content: ' ';
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 150px;
        height: 1px;
    }

    input[type=checkbox] {
        -moz-appearance: none;
        -webkit-appearance: none;
        -o-appearance: none;
        outline: none;
        content: none;
    }

    input[type=checkbox]:before {
        font-family: "FontAwesome";
        content: "\f00c";
        font-size: 20px;
        line-height: 1;
        color: transparent !important;
        background: white;
        display: block;
        width: 21px;
        height: 21px;
        border: 1px solid white;
    }

    input[type=checkbox]:checked:before {
        color: <?php echo $theme_secondary_color; ?> !important;
    }

    /* Modal */
    .modal .modal-dialog {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) !important;
        width: 920px;
        max-width: 920px;
    }

    .modal-content {
        border: none;
        background-color: white;
    }

    .modal-header {
        border: none;
        padding: 0;
    }

    .modal-header .close {
        padding: 1rem 1rem;
        margin: -2.25rem -0.25rem -1rem auto;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
        background: <?php echo $theme_primary_color; ?> !important;
        opacity: 1;
        border-radius: 55px;
        padding: 0 5px 5px 5px;
        height: 42px;
        width: 42px;
        color: <?php echo $theme_quaternary_color; ?> !important;
        font-size: 28px;
        font-weight: 600;
        position: relative;
        top: 30px;
        left: 15px;
        z-index: 2;
    }

    .modal-header .close:not(:disabled):focus,
    .modal-header .close:not(:disabled):hover {
        opacity: 1;
        color: <?php echo $theme_primary_color; ?> !important;
        background: <?php echo $theme_quaternary_color; ?> !important;
    }

    .modal-body {
        padding: 0;
    }

    .tribe-common--breakpoint-medium.tribe-events .tribe-events-calendar-month__day:hover:after {
        display: none;
    }

    .tribe-events-calendar-month__day-date-link {
        color: <?php echo $theme_primary_color; ?> !important;
        font-weight: 700;
    }

    .tribe-common .tribe-common-anchor-thin-alt:active,
    .tribe-common .tribe-common-anchor-thin-alt:focus,
    .tribe-common .tribe-common-anchor-thin-alt:hover {
        color: <?php echo $theme_primary_color; ?> !important;
    }

    .tribe-common .tribe-common-c-svgicon--messages-not-found .tribe-common-c-svgicon__svg-stroke {
        stroke: <?php echo $theme_primary_color; ?> !important;
    }

    .single-tribe_events .tribe-events-c-subscribe-dropdown .tribe-events-c-subscribe-dropdown__button:hover .tribe-common-c-svgicon,
    .tribe-events .tribe-events-c-subscribe-dropdown .tribe-events-c-subscribe-dropdown__button:hover .tribe-common-c-svgicon,
    .single-tribe_events .tribe-events-c-subscribe-dropdown .tribe-events-c-subscribe-dropdown__button:hover .tribe-common-c-svgicon {
        stroke: white;
        color: white !important;
    }

    .carousel-control-next-icon {
        background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e);
    }

    @media screen and (max-width: 991px) {
        .modal .modal-dialog {
            width: 90%;
        }
    }

    @media screen and (max-width: 575px) {
        .modal-header {
            display: none;
        }
    }
</style>