<?php
function sk_theme_register_post_types(): void
{
    $ct = 'custom_type';
    $custom_type = str_replace('_', ' ', $ct);

    $labels = [
        'name' => ucfirst($custom_type) . 's',
        'all_items' => 'Tous les ' . $custom_type . 's',
        'singular_name' =>  ucfirst($custom_type),
        'add_new_item' => 'Ajouter un ' . $custom_type,
        'add_new' => 'Ajouter un ' . $custom_type,
        'edit_item' => 'Modifier le ' . $custom_type,
        'menu_name' => ucfirst($custom_type) . 's'
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => ['title', 'thumbnail', 'revisions'],
        'menu_position' => 5,
        'menu_icon' => 'dashicons-insert',
    ];

    register_post_type( $ct, $args );
}
add_action( 'init', 'sk_theme_register_post_types' );