<?php
/* Template Name: Page contenu */

get_header(); ?>
<div id="page" class="page--default" data-page="default" aria-labelledby="fullpage-title">
    <?php
    if (have_rows('content')) :
        global $counter;
        $counter = 0;
        while (have_rows('content')) : the_row();
            include(locate_template('inc/tpl-' . get_row_layout() . '.php'));
            $counter++;
        endwhile;
    else :
    // no layouts found
    endif;
    ?>
</div>

<?php get_footer();
?>