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
define('AUTH_KEY',         'C7Bk=3&*G($7|f(:D|au=BzN ,d-+1A>cwObTB8Cam:HKKI,$* t-eG>Zh7i(%:3');
define('SECURE_AUTH_KEY',  'B+Q8)wLe%$p63$Pc_$. $Rgqi0CjO{z]Os:9#28V>)_zDe-3!`sj}N8NVd<Y(wJs');
define('LOGGED_IN_KEY',    'q.8|i?Dg0gQZ+-*iZV.eMd_E:{DSw[2/)Q,uxCjjMJ G)aL*/BtCE$x4uPxT$bOK');
define('NONCE_KEY',        'WOoD5Z]t&;CXxLG&d#$&`K++fR-9yf9*O]~IOty|}fpH ?Aa4.-;:_)-?=&lq,Rf');
define('AUTH_SALT',        'xAM[|P%7:2}82Fo|hS^&PYeo6.d_`Z+:qLvE gziKKJ%-bQ;R3LB q ugNnv {<C');
define('SECURE_AUTH_SALT', '9}7ac<.c}-|Ly4~|O3c+W]z?g|pJbpU@EQJ#zT#Zc-z0?#%&DAywnJ6#|n)7nXJ.');
define('LOGGED_IN_SALT',   '}fr61B/z}-L1AWb/LbxX9U-fJXcK*s+)O#ieUnZ!h,2^olv10UGB|JIh+5VMXQki');
define('NONCE_SALT',       'J$GV:mrW|+x:`*bNJYXo<zPJuWA!~}sIuC/S{o:@<wvd];:_VnMa3S--7.XMH5Vg');

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
