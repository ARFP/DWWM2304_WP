<?php 
/*
Fonctionnalités du thème
*/

function registerMyMenu() {
    register_nav_menu('header', 'Mon menu principal');
}

add_action('after_setup_theme', 'registerMyMenu');


register_sidebar([
    'id' => 'blog-sidebar',
    'name' => 'Blog',
]);