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
define('DB_NAME', 'clay_new');

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
define('AUTH_KEY',         'Nto#`PrpJ0/qK?yXofFYoRJd$2WD}aQ;s8[l6vMyXu@,W=IlC,In4vqr3q|W.H1&');
define('SECURE_AUTH_KEY',  ':c;q^L@Wr9uNzN&KdyE*7kYJdM:BRb5Im5eQ{D@2/|Kl-a+nbwC+~zb6$,AWs>)3');
define('LOGGED_IN_KEY',    'zY?@x^cp(vg&ta#,4wG2sJ|>R`Es9:^iz1n9wdsCdz~; LAfv[;n:sJFbxfN!I=L');
define('NONCE_KEY',        'Zb]bDNcKS7zuji|dGd=Ha!n}2j1z-6R.$JgS.7[bnWPJ=!=e2Lv[)N2j=4.Q ^n%');
define('AUTH_SALT',        'gxy/+]L[KiAx(?(N8O1=7H3mx{t+:F1gza$S=kxdVvKkV4,2_]LrFR{Gl:6|?-j!');
define('SECURE_AUTH_SALT', 'C/1kF@p~VqLVLmZ_ZH1AJ9?9%FJ}?ZCh[Ny:ZR/$s2x.i0F#)s].;7(.]4qT Uiq');
define('LOGGED_IN_SALT',   'o&E]b))&g*CLOl1ASOcF!XxGqr$EX<X7Q=bmU;CiPQ&^2]Ht}NQZGs*N(($ y?e|');
define('NONCE_SALT',       'W9_DGb45_IHSjIOpp,kseh$70PoB]&vy?Rl*y.PdKd>;e@bw9x6$VkT,h[tK|j;|');

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
