<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options(): void
{
    Container::make( 'theme_options', __( 'SEO' ) )
        ->set_icon('dashicons-tag')
        ->add_tab(__('Meta Locale'), [
            Field::make( 'text', 'crb_locale', 'Meta Locale')
            ->set_help_text('ex: fr_FR')
        ])
        ->add_tab(__('Meta Description'), [
        Field::make( 'textarea', 'crb_description', 'Meta Description' )
            ->set_help_text('Description générale du site web')
        ])
        ->add_tab(__('Meta Type'), [
            Field::make( 'text', 'crb_type', 'Meta Type' )
                ->set_help_text('ex: website')
        ])
        ->add_tab(__('Meta Image'), [
            Field::make( 'text', 'crb_image_link', 'Meta Image (url)' )
                ->set_help_text('ex: https://example.com/wp-content/uploads/image.png')
            ,
            Field::make( 'text', 'crb_image_width', 'Meta Image Width' )
                ->set_help_text('ex: 300px')
            ,
            Field::make( 'text', 'crb_image_height', 'Meta Image Height' )
                ->set_help_text('ex: 300px')
        ])
    ;
}

add_action( 'after_setup_theme', 'crb_load' );