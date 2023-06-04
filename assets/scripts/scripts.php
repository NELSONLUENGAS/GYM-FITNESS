<?php
function gymfitness_scripts()
{
    wp_enqueue_script('tailwind_css', 'https://cdn.tailwindcss.com', array());
}

add_action(
    'wp_enqueue_scripts',
    'gymfitness_scripts'
);

function gymfitness_setup()
{
    //Imagenes destacadas
    add_theme_support('post-thumbnails');

    // Title for SEO
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'gymfitness_setup');
