<div class="nav-footer">
    <div class="nav-inner container">
        <div class="nav-items">
            <?php
            wp_nav_menu(array('theme_location' => 'footer-menu'));
            ?>
        </div>
        <p class="credits">
            Development en Design Rdd Rock <?php echo '&copy;'; ?>
            <?php echo date('Y'); ?>
        </p>
    </div>
</div>
<!-- /nav-footer -->