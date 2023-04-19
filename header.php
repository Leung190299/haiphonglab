<!DOCTYPE html>
<html class="no-js" <?php
                    language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php wp_body_open(); ?>

    <!-- nội dung header -->
    <?php wp_nav_menu(
        [
            'theme_location' => 'menu',
            'container' => 'false',
            'menu_id' => 'header-menu',
            'menu_class' => 'menu'
        ]
    ); ?>

    <main class="main" role="main">