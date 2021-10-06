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
define( 'DB_NAME', 'lyricsdb' );

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
define( 'AUTH_KEY',         ']8m0!pJZ;X{gAh}~&x=OGl:>rbS94dA5X]Z#g=`g5o:h0E.=%V3^>oYaQlfJr 8%' );
define( 'SECURE_AUTH_KEY',  'UqniDydYPgV2&BbW`UK xv`_sbbt~A^7lfi+KZH+:5VEDL)>z-Hj{D`1o>JT/k%%' );
define( 'LOGGED_IN_KEY',    's.^bpx;8w&w*sT>O=E<I?prc-Vp<n~ifwx@N~Z/RzKs1vc*.aHwQC&}cF~G:8oaT' );
define( 'NONCE_KEY',        'DU<E*6jsNZjE]ZJD]Pphn+Q0:7HY1U[X%Jq$odvM5&L0+TrwLs].-cR/r>8w5r_0' );
define( 'AUTH_SALT',        'K*MW34d<BZ3(>S;9K#4JO[+}SBYOzQ-0P6;^C^/k`t^6=HZ<dEd5-|?;V:]oEgHi' );
define( 'SECURE_AUTH_SALT', '!(J=%MR8}R7gp.kM[a4n0Q.IW}A /Wi]41V8jiIfW+fLgi+~d}uRe:Z|Wi?:B9Eh' );
define( 'LOGGED_IN_SALT',   'nV+bP?LU0%Yfa>aI^S<bLlLlBFJI8;JBE?fF{[J5:)BLZhY#|OP#XmYMs=TE5*q6' );
define( 'NONCE_SALT',       '+m2)eje@ ut!W3o|J[u*gV&Yd%Wn?8IHd(H6r{P=T&n@&sTA >kkCz3)Z%jhHqrJ' );

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
