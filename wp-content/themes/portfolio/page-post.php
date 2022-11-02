<?php
/*
Template Name: Génériques
*/

get_header(); ?>

<?php $loop = new WP_Query(array('post_type' => 'bestiary', 'posts_per_page' => -1)); ?>

<?php while ($loop->have_posts()) : $loop->the_post(); ?>
    <div class="container__cards">
        <?php the_title('<h2 class="cards-content__title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>'); ?>


        <div class="cards-content__text">
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; ?>
<?php get_footer(); ?>