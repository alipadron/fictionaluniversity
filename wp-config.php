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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
if (file_exists(dirname(__FILE__) . '/local.php')) {
	// Local database settings
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'fictional_university' );

	/** MySQL database username */
	define( 'DB_USER', '' );

	/** MySQL database password */
	define( 'DB_PASSWORD', '' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
} else {
	// Live database settings
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'alip9334_universitydata' );

	/** MySQL database username */
	define( 'DB_USER', 'alip9334_wp77' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'Cocosete29!' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
}


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-`jq)+wN6r/&yeSkguD,mR(SR+;8Rv|m!^-;nS{WDz,3IB%Q2~v%K7P>ak#qj-/)');
define('SECURE_AUTH_KEY',  'GGX{,:p)8h+mb`sN*g-m??e6{ rV@_A$mu-~}u0A{[M.Q`=X/*W8eM#c|f{,-a>!');
define('LOGGED_IN_KEY',    's~9SF ET/2QE{/ClWB-<P~V]g?&k`5H-sdE%8o.X?}MuQ*PmUqTP.C/*G*ZML|2k');
define('NONCE_KEY',        'g_L@6W21L]V BEs/ %U%GPECo+c&<:FK|m<O(WYM^i9*29U-3(;wg.R=9#~tD<Me');
define('AUTH_SALT',        'O:x+jL8![!-o<weu+tHFu-aa:z)=6|mjIN_fEAUL6b&w*a[nE7x.=0=vWAM2 ;_C');
define('SECURE_AUTH_SALT', '[bPK0vFVE]L!3KXN(EaWr-!/KDd/sE+]~;a)W:jA/|Zlez|H&By.MuL4SXir-QD0');
define('LOGGED_IN_SALT',   'zt5Ya+B>p!Lv;=F=6d94[<L6s%1.p+i8;mQ2^-orx1aEo#z)v+{?z4l|HbPW(VsV');
define('NONCE_SALT',       'rKi*.|J=|=.yzaGnbD_R-:i0,,?N;+V|ckEcL_q;Ka.4_7+_g_@=127|rA+{n(<y');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
