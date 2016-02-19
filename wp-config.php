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
define('DB_NAME', 'healthsci');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'C9cWjpAww2AJFPz7');

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
define('AUTH_KEY',         'c{8:i)mBcEL{>L*GE3S-L6(`D]j!hHr^vZ//4I5R#n=gu2CBn/<Cv@twNKP68Xit');
define('SECURE_AUTH_KEY',  '#I4lH]weuY-xSpxYr}&D`?4+T[FSR.JhN+,C*;^043b&S]fA:},Qx*wNrcml2:PK');
define('LOGGED_IN_KEY',    ')oD55H51W;pS?23N*>XD$Fr#na.;FvF+GD2F~HL.Wf`GTFH5*L@vi7d`^-i+USH=');
define('NONCE_KEY',        'T-< *z*G+y{YDPL7@o}i^?a&:ey:1U>]SmuZ{k%J@3fTsuJBTm?AiF4r-w1%JT,r');
define('AUTH_SALT',        'NtPO1ht^I wb$IG>zSpL;WDGN Kx9M~p13[cFdw._Hb?,%YZ0oE>r&4da.8=`R0>');
define('SECURE_AUTH_SALT', 'P;6{2M<Hi(@#Gn*,}<sg^xY#Ag<,a`{**AdV=yBz&,o;![dsrFR^jldNl/21_pfw');
define('LOGGED_IN_SALT',   '!QdfQZj;iDy*lq:)ohG&)x<2 lmkTrj2!-lj^RKm#_DamMy(2HH5(6({,1%=WY:o');
define('NONCE_SALT',       'pPyUQ)RbU~XV;,Yhbrced!}^hSD+,RBwg-lG;s->--J$3-a[8D1$7EG-SRZu-PZ1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'meu_';

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
