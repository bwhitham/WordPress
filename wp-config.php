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
define('DB_NAME', 'brett-test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '|n-|F~x^+e-Nu0rPt}:wO:$]p]BH@LKC63(|L|?JW97^Lv4_ww1UeuHR^$vOg37/');
define('SECURE_AUTH_KEY',  '15:b*ETXyrL:ZLre!U8.R[rT1-tafhR)N7Hd,Y<AHdhux2IbY5_E|%Z*O[GlS{{_');
define('LOGGED_IN_KEY',    '}qD2|k2Hx}x(?IG+g14YBF7$`>?2)qMYY?UwFaY>#Jt-k>orBbG5BHLm`7NKn+:P');
define('NONCE_KEY',        'hvasS2E&yGO0-`A8?c2io|L:p279q`mH5 [ I)f(|+03K,,W^f90hZ^bEM9rK($J');
define('AUTH_SALT',        '++q`ps)!egb30wrxd@|8-ct&cTIH5?R*==Q_:24`b-%X?DURj&{-Lr[|ar<hP <~');
define('SECURE_AUTH_SALT', 'wP><YZ~6FBclFzO_@;Lf{@{}wGV55rBA2`Lncg*>o%(J8YX;l7K+l6.:[C -O5F8');
define('LOGGED_IN_SALT',   '=TNm 4qf!O?r.>GeERkK-~{3G~jbyO2U{4CHG?=ME$H I-@n2Y1.5+=W;*3CzwX8');
define('NONCE_SALT',       'Y/4Caqdun/-h8NmdMVia(-Jd0g{3z=OAWR+%_z-oRYIX?8m-vj,am ayK5pS2R:=');

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
