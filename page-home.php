<?php
/*
@package far
=========================
front-page.php

The front page template.
=========================
*/
/*
Template Name: Home page - Template
Template Post Type: page
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