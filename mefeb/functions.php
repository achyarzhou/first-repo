<?php
function magistereknomi_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 80,
        'flex-width'  => true,
        'flex-height' => true,
    ]);

    register_nav_menus([
        'primary' => __('Menu Utama', 'magister-ekonomi-feb-unsam'),
    ]);
}
add_action('after_setup_theme', 'magisterekonomi_theme_setup');

function magisterekonomi_enqueue_assets() {
    wp_enqueue_style(
        'magisterekonomi-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'magisterekonomi-style',
        get_stylesheet_uri(),
        ['magisterekonomi-google-fonts'],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'magisterekonomi-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        ['magisterekonomi-style'],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'magisterekonomi-main',
        get_template_directory_uri() . '/assets/js/main.js',
        ['jquery'],
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'magisterekonomi_enqueue_assets');

o
