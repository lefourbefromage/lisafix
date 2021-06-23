<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'lisafix' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'admin' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'admin' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'P@/`_p<GJm{o:^$tsxqwNZ<^.teBw!^jE4XIV?{zV9>; IV=]UyBzUPxU9<hWY[F' );
define( 'SECURE_AUTH_KEY',  '-MeRN,}Xe@;TE%<c-*;;YsUrOjTo,ZtX%a$)=W2)6^_W6=A~i8mLI{Ws>d=(z>AS' );
define( 'LOGGED_IN_KEY',    ']ogz)Z`uwKtEr$r:nD{ DWcZpC^E)VxXv.>)2Rfzg#pDf^QI6lG&GhGpE~:dLejF' );
define( 'NONCE_KEY',        'u.b`#,vHBZn6+-YoetJy4R+HN7fDOFna$+`bcy!vk=CUub=ze|0qi+qTf7]!q||f' );
define( 'AUTH_SALT',        '6CGqkT+1?jP*C6_)]<1}<5J!09oU%AQId)(?Oxt<wS80KTT: v?.*Pd/*;{$k]5n' );
define( 'SECURE_AUTH_SALT', '[fW>&aSKE!6O8Rt~leVXOSoO$^]x9?nE44G]Jp,)QAc[Qm;HJylBr%,0;gd53c1]' );
define( 'LOGGED_IN_SALT',   '*zI?cYF,Q<HsZIYiiKN|{C8PsR~9H6I-Tb-&HD>eYhfknzLcDfr^+-/7rC}YdJ7r' );
define( 'NONCE_SALT',       ',eAQ?KF 7Q&7SIivX$9)W2~j?A :@ZD9,09~/$x_xE%?=4=Cy;9Y{.fB!aN6?s*B' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
