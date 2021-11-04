<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'tubes2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`EqxtBGf`2lIlxzKcmv$d`%YW1|CDd/BCSQ/X8t^Jf`[B5 (=AghCDX5ZI4Aua8f' );
define( 'SECURE_AUTH_KEY',  'l&|Q@wc-<1~t4Bm,o5Yj%(Uh{gdQGg4E.=2L+2&N7G=( =L4i[76=5YR:qSE%?^X' );
define( 'LOGGED_IN_KEY',    '?>mj9DWe{fQa7ID;|5ctm,wq#u]cf!uy%FiP;EFZbz%1{u=fGndTWrV9@Iql39Uw' );
define( 'NONCE_KEY',        'v]yMx<O1  yZnCG;1Q$CslM-p:~7Qy+xRxL&2%lfU>?6ZZq) $7WrB,TrC!Yy4Li' );
define( 'AUTH_SALT',        's+<8/AF{ j#$+O4ryo^q29<j1P0pS$K5:y/:rxL)h9J}E&2G2FR?zLE9,|SSGqmb' );
define( 'SECURE_AUTH_SALT', 'kq`ia4_=xOP#WhrBQpoUKT1Dej(oVCU,[=2sM(2E*RxX4G:oOfdw{).fw J<hs|0' );
define( 'LOGGED_IN_SALT',   'ph3qUuFuQ8XHEU!I2m#@3g_uJyVLFYZ@ab:5S^K8?C2{K/[^:r.`!R;c:%G+^Z-2' );
define( 'NONCE_SALT',       'Y!L8+(U5sCB`pSPLkk5GGQ-Mde(Z/m:t&YdU3%qCGI^j9bPgyM`ZSbRa|sM7(V6[' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
