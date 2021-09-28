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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'iQiE`%BRXgUBsWtF2+^o{JZ.*/a_0F1l}vFv {~y}fNRZe4+%ZkL2_r?-?,c6CX4' );
define( 'SECURE_AUTH_KEY',  'nC(5M970T8v*bHhC?ym_NiCnm8`Zaye;%)[NSx0jwd#8xZ9s{_(>ve2,=<Ji$24[' );
define( 'LOGGED_IN_KEY',    '-JX:z=U6-r2g@ IL{6za>j)>&&sAz?9~# XDI v~YIwp{Fnh_Vv(wWE)7hMp2O]F' );
define( 'NONCE_KEY',        '$Z9>*/?hMW>E@GN)ENDv9v/;(buDZ{~Y>1>gTS;/8em7zn*2KH%pPBrKNZK+(j[,' );
define( 'AUTH_SALT',        'F.bB)PQ(6{qL^[7Gx]QHds)E9^eIfde+IgB+X{vnyv;*|s1 W]7g!R|tp4{E6lih' );
define( 'SECURE_AUTH_SALT', 'x0cj, =VQIm+y5#Yk@%q#6|$*Qr_2oWz*d=~7TaFN,OP;Xf.HC4Vi{x`3[^Yhj}S' );
define( 'LOGGED_IN_SALT',   'LgJH-*hfCZw-`Ou+UZIX)C^uC>*y0YE4%J3T_@?o4._pT<7j,ZQ~O)1dnBTTE<!H' );
define( 'NONCE_SALT',       'W13RyNPPI_1p-MiTPC-aw[Z4Rg2fFzJ2IzmqWch]F;6/ab?{T|Ftz2)7oIY2):l@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_first';

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
