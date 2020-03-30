<?php
define( 'WP_MEMORY_LIMIT', '256M' );
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
define( 'DB_NAME', 'combme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME','http://localhost/combme/');
define('WP_SITEURL','http://localhost/combme/');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oyu*[VLa,^xiF$&sEzWiWQxFG/z:E>5.ZqE$hwz]]vgo;&:M!,+a5Lvve`Ku4iN!' );
define( 'SECURE_AUTH_KEY',  'q*=jK[C/^jH4-|eRe<;P(#}pkG-r60l8w,.Bno@=K8dJx&>U+HcR4cY^<t47>|]S' );
define( 'LOGGED_IN_KEY',    '#8(z02*hnq4),d4G3),D-2qM/r!G$=*`*XK7-k,`L`uUHy?G:>qKYcTYr.Ww(PC5' );
define( 'NONCE_KEY',        'f;L4Zq)V8yu?xZa6]k:naWEvUigi!}%e/+g5zIzz)DTa.()`?V-K<c)4?8{.VM7p' );
define( 'AUTH_SALT',        '<buOTpkIpbM)-(a$K`^79#>27|4+[#U8.d12$avy1Wby1FO8!C8JkV},@eh|M-<P' );
define( 'SECURE_AUTH_SALT', 'YVyUL%e}:bT:-)vTjlY*6zS];r+{XQzYm>C2HcuY)o0bf)xhd!g&BBOF}VwtXE+K' );
define( 'LOGGED_IN_SALT',   '-yhI[?eF&Mn#395>0iJ$Lh]*mU9T_InqK(6DMw]$iY>3SH9>Bs1KfkLBd*U;#goP' );
define( 'NONCE_SALT',       '+mrTi5Z?TKr_Ja2TQTd3FiY,QSJ*+mm?SeX(qImanEdFqVxv9)}Ksd/X+j6KqiCb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gysu9_';
define( 'WP_POST_REVISIONS', 10 );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );