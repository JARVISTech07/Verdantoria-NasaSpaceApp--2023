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
define( 'DB_NAME', 'ygmarket_wp666' );

/** Database username */
define( 'DB_USER', 'ygmarket_wp666' );

/** Database password */
define( 'DB_PASSWORD', 'YF!9p93Sm[' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'c1perflnrp216cdxxtobfeskj3dgwiymgykznjfxzor7g728noka2l6jr2el1qtb' );
define( 'SECURE_AUTH_KEY',  'oaze71wqhmo6duxhbs0enc3ee051tufyqecvdhf4msyhay1woxbvat8n1wtqskvg' );
define( 'LOGGED_IN_KEY',    'lpd46uwbcido5a8yclh8xzarmfef5xt92r6mlvujykbkiidxordj9vdchzrkjs62' );
define( 'NONCE_KEY',        '6jwq1ululxv6xofn7coixr2ylowbtab5ptchd8f8xujoyipeh8ypbtsfaasxnfxz' );
define( 'AUTH_SALT',        'qct8kewozwqowrxin5zgfhjori2ssp6ruzz3h09qnnxgledne3eddqmz2qytvcso' );
define( 'SECURE_AUTH_SALT', 'dfpvbbxsyssukpib8c5b3zcscwh9qbi7y1ux15tbkqwp4repqouicbqzpvx75bbz' );
define( 'LOGGED_IN_SALT',   '0p1ttkebdbbb4bklcqztkaianwr8qyvfvcvvlntbikquvzmnlkmm95vsb8ypiyns' );
define( 'NONCE_SALT',       'msdgg8smrvaadwdy9phwafawv78qh4aqywqakmdhgcmwkm0udcznebdfm6wxrk3r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcn_';

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
