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
define( 'DB_NAME', 'smit1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'JYGkhy8YX]QB,Lj`}Y)E<dDxhm}d7J5U><5+{E~GFyo)rCp&WG):RX)C^#AiZMw^' );
define( 'SECURE_AUTH_KEY',  'MY$IfQy>6@}.iOZv*<`~?>K?ZcW~$Ve;>KIir[.p7FOLkQ0f:/Bgt.HGlX,j7dw*' );
define( 'LOGGED_IN_KEY',    '3;-PbfPg;_K.)#:w518rm4Sj|B^VB0d I?A=eEj8~UwV!?<qUi7~cxl|=*>n_[ow' );
define( 'NONCE_KEY',        'ya`V%v6PK2fNLNCoSl*Xt~#I/:!<9uxd<NX]*-CTy|FK?7Iru-3U8<[755sBww&n' );
define( 'AUTH_SALT',        '3NHGZ[l2U}J7=y-_LsxCDY`BmL~w;Crplvb3!T@ylgX15 /j2_;p@a%!c,UbB~]-' );
define( 'SECURE_AUTH_SALT', '.uE(V;/LJ9{grQ:9lN)>3|a&2}g1OcnCpd7N57cTpaN57S#F62$8XVhlwdY0nwl:' );
define( 'LOGGED_IN_SALT',   'K{2/REl=BsJR_&c,;3],CTE(Y5V<a4=4=kzLf{aA~a |YoVr,Z2r~E2:u(M?$nXY' );
define( 'NONCE_SALT',       'mo:3q 5M|WZi+uU7*0LW3c:;Mg4Y]1H|!K wzZSMTm`5LKXDhIL?1h`JorYeVI+;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'DISALLOW_FILE_EDIT', true );

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
