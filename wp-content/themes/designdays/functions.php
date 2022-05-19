<?php
add_theme_support('post-thumbnails');

function design_days_menu()
{
    register_nav_menu('design_days_menu', __('Menú Principal Días de Diseño'));
}
add_action('init', 'design_days_menu');
