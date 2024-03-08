<?php
/*
@package far
=========================
page.php

The page template. Used when an individual Page is queried.
=========================
*/
?>
<?php get_header(); ?>
<?php get_template_part('parts/nav-main'); ?>
<div class="page-wrapper page home">
    <main class="page-content">
        <?php the_content(''); ?>
    </main>
</div>
<?php get_footer(); ?>