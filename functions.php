<?php
//  CARBON FIELDS INIT
require_once 'inc/crb.php';
function crb_load(): void
{
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}


