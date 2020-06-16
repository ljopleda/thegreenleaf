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
define( 'DB_NAME', 'greenleaf' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LJopleda19' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ',2O*NX>^ALyIsU?5T>N*CW)OK3KC4.>]MPlN}re`]7z34Be*1-DRk9}BiQZtv-+/' );
define( 'SECURE_AUTH_KEY',  'Iixn! J#k<i._T?7FPcaSU[7}KU@c2rhcl8{q~@<^nH{mYtK_16$3b3gY~F;TEdV' );
define( 'LOGGED_IN_KEY',    't<,ruXxA-]2~fohfih~jTtC!hVC!PO!#<.x1k!OYDv1#sR)EM>!Ufd:7yC2y8yw5' );
define( 'NONCE_KEY',        '[G.DZ.D}.e]*hQn?DUG({s Gu-N vy$V^YYztb>x#yW9$,!puF9=Iu#@_6dC R!P' );
define( 'AUTH_SALT',        'MC1sJjCCVI*dI26S?7@D9!M}nJj,SY^~%W%`tEKonOfe2gAqi=o`ZX+CZR~<q9yJ' );
define( 'SECURE_AUTH_SALT', '#vGD1$1DAz9JP:s^?wd51=?^1 %oho=6Z]Y`G.Pu|^MfezL{D1I:gXtvDs$fGX&5' );
define( 'LOGGED_IN_SALT',   '%bz^V>.?iYH4o-Xn#4Y*gH;Ku4`>q:QYP[ZL&J85|yGpSS;&UK`[-Sb_bg%8phNQ' );
define( 'NONCE_SALT',       'n0J&h70EiaG *XJ(j2vrHIy}R]!/;]&P_L|Se9f;pa90 %{Ah7$zWMyi:D&DM57&' );

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

define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
