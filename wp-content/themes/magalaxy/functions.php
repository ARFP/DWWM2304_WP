<?php 
/* functions.php : Fonctionnalités du thème */

/**
 * Déclare des fonctionnalités à activer pour le thème courant
 */
function myThemeSetup() {
    // Active l'image de mise en avant pour les articles et les pages
    add_theme_support('post-thumbnails');

    // Active les types d'articles utilisables dans WP autres que 'article' et 'page'
    add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);

}

/** Active les fonctionnélités déclarées dans MyThemeSetup */
add_action('after_setup_theme', 'myThemeSetup');

/**
 * Déclare un ou plusieurs menu(s) configurable(s) dans le back-office (Apparence->Menus)
 */
function registerMyMenu() {
    register_nav_menu('header', 'Mon menu principal');
}

/** Enregistre le ou les menus déclarés dans la fonction registerMyMenu */
add_action('after_setup_theme', 'registerMyMenu');

/** Déclare une "sidebar" configurable dans le back-office (Apparence->widgets) */
register_sidebar([
    'id' => 'blog-sidebar',
    'name' => 'Blog',
]);