<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'techhub_db' );

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
define( 'AUTH_KEY',         'qbDA/;M{kDbWkEswxA4.d|c7>c.xW0X>X+^5o^ XdRH!XGSE=Leuvqu1DB;d;(]I' );
define( 'SECURE_AUTH_KEY',  '*D]s1a!]Unnt:<k`ssMG1wUYmDC4WF!.4<Z;,WhyL+f@)l{Yl,zfdo-$?D;X>=Vg' );
define( 'LOGGED_IN_KEY',    '6z4?k+q=Ww.u?c!PK-a7jn%:v#GK@73xi%$3QE{[-oXq2_`x`B9YIDSyvTE3`R*N' );
define( 'NONCE_KEY',        'lR`SElDwLL_x%!F5KN)$j03MIBpEsJIlzR3~kK|^ev+4izvW18/auI>D@5]C.{$`' );
define( 'AUTH_SALT',        '%,!gJ5*B{*w2phUdk:2$ueS X)r#*s,$XWHaZ>VhYR1s4CeHz3s0B3v+}!Y;#d~Y' );
define( 'SECURE_AUTH_SALT', 'n~7d`=Jj^`-</FrB*,>)QfRy$$DS*/H5b`=u9=Ou]j`PGDd.J[=BUH0l{J#)#DgJ' );
define( 'LOGGED_IN_SALT',   '*c4-r /)a.>?WT>AN|#=Bdp0RyjoD3mQkv [}^YAimZL9W[#&&lMecB/w;0%`)`$' );
define( 'NONCE_SALT',       'Sp59;y14UlO`S _g)7{Y9M1euVTINFseM7dhE:u`fF(YAE9O,J?OS)f].p<G&Q:x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
