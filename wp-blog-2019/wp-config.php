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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Mbe8`Q6~yIc@`#Dg[b3xD2FpdzxK?/7)yDbI{0;gbPzW<sonocYYnRkTQb:BdIG_' );
define( 'SECURE_AUTH_KEY',  'pZblBZFR^.%VL?!1dY4f:R;tk*C:&~kuBX[i]v@a|?7zoD/y?IFAd7l>2kXiVG}Q' );
define( 'LOGGED_IN_KEY',    'br=tt<a`>;f>u4v/g4l[kO?9}*}6lWE*OoTxK?SX>oKG6#@PPqX%WNA 0h)}9;3x' );
define( 'NONCE_KEY',        'a=UTGvFhya$PgU$lD],b=x^4t#tQ%bfl3smF~z$m4J5d-,$#Q85UWz.JvoCIlq[:' );
define( 'AUTH_SALT',        '525PHbR.p1=qQO*Q2`rFdPr^`Frf+9I-8}ulr6V1%qlallrAO`+el8<iMr7%>lu5' );
define( 'SECURE_AUTH_SALT', ',UJY`m[C=>3N*k%v#W$l)jk8EH=+od9B2^U,ppmzInHA53k~}-G#vn!G4+?tHp03' );
define( 'LOGGED_IN_SALT',   '?+{%y+I9U>E4_adn`8}7Bq ]L.E^)1(G.Llx<27qcQ]/#da6C@i9@`4Fi`MDW})i' );
define( 'NONCE_SALT',       ':~7rp>enAo`3wHUmnuKCb5-{1+;~|R+WR2$62L)5E-kQf+; B@2hPHGu]{Paqqh_' );

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
