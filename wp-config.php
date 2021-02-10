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
define( 'DB_NAME', 'senga-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5I5aTg0SIGxoimky5XTJ1VEsORH9qJ9jiYZe6OjHOrFnu259Hkf8TKHya1PnOvkv' );
define( 'SECURE_AUTH_KEY',  '16HpVyujr7VUjx3B0zxT4U2vUuidIKshEwqnES2kU6W2vB7l1tc4IKrR9YTeBvTt' );
define( 'LOGGED_IN_KEY',    'Pqoa1bjoixzAl4zOsVP9YiMC0kz39FrRy5Krm5XIUeYFWqsluSrlD45MvPhplbWr' );
define( 'NONCE_KEY',        'PUMi65mvpgbefFg01kScC4tZeQLKPBK5v4675XSIU0Bas5cXFwV27a0t7PLywuUx' );
define( 'AUTH_SALT',        'xt33kONtL6PARjlPV6EMDUJ4avTMWcpXYc7CRretZieOzi6koIkCxD5ilMvSvqL7' );
define( 'SECURE_AUTH_SALT', 'KjKTXVINYpLtNs0u4lhhZKoOKlw6j3Ks48noYXFb70bAlLZC9u8OzT1OwE0PsVOI' );
define( 'LOGGED_IN_SALT',   'dMckMdoOBYP9UmP0NRkJxzLqGho2jvqKqUhjg1EReRiWrlURn56PT4s0EZK8TcWl' );
define( 'NONCE_SALT',       '0HLOzcIZ3oNIyx1aitGJgvXS8gYD718VZZfXt9wkoWeRNpYTGnMWTEeNsNEfDkSp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
