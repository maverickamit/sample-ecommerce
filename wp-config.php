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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '1adnJ:}lavrszv7OmE!bWZqv`yv3w)!_JN6cz]/72J.vvAc&qU)*!F!mo=sdPM;g' );
define( 'SECURE_AUTH_KEY',  'yv8[i:boYQ8_2vX_g%+AoLmRmfF#vfwOqo_Y-b^dD]SYP=uh%.1LpADEt&[#4~B=' );
define( 'LOGGED_IN_KEY',    'isW InxfWlUAJ5z37)L(Wuzjg|))b[*?[yp&2/^xxsB>j*CSK]8Qv4Eao`BxJ_Fc' );
define( 'NONCE_KEY',        '`-IOf=b!p}ATDMAN|q*Y0@#n:QDIyd$tcKfqC?M/2BrpfVDQkFGXV:B==XXJKx}9' );
define( 'AUTH_SALT',        '!wsMTZ,a2k~zK0?3)Vk?`&YpG*3t)Zk8>G3)hL9(O7Qq#j%q2Mk$kTNR80rfDc-b' );
define( 'SECURE_AUTH_SALT', 'ET#Yu?K;s*?r>N|C3eu:lnTzhiP)2pkT#q188Fp*k@8e&:C>[j[Kfm~t0|22C J>' );
define( 'LOGGED_IN_SALT',   'tWc&9UpVi?Y:]Ul=h%B>ybavA-H<3Ubv~X3l,E<xck|[*g4~`YdxQ(l>nB#CGtC&' );
define( 'NONCE_SALT',       'kWWEiDhyM,},EF/bzZs3TYKJSVo|=s}Qs$J48R7bl}s{rM%A.K4&3&%;zSmwOI;Q' );

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
