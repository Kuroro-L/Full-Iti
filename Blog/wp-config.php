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
define( 'AUTH_KEY',         'YVs4>^Kf{9LO7NkI2:Ukor.?C> drE4,<q>DYCh2W^^:W/?NVYj$H@e~#bhJr.~H' );
define( 'SECURE_AUTH_KEY',  'aI@LBkhF=5NX^&NsWhi~>)v^|]mmtP1vxr]7IcG`q2dlFsOn<0q&(X/}-p>Yzwb?' );
define( 'LOGGED_IN_KEY',    'Y<>s~(hJ1eX=4?@eB=O0/<`X<j!AV]93)?M4TmdMP;_CMd#?W`aLn{}eF}s#$hLc' );
define( 'NONCE_KEY',        'CiX*pj/]0EH4 s].e3ley7%<%;h`RX[PB4k7H8-;Y~,(7qX>bX&W.7Q0n;t{$G/=' );
define( 'AUTH_SALT',        'oaPm$$|W8bak;w#pQkJTx5>]bogWK``t?zPwYsR4]uv)JF+BJ3>HJ;go}.|QTzB`' );
define( 'SECURE_AUTH_SALT', '4{zSdb84jeP0X ?~U-%xZwI?npe]Tywc6#7Z=cYl`sC*Fd+!N.&E@L@1iGm7*G7b' );
define( 'LOGGED_IN_SALT',   '#},tckc1_8+H:gO#)f^bx^Ga#.!oB!H^Z^O`a(j_5^JYw[R-IU&^8]:=IM:puY=z' );
define( 'NONCE_SALT',       'l5m%o+fM^;!ZiXR7NBljNDGXHFj{tp{gs)UEO3H#Hy`oH%qk,@amMVaAy/cYEP1&' );

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
