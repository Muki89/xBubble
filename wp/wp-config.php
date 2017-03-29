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
define('DB_NAME', 'teemusiltanencom');

/** MySQL database username */
define('DB_USER', 'teemusiltanencom');

/** MySQL database password */
define('DB_PASSWORD', 'yno3YZ8&vC');

/** MySQL hostname */
define('DB_HOST', '213.171.200.91');

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
define('AUTH_KEY',         'OG}T=64s1(DkP~XZ@^JKv-.-C5df[0x23iG39(avlgOa2GhOZAPTI-%r^PrN89$U');
define('SECURE_AUTH_KEY',  ';fBI/X%9?UJWe!%(6@*0s J=J `_OJ*Lc-T</H?HLfoF5>6j~f]?,h[~?K+ok*zY');
define('LOGGED_IN_KEY',    ';&1E?GPa`?~}7z0R<#uD4u*Ik7~slK>dnb3#y%4BVsC#/0^nS[i#?|Xm_!<fSnw[');
define('NONCE_KEY',        'J47QEz-~O.9^B4 I[8OkOd%R_k4]!0m<Ib0:yjOBiw$L/XsQP^xfP^.RGw2O},,r');
define('AUTH_SALT',        '_^?{9?c_@1#{vYu&.]VUBsX>/rYzkd`3n5DUh? B2.}=R6C,}5+(3Dz[|){PxZmZ');
define('SECURE_AUTH_SALT', 'r<?>!ST;u?gHw&)TWp#fz@^;n+1N]o8,t6@:>[.;B?r5kQXYy*Lz^TQ0S}uuN`:W');
define('LOGGED_IN_SALT',   'dhMnNWr?c=,L4D;ERkFBz9PpW~(gpi[0T<V7EkVOJiE&wUr%anHo(bY`$xHC0EQt');
define('NONCE_SALT',       '%ZKXtnHduhV=3?ER6RaO $=9^UEFhUgsa|#H%W/SnA(LPky|#+J3s:%[bo+5+)N|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_xBubble';

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
