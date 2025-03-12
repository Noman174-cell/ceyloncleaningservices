<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', 'u664252469_Ai9hy' );

/** Database username */
define( 'DB_USER', 'u664252469_lSUv6' );

/** Database password */
define( 'DB_PASSWORD', 'bQNX8O3fvy' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'ox!XA]e!d;#WOjm5e-Q(o MWH4%Lgsl*7>4,L8?=bhK&G@i5Xpa6,V-x-FD1qXlF' );
define( 'SECURE_AUTH_KEY',   's<sD[eWC-4.^K7HZxIN -<${z}vbBT^kP~wV8X&D&PusR)Sp9pt[>S/*Kh=&I#|~' );
define( 'LOGGED_IN_KEY',     'caI*Mt|K)t/fT gk3=;Hs[X1u)^2uC*mw78av()uU:h`DXN:J6SXNMU&9@@J&a0{' );
define( 'NONCE_KEY',         ':WyXKcmG5zF}8bOM{FmQO!SF>;cF2j%b[EeZ<&g[!bMcEc0-LdLuqJb#JfP]>bK>' );
define( 'AUTH_SALT',         'C_ZZ:*&Q!)ZPhs~t>Cgg [ X(hl(X8hx3:Jy!Ug$gzQT5`$^Wk0]L##fs)Pjt}@K' );
define( 'SECURE_AUTH_SALT',  ' 93=O5YIE![f<+[{.7SzxUK+F`ly3{2{3LUHfC.<]gFzwrIR9@]R%#e}SJX^|Vkh' );
define( 'LOGGED_IN_SALT',    'gRiwJ|C:fdBax^_a3Qvk]KJ4q8<=,<<6s.V* 3}6,6^#45H!mt&_>pe)~9PNQbn!' );
define( 'NONCE_SALT',        'Z.>*-p>bh$,n0p*#`*K#gWBA+3sm=%T<`!,oZ}CcYT1s{?%UCKL-TI4FHv(K,N~T' );
define( 'WP_CACHE_KEY_SALT', 'j:w%0{pdY25Fv]s4TY]K%!A1zDt/,6=lVQwgYfI:nIFpU!m`@mxcc-:f?6HT0<.v' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'cc6d5ce7c002e701fac999be624fe372' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
