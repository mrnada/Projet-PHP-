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
define( 'DB_NAME', 'automobile' );

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
define( 'AUTH_KEY',         'b{//|??I1D+za]_+A1$xxBa>CZW[IOP8JJvys(uQr#-BVT+1X)v[cS]7~[;U8dxK' );
define( 'SECURE_AUTH_KEY',  'Z>^$P8H*Vbs1$hqR;E!}xn2_O17Oi2iN^W!%2i4D/GY58U39d:/#rl6vLd&f`m{l' );
define( 'LOGGED_IN_KEY',    'zD5GeV4QUPCU0Bj3dI~uqp}l0]-!SlYuZ#6Pu~Zy2Nx[cf+,79?wr;6Vh)](ML^<' );
define( 'NONCE_KEY',        '}lr7QW`k2Zy4Ij4ia,oC)IS3;q2f}uBKCLmqx3;F}iuw:/!Q2UH{zFW)I]3g2a_[' );
define( 'AUTH_SALT',        'yXhB9{InlzVleghta $ e?7-[;k(*W04 b10)_Ubc(DyO~w&CL*b!0K-p77xbTDs' );
define( 'SECURE_AUTH_SALT', 'P`T`t%Xc)o6$+t~+RcxT|4)]{5+cTc$6|`b1:lcr!+Z^=fq:8DmKPVGd#!`t#Sn<' );
define( 'LOGGED_IN_SALT',   'Im/h)n5y0J^kfwc:7atc*|U(TcSU>*x+fHBMYvqi[/6ngAe1~0z,i./NHNnOA^zr' );
define( 'NONCE_SALT',       'bE?CmLVq%TD:+sjF@O1xQpx-vM!.q2ytyx%FFj}krC?az}Hilnq+Kgtk@PZ!ggXv' );

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
