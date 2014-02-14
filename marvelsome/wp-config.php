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
define('DB_NAME', 'db401873770');

/** MySQL database username */
define('DB_USER', 'dbo401873770');

/** MySQL database password */
define('DB_PASSWORD', 'goldfinger');

/** MySQL hostname */
define('DB_HOST', 'db401873770.db.1and1.com');

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
define('AUTH_KEY',         '@L4 <1nw-Sp&-gcO#.Lx#jlGDS%I~h{*HqwOw,c]?+CyT`z4I-B]:<lJAIU)i][D');
define('SECURE_AUTH_KEY',  'b+Keq#n0J3%?MogmO!C9z4e<(;`SH%QQsTMgT91kGF8P?C0^QfgNVa|Sa2Y%@m_e');
define('LOGGED_IN_KEY',    'r S(-Rc6-T-#(4m(6z120FIPtvin*<`1jg3Wb(y]1kQBo+CqkffP}Xtra=<|lA$_');
define('NONCE_KEY',        'J:-2/;yEol-.c@qP4%Q(`Bb{Cxnhq?0>k>UHM4?6&_Y$8{PS:1;k(jo 3LbX6rn:');
define('AUTH_SALT',        'O$Y@N%;gZK5K,+ C-iX(J^yq8{5W!-1y@c#F0AsxAD~o*ol!mX>.T|:|eala@vXF');
define('SECURE_AUTH_SALT', '4BuoA$1Fd+.?U,tQkz2qRs/^P=p|J+A-+JeWA9kOx<E|EaO)PVVpQi)4lbnwB`>|');
define('LOGGED_IN_SALT',   'W;(c9Kmkb|T3H<X^/=lDW+[)P3LA2p_PY:j^((+?+|YNUfS.r_J5GW?*0|8<}:Jh');
define('NONCE_SALT',       '|qj#V?&7UMqQOe^m8$Dk5uaDlw#@L>qzI>I8?0M?27X75M.*+cBScJ<mN_4+Cw|a');

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
