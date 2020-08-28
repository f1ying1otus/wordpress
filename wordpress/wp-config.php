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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/APvYMC_MQs6;IT@[C3%Q+.4 NJ/8|{Q~zdBcyt$M;2T8vUE-@@BptCrz^i9tUmv');
define('SECURE_AUTH_KEY',  'Td|;cfSwt2@U<ky,#k5pmlzB;M?]SHIMk5L`/%hpyp,(!%E5b ZZchFScNHT:alw');
define('LOGGED_IN_KEY',    '*P|fM_?^TP-Gj|?dR!s-Q?X7~zS0N]&1dSj9$N|ulSE3NL}GX1SsSpp;%s57~?WU');
define('NONCE_KEY',        'H/X}kncK=y/UlsL`h*Fp=Rjqs=d.?<^OkBA7ieXIT9xrI(}Lpc2BK8&b!<FFHy+&');
define('AUTH_SALT',        '4*u`VgI,~-:wO0lYeL-|M[u+UiN|%-hO4fm=,i|&SH+QU,0?XVagPn0:-z2h^3Lk');
define('SECURE_AUTH_SALT', 'B@ZYFM83xr1NJrqM[A8Zzvn}ASK&wSJTX_U{WAldp{O+j-^pd2<v;zN=1s;5*W-#');
define('LOGGED_IN_SALT',   '#J27<Td<Ban/fUQGTOaF~D!$zl&EpQ,U)UR|a*gV+W[7);a3G:~[z-+PTV+y;I0n');
define('NONCE_SALT',       '}!ky;U=jvwE0+n+{tRTal(b1v9Fc%Cmc^:6kw,>+YQ&5DasXu{OlVtPK:pTAi(f4');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD', 'direct');

