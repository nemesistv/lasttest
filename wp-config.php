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
define( 'DB_NAME', 'edin_db' );

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
define( 'AUTH_KEY',         '=q$x2<pXb/<&~]+uGpH<2=Bx%IAj#F@gXa~`!J{oxuZ_]U8uST]8qMYa=dqSx/{o' );
define( 'SECURE_AUTH_KEY',  'cOB>s9qw<X(eN%?tvAu=WjsZ!xiPn|+o{T<p(a.1AQzfLM/nS[T3y3Db>A UtTSw' );
define( 'LOGGED_IN_KEY',    'zlo@j${6-)}r_T-wleQs={nBaEAG?|!ba?4#(AAX6V-W3Kx[|`/[3Y%<QBqer:|]' );
define( 'NONCE_KEY',        '(|F=XcLyq ,H~ur>1g5]?or3G)2U1N@%m)RJ%3wO;H$.[*@bQ*yiw {mBe[Z>R?^' );
define( 'AUTH_SALT',        '[mt5xFb9a{W+Rt$E|R[{aO>K%%o_N{?yr!Y>rAsiB,=M~TM}bUe)tqu%/,}KaM:Q' );
define( 'SECURE_AUTH_SALT', '2:$pe%;EaH 6V$:LFYef`uq%M>8d?DdpzV8|LJW1uLMd~tV.>djDP|*R{M0l~(c>' );
define( 'LOGGED_IN_SALT',   '{<=!42PR<Qe0FL.f f)R$N*59W!-UBsd!_YD:Xqt<qln;7KfTzq.iRBcV|(=%amd' );
define( 'NONCE_SALT',       'yy8~KZ)gDMxk3tREdy&Jxz%J:NJJtq1sov=GH<O@{O6HsYk!1Z.pZfnp]=4[^gBb' );

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
