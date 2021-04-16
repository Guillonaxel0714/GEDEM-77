<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

// On définit le chemin (côté serveur) vers le répertoire content
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/content' );
// On définit le chemin (côté web) vers le répertoire content
define( 'WP_CONTENT_URL', WP_HOME . '/content' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

if (WP_DEBUG) {
    // On est en environnement de développement
    define('FS_METHOD', 'direct');
    // On ajoute les erreurs rencontrées dans le fichier de log
    define( 'WP_DEBUG_LOG', true );
    // On affiche les erreurs PHP directement dans le code HTML
    define( 'WP_DEBUG_DISPLAY', true );

    // On ne veut pas utiliser la fonctionnalité d'historique des modifications des contenus
    define( 'WP_POST_REVISIONS', false );
} else {
    // On est en environnement de production

    // On empêche l'installation de nouveau thèmes ou plugins (attention, les langues ne sont plus téléchargées non-plus)
    define( 'DISALLOW_FILE_MODS', true );

     // On veut limiter à 5 entrées dans l'historique des révisions d'article
     define( 'WP_POST_REVISIONS', 5 );
}

// Dans tous les cas, je veux désactiver l'éditeur de thèmes / plugins
define('DISALLOW_FILE_EDIT', true);

//Comme je passe par composer pour gérer mes themes, plugins et maj de wp, je desactive le gestionnaire d'installation de plugins, themes inclu dans wp
define( 'DISALLOW_FILE_MODS', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
