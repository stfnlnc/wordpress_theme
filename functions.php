<?php
//  CARBON FIELDS INIT
require_once 'inc/remove_editor.php';
require_once 'inc/crb_theme_options.php';
require_once 'inc/crb_post_meta.php';
function crb_load(): void
{
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}


