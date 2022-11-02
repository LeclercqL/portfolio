<?php
function register_theme_menus()
{
    register_nav_menus(
        array(
            'menu-header' => __('Header'),
            'menu-footer' => __('Footer'),
        )
    );
};
add_action('init', 'register_theme_menus');

// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

function my_wpadmin_sidebar_menu()
{
    remove_menu_page('index.php');  // 'Dashboard'
    remove_menu_page('upload.php');   // 'Media'
    remove_menu_page('edit-comments.php');
    remove_submenu_page('upload.php', 'media-new.php');
    remove_submenu_page('plugins.php', 'plugin-install.php'); //plugins
    remove_submenu_page('plugins.php', 'plugin-editor.php');
}
add_action('admin_menu', 'my_wpadmin_sidebar_menu', 999);

function custom_theme_setup()
{
    add_theme_support('post-thumbnails');
    add_image_size('bandeau', 1500, 1250, true); //(nom du format,largeur,hauteur,activé le crop ou non)
}
add_action('after_setup_theme', 'custom_theme_setup');

function portfolio_register_styles()
{
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('portfolio-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), $theme_version);
}

add_action('wp_enqueue_scripts', 'portfolio_register_styles');
