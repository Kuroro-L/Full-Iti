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
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '9041c7f3f87f93dbd01ef943e655107c30f7af0d087bf5e4' );

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
define( 'AUTH_KEY',         'Y;i8YxTK7r!0b1k_CAhY{fyOx2O}yO2yi%4vLR7.o0M8p+v|HCK;Q~.VqS8endae' );
define( 'SECURE_AUTH_KEY',  '{d0inf&Z&g&^8Y~C`ro!z-(.9TT_xSBx4`!RSL1a-Tx<_k4-5Nb!pDo[zh(*GD@c' );
define( 'LOGGED_IN_KEY',    ';{kY:thFzfn)47w7Q0p7S85aRPi[9`^2gHZG0v>)}f1axT=~q*J)rKF<hO+2]V*{' );
define( 'NONCE_KEY',        'X]?Q~hffZpDi:43u}iv{*N![C>PY&yMtQDPZK7/n%8=aI]HzPa{<urrx l[u77D,' );
define( 'AUTH_SALT',        'CF3uUbQ^J~pyr6}i{QJ;ICcmBs9R<-=`7$`-<n4X@CS:%R_F$a|?@2i  $ijWJYE' );
define( 'SECURE_AUTH_SALT', '|^F=PC04x&fZoGra q<LI<-zf0(su3-=RDp1/IY[l 7X0~nD@LkPTvb3R.[$bNOK' );
define( 'LOGGED_IN_SALT',   '#?z7Eb,zPn$lz/x`7-9s>;zG>Ax~BJOxoOx8?M_$@JDg`tH<X2rz6,CCy:d<C;ip' );
define( 'NONCE_SALT',       'g){PcDWwg$^hq!ZMGj4(HbF i3V-!1#2Tth-W3w$sz6uaXmbL:s1 X)u.k8!q]q)' );

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
