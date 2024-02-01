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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lookagroup' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'xV7|tZB9#F3g-+@YJ~_sx^$,R[[HlNxMw{hPe&[cb6L+MUN.PbH0-L`+dU.2Gq*g' );
define( 'SECURE_AUTH_KEY',  'T~|]eLV$my8qKG6S&##e:K[hg^8`]4(DP2C.Ul5LYqv;QfA>^+uuB3$`Z>9fs*eh' );
define( 'LOGGED_IN_KEY',    'x,R,H:z>F4]j1BW&hn%AS)i);?=+z$~O$xB%Ro;[U`Xcw5 P$].5(N eCs6r?00V' );
define( 'NONCE_KEY',        'g6b.q]S%^`MH~b)FD;PDL.Z5p~=}icpvzmNY7<IF?ny]3b~3Q-fM&e2v_|A(Vt>M' );
define( 'AUTH_SALT',        'WJIEK_>yMD4x7_d;,ENEZ~S8FqCjv7til8`zxM2IDL;wK7[nY,b@Se46CRCCBb x' );
define( 'SECURE_AUTH_SALT', '%Q^`Ei.t5lb;RsNyA^]/F-vt7@U)ra`-O)@eUj&GH9g9QcyNeYrI9dg,n2oc.L[r' );
define( 'LOGGED_IN_SALT',   '.sgo,W>)ugc0tZ(jB(kP`Jc8F*M|WBv;>ZEYHz9Pr`o`(ba>uRz>GeL[G;`,,6qS' );
define( 'NONCE_SALT',       '-N9@}5t5Q|#bR;+88I3Ng)uPf@Q+gi6od<{sMjC(~8mA6)*+IchP<kV~%>)[V_^|' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
