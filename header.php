<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="flex flex-col md:flex-row items-center md:justify-around">
            <div>
                <img src="<?php echo get_template_directory_uri() . "/assets/img/logo.svg" ?>" alt="logo">
            </div>
            <?php
            $args = array(
                'theme_locations' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'gf-menu-principal'
            );
            wp_nav_menu($args);
            ?>
        </div>
    </header>