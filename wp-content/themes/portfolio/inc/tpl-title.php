<?php
$title = get_sub_field('title');
$level = get_sub_field('title_level');
$text = get_sub_field('text');
?>
<section class="presentation">
    <div class="presentation__background">
      <iframe src='https://my.spline.design/bgneon-6817b3d979e0dda0d8f0c42ee5767237/' frameborder='0' width='100%' height='100%'></iframe>
    </div>
    <div class="presentation__card">
        <div class="card-bubble">
            <div class="card-bubble__title">
                <?php echo $title; ?>
            </div>
            <div class="card-bubble__text">
                <?php echo $text ?>
            </div>
        </div>
    </div>
</section>