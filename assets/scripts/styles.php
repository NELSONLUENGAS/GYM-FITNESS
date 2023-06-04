<?php
function gymfitness_styles()
{
    wp_enqueue_style('styles', get_stylesheet_uri(), array(), '1.0.0');
}

add_action(
    'wp_enqueue_scripts',
    'gymfitness_styles'
);
