<?php

/**
 * Setup theme
 *
 * @return void
 */
function limpide_setup() : void
{
    // Add theme supports
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    // Register menus
    register_nav_menus([
        'primary-menu' => _x('Primary menu', 'Menu name', 'limpide'),
    ]);
}
add_action('after_setup_theme', 'limpide_setup');
