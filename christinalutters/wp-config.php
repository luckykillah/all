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
define('DB_NAME', 'db351552276');

/** MySQL database username */
define('DB_USER', 'dbo351552276');

/** MySQL database password */
define('DB_PASSWORD', 'goldfinger');

/** MySQL hostname */
define('DB_HOST', 'db2718.perfora.net');

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
define('AUTH_KEY',         'Lwv-BQ9A~5,Ed&a:Zvo_pIp-r{t)x3[~}*Ld@DR]FT|_2.Si_8:XkA5o~~Gw8k,y');
define('SECURE_AUTH_KEY',  '2eh,jFo4SS]toX3q.NSX7ura$%{Vg)-:/+N63j-?Hkm%cj;nw`|e,QH/N2I+2);!');
define('LOGGED_IN_KEY',    '@H_zQ#+[G}Ye5+4Vw5BQf7bI3_`&ILcfE*[kSV7Sm]!|.qp7F-9jc{fTIE1#l,_|');
define('NONCE_KEY',        'DFJ}Z,QZ!NY0(zVcbK(>?hywXDh_2QO6|{rlPi?D=hlrnNAST(wXdykX(e)t#U(K');
define('AUTH_SALT',        '}a;|:5W2GE3{}im|z1A8y&8=9A@q&PIr1]qZnj-jn}fq~&<S8l0A3IP2xIO?8U(w');
define('SECURE_AUTH_SALT', 'VGJv3A8>SMBD&u)QD8gF{ORK(vLkxkvd|k,T<mKLvL9t8b#Cb:k|>wd4RvS1E9[-');
define('LOGGED_IN_SALT',   '2qD(lg&Lpj~N;+F{nYW3R:I61>$gC]@eD)~uYEU!W&Gt0I._}_/`a[?>Bg15yAsk');
define('NONCE_SALT',       'O$].V$do?^zDZy*L2g+q@YH#sQS(2Azv}QEbfdv-s^@h=Y]o;V,?@bmcJ,&G,e&O');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
