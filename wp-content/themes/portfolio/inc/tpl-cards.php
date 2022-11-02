<?php

$title = get_sub_field('title');
$img = get_sub_field('image');
$text = get_sub_field('description');

?>

<section class="container">
    <div class="container__background">
        <!-- <iframe src='https://my.spline.design/bgneon-6817b3d979e0dda0d8f0c42ee5767237/' frameborder='0' width='100%' height='100%'></iframe> -->
    </div>

    <div class="container__cards">
        <div class="cards-content__title">
            <?php echo $title; ?>
        </div>
        <div class="cards-content__img">
            <img class="img" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
        </div>
        <div class="cards-content__text">
            <?php echo $text; ?>
        </div>
    </div>

</section>