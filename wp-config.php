<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'air-freight' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hFyRgNOhXW13ldMQSgyC4P384oZTlrJkePUXMWSHRSugOQbehdMedghqRwxovYGC' );
define( 'SECURE_AUTH_KEY',  'KAUlp6uDX0UL2iToH4wMeQisrwNbKddIiPSgerEzmuNWEpFVrbn63X9ppBaaUUi3' );
define( 'LOGGED_IN_KEY',    '6bUyWNN9KJf7Cv5rJdhtPlcm07u9ja3cIT2v7bDXRF1lPTF8PLn4dceZZWjMzWlX' );
define( 'NONCE_KEY',        'qLTLuu7EyjBsdIguLo3aqR8hQGb7T8QF9XaLYWCmlQeJ1oEkeln1oskyyhspdYoR' );
define( 'AUTH_SALT',        'P2z7Pu7ArcJZmmUMGmUAi8cTTwqent1BnZJ3Dy1ZQJuh2qoMvCGVoqNQCuQBfsd3' );
define( 'SECURE_AUTH_SALT', 'pfiSzn0MF3d78kXOjM6e5COEWcmOA4aT7WvpGPxlmLRex3oWpZSGSzpfaiWyphmY' );
define( 'LOGGED_IN_SALT',   '6Y3RvbJB4QS1bXHJiqWZgJcYthD00ekl4lTkTUE5SSOUiW2s8V1R5O5IqoTRChFN' );
define( 'NONCE_SALT',       '0ESGdLrW5vf4ucg8GWqbelEz2Zhq0QuvYzJrRf5frg1r420q63VKeo1rEFiE4WCa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
