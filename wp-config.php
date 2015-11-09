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
define('DB_NAME', 'cascadiawithlove');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '/gtV| 95_@Z:C!^]ZKIC  YGkIjX!kjm+#4!X1`siD}6,4uCkUX_-5+MyI+G,ZiW');
define('SECURE_AUTH_KEY',  'tpd2}s7+7atLBQL:$!LFS4]JpT?c$Gd:nzOk(#x)O=<{2,eAR44]sAM0MX<V)SaT');
define('LOGGED_IN_KEY',    '%!hwE9Hm4xY/;l++BDEgK^#+3DRC9#->Fa8eh&qg=F|>Gb&KWNCy)n@Q=)Ie@f5G');
define('NONCE_KEY',        'ZS!8*t}PNEON1VZ,0j9RTOqi,rm)6%FmUDt:n+.8IhEAj=?.+&>-c=;k%M}6oN^T');
define('AUTH_SALT',        'i07ye.gk{o!5{]{V_;#w&j-H,7noXnDpBk1H+j[52KIgaXK!8?Os*`oo,61**0,+');
define('SECURE_AUTH_SALT', 'ZH0*f mz?EB~XS._0S)p.i+[o$|(~`qlmFfYk{g1I+-tm_LOVk )ZjXDVYM{Dc,=');
define('LOGGED_IN_SALT',   '}2$mE#&R&2hY9u+pNRg,p)ePO=+=VxN`wA4|g=SFHrl~EO|#WlJ$c/58j]+8zM]q');
define('NONCE_SALT',       '4+t2<1}hZRjS%Qm6OZ`-3px*a7;E{gHOl@P3ekvT,e)F^< P_Gakq)06:;PP4[_d');

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
