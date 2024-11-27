<form role="search" method="get" class="search-form d-flex align-items-center position-relative" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <span class="screen-reader-text">Search for:</span>
        <input type="search" class="search-field" placeholder="Search…" value="<?php echo esc_attr(get_search_query()); ?>" name="s">
    </label>
    <input type="submit" class="search-submit mb-2" value="">
    <i class="fa-solid fa-magnifying-glass white bg-theme-primary mb-2"></i>
</form>