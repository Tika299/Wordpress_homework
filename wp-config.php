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
define( 'DB_NAME', 'wordpress_581' );

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
define( 'AUTH_KEY',         '`h;d62<STL?{yvl/*~px:v_r|C)univC5G{fx_& U:W+mYvkLH)]8/G,|sjpSl`|' );
define( 'SECURE_AUTH_KEY',  'A#9U3#`rk}[k*u;/P):C(Ijr_n`;g_wC6iUm!>;Lc!*svM6:inOxYX~tE{da#YgT' );
define( 'LOGGED_IN_KEY',    '#CU,CkBvXPS#!Qh_2yDutV{}31L<[0n>J2NI&^Irr~b!p0tN^IeKil-!@2L&.vxm' );
define( 'NONCE_KEY',        '!Bz9:ba{1&nhfNj@#IJ=Pv[sp|3%*NU<mx[8ZExDknf1-#e.S*Tz}HZ[541r$)ia' );
define( 'AUTH_SALT',        '~p5Ez=J5^Yt9$+2YsMRqv&>Cv`Dy6O5H.1U?B 6yKuT%<(W_50VI-!LhQT<j}0YJ' );
define( 'SECURE_AUTH_SALT', '=9.Z_ihj~$%b[OX;;Ctsh#IlE)dCk~Dv^4*?xm7-p}QYBV+T)@:HMe4R+xX2hc M' );
define( 'LOGGED_IN_SALT',   '}jy]SRNiBo&o(50p*Sc5F,ls^G3rlgvnk{5u.T/#7[+8qnKQp&GIq%?6%8!,S(T*' );
define( 'NONCE_SALT',       'R5-T3Z)y%c2:}Ax/3Qt{R|0]M<fFz:;=#HswF;CE9dJs1XTO_PnTmp@oTO0KKV 9' );

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
