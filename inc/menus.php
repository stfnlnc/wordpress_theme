<?php

function sk_theme_register_nav_menu(): void
{
    register_nav_menus([
        'header_menu' => __('Menu en-tête', 'text_domain'),
        'footer_menu' => __('Menu pied-de-page', 'text_domain'),
    ]);
}

add_action('after_setup_theme', 'sk_theme_register_nav_menu', 0);