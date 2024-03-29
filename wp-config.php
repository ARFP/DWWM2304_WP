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
define( 'AUTH_KEY',         'Ur!EPdWm#b(w7)*0*bu:<(z#&Z&hPOJRc|^izbNAmJ7O[m2CjX/>AGd0FOp% tyQ' );
define( 'SECURE_AUTH_KEY',  'q^Gu*vi0n`66&hn[8FQ;7;qm}MP9A-.Le:n#(f:zWq1mz=DY!9($Gd<Jl5I)NCwL' );
define( 'LOGGED_IN_KEY',    '_rhgsDe3|*`0{puJ4e&@j?T~VA<<I8GN|vMtbO(* D0V{|0=|TLkeP_`B@m7@yhY' );
define( 'NONCE_KEY',        '71Ssww6K<Cib`Km4 01c5QjN-EDbt(6w3[a$32I2<!ezDp{^*ZA(/pY|;Ljc|s!1' );
define( 'AUTH_SALT',        'aGP18yBpW0O/(Go,tsJ*)a)^^9y.5/ut_;@W4l7,2Q=,FgYyWP~AfdP4z8A:Q9,_' );
define( 'SECURE_AUTH_SALT', 'w3-~X(2K3Vjb(*jIJ!A1;vzbF:|Dk-Cz[QwXUAg#eLAe3W+?T MBp2Vb7Iegh,|%' );
define( 'LOGGED_IN_SALT',   'e-IIJPdx/%vnNr,W:>V9Ts.~j/2%:U`UevYsYoS-)nYxe%U$Hv>T.$2 {l^9E!cP' );
define( 'NONCE_SALT',       'MiDGbr |FDuHN03a|>t44}#}G:S!1z(eOKucm.q4H+Zsgv~|u|;h22ZlSWK%64q*' );
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
