<div id="nav-main" class="nav-main">
    <div class="nav-inner container">
        <div class="nav-items">
            <div class="col nav-toggle">
                <i class="fa-light fa-bars"></i>
            </div>
            <div class="col nav-logo">
                <a href="<?php echo home_url('') ?>" class="nav-main-logo">
                    <?php
                    if (has_custom_logo()) {
                        // Display the custom logo if it exists
                        the_custom_logo();
                    } else {
                        // Fallback to a default image if the site doesn't have a custom logo
                        echo '<img src="' . esc_url(get_stylesheet_directory_uri()) . '/img/logo zwarte letters 1200x600px.png" alt="Default Logo">';
                    }
                    ?>
                </a>
            </div>
            <div class="col nav-cta">
                <a href="" class="btn btn-fill">
                    Tickets kopen
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /nav-main -->