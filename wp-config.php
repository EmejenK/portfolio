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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Xo{85twUb;B(dHR)Lq ,/3xd)lf*u!;xgkJ}RcOTXUEW#$8OlGb&h0_16%RR/,(O' );
define( 'SECURE_AUTH_KEY',   'JU?7QL(kL(D1xo~f| #n=hiemv#%_1V+g$zeH;wzh:3vv<N@9~TY|c|u$3b&0|,I' );
define( 'LOGGED_IN_KEY',     '4i.h<$g{nkESv#lPneKG!uK*?|od5HvJ.My,Sh9f3)&]KnmSHV7zjna{C E!(h~l' );
define( 'NONCE_KEY',         'ue]H*0KSoeZcI%<kH&ZUZ(r)izNC3Y&MR]Jx[mwUNuX9dnJ/iVj94XE|7GNY%U}1' );
define( 'AUTH_SALT',         'p.LFxnX-*M4();[%#sV&;fY.:!J%I);7:_`khe(=K[_<)wKmVyi$L8]@CsfV~FNj' );
define( 'SECURE_AUTH_SALT',  '3Qz9}c.lr3z8X~X5m,#87VeI1o,8%a<|9il1B5`xhA2[~WkC-4]X>|H}:QF.0QQ%' );
define( 'LOGGED_IN_SALT',    'y72mY,Y_@NO{.Tu0~AeM;S$R5oHQu<,_+{Y{V_cj@6|b6tbb<v:^WiNi4I/C9$/&' );
define( 'NONCE_SALT',        '-e*V1+7`Ex5rHJWT|f!g 0BhTtx0i?{l]my:BT(S2-c>/x>l&oFbyLDd]$kv&~t-' );
define( 'WP_CACHE_KEY_SALT', 'F 0E5`=B7k&z`7lz%iA>c@]dM/?Ia}57wFL*?@#lq?d9j>4{WC^+]TSIH.Xy!b|m' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
