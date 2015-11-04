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
define('AUTH_KEY',         '`]kE0(NTvXR2%rPn4VrUAn@D@H*2AgD96]2~0AMWPb$=;  ID6j_!uDeREXM3{#b');
define('SECURE_AUTH_KEY',  'h{yeiftq:WH]i:sax+P__C l+@%yF9-ZT4Y,6.Jgk00QFY0@3<P$&6p2!@a#Fe<+');
define('LOGGED_IN_KEY',    '%;3Yd>[_ebu2oYpHY-Vk@WmLQ@C+M.M4;x7[})ZCB{qI52@v|UpC -!+hv-q!gmC');
define('NONCE_KEY',        ' WsJ=YK+>vbw|)*)tXW,^6HJ,*[rNOWY*YJrEpV2N(Yu3&MF/]nS}d>}mD.9!,h(');
define('AUTH_SALT',        '_J$1u*e`Qwg}k9I>SY$qIh[:ct8}gA+cu}S~Q!!$2N^$]rMiGz *nK+,~/XjS_zd');
define('SECURE_AUTH_SALT', 'w^IzqvH{/{vlv-5RwfXZTDbSLanlmH_@Hb2Wtldd^fZ~A]5Y0>tz}}b13ogw(M<2');
define('LOGGED_IN_SALT',   'VAG?5%l7tNX4-L<bK}>=N/y/kZ^=ln$:~V:c>g%[sm#Fn+pFIM>i|A9b-EdtRgaw');
define('NONCE_SALT',       'QTMRe $RJ1nDw<x)0XvY5^M#+t5v+nUu),!!Vf _8(lDF+55?3O@:+iB$.=^+]Ah');

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
