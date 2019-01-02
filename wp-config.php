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
/** The name of the database for WordPress */
define('DB_NAME', 'clay');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KgvPqI?.<ik$*8iS=y;lrz4w|zL()>sEl;Zrm/PDyy]MWA w!YE@F[P7Mlg.dU-<');
define('SECURE_AUTH_KEY',  '+.c/:vFZ|W?#TTfQR8]SnojJreq+otQqmO!X{cMUeHnR!=[iuvd1kiGX}5y2oQ>]');
define('LOGGED_IN_KEY',    'SWKjEmO|m]J4P#A]B6H`k|(]8S4my^nY6V:O-gtp(fEG!{%~-^?>6Q+8^Yv8Z,J;');
define('NONCE_KEY',        ' C2ttxy5kZJ uhe:@tOh@mir&VU_OUL)MsLE_2DTZ|o`#I&h6t{7;[,g+GrDYGFM');
define('AUTH_SALT',        'Z<&,1f~WnJiPq*Sas|ua5<,Qnr!OIy[D*n(dk5(OBH]Prxc2*Fp7O2|aubM<f-|k');
define('SECURE_AUTH_SALT', 'b1b!_@y}; =m _;?10,HE&`HaVR7IV.GN% m5DUw37cTc_ij</Z&Z/9_B]EGhoye');
define('LOGGED_IN_SALT',   '{sPBfk[W&erILX0^Vq@xr,-!7-x$y+tBb.=*vnn+:SfYYjwa-YRIsZ+c&Go{6r=J');
define('NONCE_SALT',       '[s!3sG#E4 !arDqYM3L6d) QIuI(~<Q<aohh@pA.F^]y?Ib:4F u>|_]I<.7~Yks');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
