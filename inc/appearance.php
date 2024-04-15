<?php

add_theme_support('post-thumbnails');
add_theme_support('html5');
add_theme_support('menus');
remove_theme_support('title');

remove_image_size('thumbnail');
remove_image_size('medium');
remove_image_size('medium_large');
remove_image_size('large');
add_image_size('thumbnail-custom-size', 300, 400);