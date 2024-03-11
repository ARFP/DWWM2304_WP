<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_galaxies' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'wordpress' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@?t?A`*qR#vf#E/1TwN?VtN]7?~Vl!,2}s<#R^ce2T`:o,=W/5+wz*eeJ1^gJaWQ' );
define( 'SECURE_AUTH_KEY',  'r[.*Q[i$[srCV1DH8i?<#_vs=>q!dFcX6Ol%lo$UWa_S>}(y];lqZ0f]^>hOCH4H' );
define( 'LOGGED_IN_KEY',    '.IUB/Qc15OxOhi_Xm]!VinZ[WL3Yp_n+:[YJ>=i_}*x*f64O%#NkD%jLs{n^aI90' );
define( 'NONCE_KEY',        'Ff q.B0ca1Neyc0JiX|WaYY:s7&2w&wY(<mG3NnQXxtZ4ej5*[b7Ik5;:gHQ.(A]' );
define( 'AUTH_SALT',        '{?Xi)36PrgX-`i5 Xv?E=7)1F].v=J{r|W2|9() ?UwXFwncS:.3k=r<<p-gbC)|' );
define( 'SECURE_AUTH_SALT', 'bvA!>n6zGh?$*&}T-EL{chpQ_QAJq>,*ut{W&{P-CBP/v+~fV@.Zr~eQtJrXqV5:' );
define( 'LOGGED_IN_SALT',   '-Eytw}.bo8O >H9:VF%bvm<bkH-)m2tn ^wb~>Hnk&:tnClGDY8As`:zmch=My2!' );
define( 'NONCE_SALT',       'Nb)1k>}a`#}Ay|:&K(ZG>8,& i+ko~WLt#-2j/5E|lUk3@))VUYRvD&*/8Cq+^XL' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
