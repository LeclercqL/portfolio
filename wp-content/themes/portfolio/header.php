<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="container">
            <div class="row align-center space-between">
                <div class="col-6 col-md-6 col-lg-3">
                    <a href="<?php echo home_url('/'); ?>">
                        Home
                    </a>
                </div>
                <div class="col-6 col-md-6 col-lg-9">
                    <!-- se ref au précédent col-lg-3  -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-header',
                        'menu_class' => 'nav',
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                        'container' => '',
                    ));
                    ?>
                </div>
            </div>
        </div>
    </header>

    <?php wp_body_open(); ?>