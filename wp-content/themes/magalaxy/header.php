<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true) ?><?=bloginfo('name'); ?></title>
    <?php wp_head(); ?> 
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
    <header>
        <nav>
            <?php 
                wp_nav_menu([
                    'theme_location' => 'header',
                    'menu_class' => 'galaxy-menu',
                    'container' => false
                ]);
            ?>
        </nav>
    </header>
    <main>
