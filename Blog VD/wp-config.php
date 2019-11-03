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
define( 'DB_NAME', 'wp-blogvd' );

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
define( 'AUTH_KEY',         '~#0&q6fa@ZPFnbe6&BTGzKZ0jR *[en)lF~UhE_6*PP1X%LGEWg@9@[~{fjt^M h' );
define( 'SECURE_AUTH_KEY',  '56 W[j5|aFv%b0ZvyY::~~!;:ge=LZ6&<M#$#:^A^|EZW.wvr,R?ELg@hohPhaQ[' );
define( 'LOGGED_IN_KEY',    '>&V-Ct!I-Ni(zpUWnz7vi*_ki>808<,q|1*iE;8;O+%T%(qYad;|f+zz06,mEr,d' );
define( 'NONCE_KEY',        '-15DFYYF_es-dHb`7<gYL{UPijE6LhPwh>Lnc/p+IA0f]!}(Fz-JlE5ait8=(C+F' );
define( 'AUTH_SALT',        '?of5(7ik&>+c@T/F(ou/kcv{[:aX9L]1=Ap*0_[|8):}o l|zy~ndA%C6ANVl4_=' );
define( 'SECURE_AUTH_SALT', ':ai3s^n{|:bbaNRR.u}[6/Tv<N:|_)]bm{u%*i9GMeDBD@mW#oJZ}AL=D^=D^g=*' );
define( 'LOGGED_IN_SALT',   'id0I72~SJcLp{P8R;[%gfdGO4Kq~~4,:5|:0u=R8^Q/--F^)rEh=beu4peMz&erl' );
define( 'NONCE_SALT',       '~jBFIICrWS*Cdi=M6q5GFF;k/Lp4v~XZnL| fDSl>U-}5t=uEqbk5{,J+[O12][2' );

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
