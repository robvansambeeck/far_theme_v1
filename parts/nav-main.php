<div id="nav-main" class="nav-main">
    <div class="nav-inner container">
        <div class="nav-items">
            <div class="col nav-toggle" id="nav-toggle">
                <i class="fa-light fa-bars"></i>
            </div>
            <div class="col nav-logo">
                <?php
                if (has_custom_logo()) {
                    // Display the custom logo if it exists
                    the_custom_logo();
                } else {
                    // Fallback to a default image if the site doesn't have a custom logo
                    echo '<img src="' . esc_url(get_stylesheet_directory_uri()) . '/img/logo zwarte letters 1200x600px.png" alt="Default Logo">';
                }
                ?>
            </div>
            <div class="col nav-cta">
                <a href="/tickets" class="btn btn-fill">
                    Tickets kopen
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /nav-main -->
<?php get_template_part('parts/nav-sidebar'); ?>