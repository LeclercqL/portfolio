<?php

$title = get_sub_field('title');
$img = get_sub_field('image');
$text = get_sub_field('description');

?>

<section class="container">
    <div class="container__background">
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