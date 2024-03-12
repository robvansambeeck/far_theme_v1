<!-- <div class="nav-sidebar-wrapper"> -->
<div id="nav-sidebar-overlay" class="nav-sidebar-overlay">

</div>
<div id="nav-sidebar" class="sec nav-sidebar">
    <div class="sec-inner container">
        <div id="nav-sidebar-toggle">
            <i class="fa-sharp fa-light fa-xmark"></i>
        </div>
        <nav role="navigation" class="sec-content nav-items">
            <div class="nav-items-inner">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'main',
                    )
                ); ?>
            </div>
        </nav>

    </div>
</div>
<!-- </div> -->