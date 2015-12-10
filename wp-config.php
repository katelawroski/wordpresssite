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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ' lwYs&kanl*#KVhSt)2*+r.]<{6!a|`0UVT,|Z`X-Kb+upU{H0tDVy:kg Paj&+z');
define('SECURE_AUTH_KEY',  'HL#=a5E^S7c0||M;3!8ATP_I:Z<hxcnI(L]Zx2[H|3Kz`F-i]3~,m^u?ItCzo$#c');
define('LOGGED_IN_KEY',    '{y<{#9,L*m{tlJ;W1+REr-IyB>O%8`FRi9%MW7q;$0j^tp#:e4lReK&6| -G u0v');
define('NONCE_KEY',        '}Y|~kc)udQ=x>k!:!7_!# zvFU%A5CHCL@Nc`!l&&0h|epqnnIBEu5Q764Ll=oh]');
define('AUTH_SALT',        'G9B7N1?;Py`U8(q$}<ZU[?ip0OL2r r]4XC o*_lQ~w_`MY8 9m{d{dG`[#wc=Lv');
define('SECURE_AUTH_SALT', '6S,xSJ]*!}`G@cmF-G)KW-Q7>AL`z{v*X~|56|J$n}#&U! UKb|[Lqa10,uc,t67');
define('LOGGED_IN_SALT',   '({-_r3X|z0r1r;WI0[H[CVR4<2,sf*/.n;c&ZNbTnOV)$}c|8p-|hHde-pRZ%!o-');
define('NONCE_SALT',       'Nydxhekg:w{-i{gy`|VB0w>j{aok/Ir-sT}<4FG#Hv0*Wlgn[j}i_}%-DRmTV/-h');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
