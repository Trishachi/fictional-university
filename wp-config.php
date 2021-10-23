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
define( 'DB_NAME', 'fictionaluni_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '+Y4UX$#5=Y7-rg^$*g7j9@{G-V.}c25dN%AIB48/J6P)nAS;Kv?>Vvm(f4&N3T3 ' );
define( 'SECURE_AUTH_KEY',  '-Nj-8*$p9Q&u6xoAKeNy=^2s5?$e@K.GC^UxHLQ1)z!k#&iiC|::t3ZXt9HsZ(JY' );
define( 'LOGGED_IN_KEY',    'hpr}G8TA(%0lp9I!{SP^0?:Sr6q-@%RUHruK)_O.z@j :lMuB !P}UiM>a~$Fy=3' );
define( 'NONCE_KEY',        'So@Req?-k(B`>7|2$UKsjg%WZdP}H!`4o<XBW]Bb2UDnw)^7Y]E6_ebsbC<3?bBq' );
define( 'AUTH_SALT',        '[z*@>?QbY+$dC,_e_=R3abB<# M~)3cuAgR^$(?i949~LnS[<z}h[jF=;JI`8QVj' );
define( 'SECURE_AUTH_SALT', 'g,,&,+_=|Q_0MfK!&9DslhJ-hjzyX#.4M`LOcE((xs-Z+6[GF z{kXWRJU]vTk5^' );
define( 'LOGGED_IN_SALT',   'vPa 7.6or<bQXf`d2~K=;yKRiTEf6ZekWG_L&tU0$Qu730^;cn30u!@}a0EW+In9' );
define( 'NONCE_SALT',       'XRt+U^YomiclMqV_v1H1`Wz_h Oe<qpR`?q[zzGj~+iM%X>T(S+%n=mEoVge?$| ' );

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
