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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpanna' );

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
define( 'AUTH_KEY',         '*YTKBf0lwD87_R*~2~/c:OA8x/^63!fUsF1J :#UC1BpNp6n;nW0=ijP)#3|F$bO' );
define( 'SECURE_AUTH_KEY',  'aF>q*i&Q@FV8imp|:G8s7^tz+yvYA-`cSfO<mW++Z`J>*qaucdNwCTwQE,eQNe+9' );
define( 'LOGGED_IN_KEY',    'uXcJ$@P);Kc}?V7q*jQ`QTuUFjbe0WsDfugE+u;2&1uEI%5HJmTc.&Ma#$+J!8A|' );
define( 'NONCE_KEY',        'r+][xv&3d+5K,$vb|oz~db,.eli/@<EVOL:wJjBX3[{Y,ctR:/-X>?W$E7WXvze{' );
define( 'AUTH_SALT',        'T%?b(IuN/GYk!`h?c_kqfz*TVg:98>g$~RP@68EW.pL$Yh^aDd@lo>Ox|ZwCR7zh' );
define( 'SECURE_AUTH_SALT', 'S$L8hF*cY^*hio|k^F*l$(rt4%lF^-JV!+,VJ[C(;,8wpt2M*v`X58UK_*yZzmCi' );
define( 'LOGGED_IN_SALT',   '8#3&+`5} L$T=d&`E4#h]Gk*XBa(ojgcGCPc3!><%om-WXf5_a`&o3 l_@x~DOS4' );
define( 'NONCE_SALT',       'ljM^#g+l([1^#+]Q#YNqN};)$MX__v!lviC*-N2w]y~.!y3yS.[<DaHQe4N=)=:3' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
