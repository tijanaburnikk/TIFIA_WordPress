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
define( 'DB_NAME', 'tifia_wordpress' );

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
define( 'AUTH_KEY',         '4jQ59ibhT~u!@NFc.^)!d6Tz0v[QVx~n4&t7/?Jo2~40HkMhN/qwQ*wM4Z!F@Svv' );
define( 'SECURE_AUTH_KEY',  '3H$*=XGU3wz4#4qzrnWr[zn)GMzPx85sRtBUM#]0jK[7@.T*is~5)T*tpY}}9vE!' );
define( 'LOGGED_IN_KEY',    'DQhPUvX6[3.|4( i?uIf!d7qk>Ea7rBt 3zXN&MBNX|nF;iT(3 3kFRyPe4E|i&&' );
define( 'NONCE_KEY',        '/h$2!S|g rBC@vKfJr@5_X{P1=S(Q>*zg,i;N6T|$Kfs;js?_gLZDD)6-v50gkHa' );
define( 'AUTH_SALT',        '.=r$o?IK![g5%qs*1kF=Gg#S vrEb#fSFU69|r;:e6}e@G*.wK8q/RS> <u)&GK!' );
define( 'SECURE_AUTH_SALT', 'ka63[Hla}_u:Xm>49PJ/H4+utD@@xe2n^I-rgoy!uv<*6kI81[N8xni.3k?ZS{!V' );
define( 'LOGGED_IN_SALT',   'D&?2C>U.SuGkeuh)r@@BekH+&vN}16V{4Y(PG!$&%^%]`(#DDOEhcl/p,^PoLo&X' );
define( 'NONCE_SALT',       '8G +CglJaD=r86u.ji_K~[Q>)8)w`/*M;:c4d!B[~{k!Q4J)A?-+F+7bRizoc-yQ' );

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
