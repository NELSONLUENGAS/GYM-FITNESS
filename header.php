<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri() . "/assets/img/header.svg" ?>">

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="flex flex-col md:flex-row items-center md:justify-around">
            <div>
                <img src="<?php echo get_template_directory_uri() . "/assets/img/logo.svg" ?>" alt="logo">
            </div>
            <?php echo do_shortcode('[menu_principal]') ?>
        </div>
    </header>