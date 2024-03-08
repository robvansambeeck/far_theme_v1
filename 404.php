<?php
/*
@package far
=========================
404.php

The 404 Not Found template. Used when WordPress cannot find a post or page that matches the query.
=========================
*/
/*
Template Name: 404 page - Template
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