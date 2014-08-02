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
define('DB_NAME', 'permiso777');

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
define('AUTH_KEY',         ' b4GV+*LtrXz=&E~?RqTRj$Z:QZdNw|smDLIAz?A}Y:9-J[qMr 6U1v<(<!Z|uY:');
define('SECURE_AUTH_KEY',  'Z=Y^d=(~&6|VB*Q3+b-Xagv@|L3y<{N+N-6bvI3&+G:P$FmVqC{[X2K;V8Bg9{h2');
define('LOGGED_IN_KEY',    '=4?5;/]38^JsK1&u:[)ssG#]hXhXCk|kQqh<^[2vY?V=sO^u~Al-@V-Jqa!Xibnc');
define('NONCE_KEY',        'E15A03#zb2b1+Qh7YQTYgK41is5Gj<yS2Gy#Ci5(:;)}gz<hY?,HWtG|hj%l R_l');
define('AUTH_SALT',        '$3|@1#apP&E9_N_K^S(U#_eQx!|6>+[E`R;g$AIa{he!nX&!#|zXK+K N31eNy|*');
define('SECURE_AUTH_SALT', 'h?Xz+fr|o95ueJA7]eSMFCy^#GBYsv{6mS-U>o9(TP10}9=wD`+zK4v%&&51hF/&');
define('LOGGED_IN_SALT',   'b_VLWnLd]}wV_?rFs|A!S#C?f>D7Jy5/Trq*}i{OQ`TDdO]E#&x|ZBQS@A91r2l@');
define('NONCE_SALT',       'ja|QY,/@0GC:eh3Oq3^C:y-,axvpXDVwB ifSqe}v&FUM0mm6R:JsH|]Ok_hLRSx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpp_';

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
