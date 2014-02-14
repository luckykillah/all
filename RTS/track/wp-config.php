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
define('DB_NAME', 'db379720989');

/** MySQL database username */
define('DB_USER', 'dbo379720989');

/** MySQL database password */
define('DB_PASSWORD', 'goldrunn');

/** MySQL hostname */
define('DB_HOST', 'db379720989.db.1and1.com');

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
define('AUTH_KEY',         '#U=q7sB4GalUBcr<|+8Dx9z#AA{}TsF[C;^Gg![=cUOzM<<esjp|D%v<pRGEry+b');
define('SECURE_AUTH_KEY',  'G*lV<n1-fp)CFGi{RWPw%6_)7K[`joi!3Nzj+Njgf+3tlnKgs K%W1p#&Dc$D`Js');
define('LOGGED_IN_KEY',    'F~i/|]?5}bU#-sb6_1.dCt|3Z?BeQINQrS9^6mzDam(w`_Q5B@8j*O!JI@:m7nQ<');
define('NONCE_KEY',        'Ci2Lkj@aFb< H@Au0:-d6tL[1P-[3Ms2}:RGEXRWY5@vh2Svdpx4Gj!aJ?=u,Wah');
define('AUTH_SALT',        'j=kdBB1C@IXm?Yo@8W{[Y!$F37J~HAC+_=tL`|w*+)*E,2wP`rs@e9u|}@N,+/60');
define('SECURE_AUTH_SALT', '+UjTNataJ[W ?paXW+ONyF9LvO9XeTc-D^>V*A+nsqKm)_6-9Cb&T4OHi^.!dQ31');
define('LOGGED_IN_SALT',   '|48ZZ!^uIsU3|R7KyDqZK]VA4xxY U/,!zMUfmf?eX(r^arR0%ZJfH|W]H6c)MqW');
define('NONCE_SALT',       '`aOb5g_U@%GkFRF{[9LAkars7+)Fp;^=-`@cBa}O~W;S~Q|y-9CLy?F_.u`!v3RI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_2_';

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