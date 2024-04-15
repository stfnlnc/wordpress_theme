<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_colors');
function crb_attach_theme_colors(): void
{
    Container::make('theme_options', __('Couleurs'))
        ->set_icon('dashicons-color-picker')
        ->add_tab(__('Couleurs principales'), [
            Field::make( 'color', 'crb_box_primary_dark', __( 'Primary Dark' )),
            Field::make( 'color', 'crb_box_primary_light', __( 'Primary Light' )),
            Field::make( 'color', 'crb_box_primary_accent', __( 'Primary Accent' )),
        ])
        ->add_tab(__('Couleurs secondaires'), [
            Field::make( 'color', 'crb_box_secondary_dark', __( 'Secondary Dark' )),
            Field::make( 'color', 'crb_box_secondary_light', __( 'Secondary Light' )),
            Field::make( 'color', 'crb_box_secondary_dark_accent', __( 'Secondary Dark Accent' )),
            Field::make( 'color', 'crb_box_secondary_medium_accent', __( 'Secondary Medium Accent' )),
            Field::make( 'color', 'crb_box_secondary_light_accent', __( 'Secondary Light Accent' )),
        ])
        ->add_tab(__('Autres'), [
            Field::make( 'color', 'crb_box_body', __( 'Body' )),
            Field::make( 'color', 'crb_box_stroke', __( 'Stroke' )),
            Field::make( 'color', 'crb_box_info', __( 'Info' )),
            Field::make( 'color', 'crb_box_success', __( 'Success' )),
            Field::make( 'color', 'crb_box_danger', __( 'Danger' )),
        ])
        ;
}

add_action('after_setup_theme', 'crb_load');