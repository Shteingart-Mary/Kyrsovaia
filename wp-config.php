<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpbaza' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '2I,mdq<tSpbVW?=& mA+KYyYeMy ch)|ys?S+~x+#i+<,{:Dkmc (<zz.hj.w*Ck' );
define( 'SECURE_AUTH_KEY',  'PN0;(2eQfkzcuDYyb$$<>[i;m5u}:,<Y`_/$CX)~w7fVpu-Z&<k![Z{Q{nr{,p%-' );
define( 'LOGGED_IN_KEY',    'LqL8p-MLc2F@U3(6fm*,d_1e7dvu`S-Jf`3*4`.M;Uv0c=)%a4$[7Veja5^yPYQ^' );
define( 'NONCE_KEY',        '[TRraddCupmpPQq2EBN>VjZ3hsBL56>Po:bEf}#$z+[:RT`TSdKK<1V_^ZYA$mW`' );
define( 'AUTH_SALT',        'X$ !obpy{`4)5}VR/fK}JgC1[^eq6q]TLCoF3CWus[4X|r3jAsP]lk/WRzm!?]x-' );
define( 'SECURE_AUTH_SALT', '==g*$[wA4yTHh@rnpJ_#Fpi,wz`JL3sS&nMgGkTjG7Rx{J1;3JL4XucnbMHUZiWA' );
define( 'LOGGED_IN_SALT',   'bi%o+8jsR;NpBKtC;Y5WF5z8G^8ojPs:c97)h]ht;(slX-@M]WA`Bmqa7[-Av=wu' );
define( 'NONCE_SALT',       '>w*cA71!4^r>QA)0El-38=+3^hzTVJHz&O_:oUA~o>31i2qGmmWJ;YnUfu;ev-+4' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
