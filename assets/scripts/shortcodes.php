<?php
function gymfitness_menu_pricipal_shortcode($atts)
{
    $args = shortcode_atts(
        array(
            'container_class' => 'gf-menu-principal'
        ),
        $atts
    );

    $menu = wp_nav_menu(
        array(
            'theme_locations' => 'menu-pricipal',
            'container' => 'nav',
            'container_class' => $args['container_class']
        )
    );
    return $menu;
}

add_shortcode('menu_principal', 'gymfitness_menu_pricipal_shortcode');
