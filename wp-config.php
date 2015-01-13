<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ZLDQ$t+M1|eNq&/[>m>8<6cr^,%e=10p*yRS#&HqUvZJ8u70Wtm3Q?$Nhiklf*&l');
define('SECURE_AUTH_KEY',  'vAQ%H>0JDAB((j^bqgaGiqA5zqrWrO>I=(:ZNN`H,hjv%jKrYt^RCAX&EjWPF]pw');
define('LOGGED_IN_KEY',    'kGdXPvL(wJRz)Sfw&GTc=[`LQ^YZmz($VdBgov%HtA*=_~C bS>{+59S/*I|u^r_');
define('NONCE_KEY',        '5w*YsAn]~pRv9PP)&|H&Oj(+U~%P~%xt:!v:HHgl Pe P<`0t@[0,WAeUO0le1eM');
define('AUTH_SALT',        'w2|3~GvOw%W}>5=2D?TY=+mVWGU$Wiud3d%QRg3&@nRJu<*%,#T6DDKi>O;~B0YL');
define('SECURE_AUTH_SALT', '$I0(!8B*9jbb,Z$@l($-$]ju.s_HD$rdw@P$jc/SHA5+A?Y@|+l5R02qrGuFP0,]');
define('LOGGED_IN_SALT',   '0TdsAfe~ArREU_lE:BIV25Hv D#$`b<k,1WE},r<~Sqe_vRAD+hk8)P%[v9V;|E)');
define('NONCE_SALT',       'mA W6GAV+>7/BWb]5T2kau&]Wo*jJ)abymK0AE)e-Uf)3o!:!f@^AzZ6Jm(^8(5T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
