<?php

add_action( 'init', function() {
remove_post_type_support( 'post', 'editor' );
remove_post_type_support( 'page', 'editor' );
remove_post_type_support( 'page', 'comments' );
remove_post_type_support( 'post', 'comments' );
}, 99);

function remove_menus(): void
{
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_menus' );

