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
define( 'DB_NAME', 'enviro2' );

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
define( 'AUTH_KEY',         '_<oFP UUg:Mb|%~XhMZ`w<WL1]HT#V }XH $[WysAKs.`:)mk%AEf7i3|N1L97j&' );
define( 'SECURE_AUTH_KEY',  'j!sFU]P)M3=Gm*/U)2s@^qE{%#N aC_mh^/4xB6:IIKi^}?R0@~Znm %N:f5GxGx' );
define( 'LOGGED_IN_KEY',    '2ZM+b$,6I:?yHK3SZf.09b@&lb{Bpl*R}Q7W+dYckJs:%,{cLpXKZ%RU_K:8`!3,' );
define( 'NONCE_KEY',        '&4>?<*2Vi}q!QW[JMK9-jD(!t::N3tW^8$]zNN~Z!}Jk[gRdxEN5pK%dp}#SDMQS' );
define( 'AUTH_SALT',        'E_%=~(3J:+}8gR%,q{l(6][dT75<3bc4cGZjzu[/th2QtO?TQyB-BXKgf2~_,%]f' );
define( 'SECURE_AUTH_SALT', 'SI%+odJOwJn~uuUWpy.!CZaYR^I6[Q3-6?Q|k&DMu29.z?o[YZ@qL3j5;1;gk$Ij' );
define( 'LOGGED_IN_SALT',   'X[08]Xqc.ZmDhw<6-@G)@:8uSOO@vP^MAu0Y@.&xj2nXf&VxqoR]<~|{0i~R]npU' );
define( 'NONCE_SALT',       '$XU14,]kbHk1JtuoFKIkci=  CF:BZQQT+h9m%ux?h-S>b}n$ajz(%*XlbAPva*s' );

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
