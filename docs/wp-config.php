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
define( 'DB_NAME', 'ad' );

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
define( 'AUTH_KEY',         'DOj4BrF-72R[~#biz7Fm/A9fp+K)ZE~YNj]sOH9-Q*tL#ADS3*j p]pTk+{zO/,:' );
define( 'SECURE_AUTH_KEY',  '{7~AuZVav]Te%*51Q/OKA;a!tE(*Ps&u:,w?y?a<&0; jdnzk%cA;%zr= |GV7t~' );
define( 'LOGGED_IN_KEY',    '^=Nx)bCC5M8!2lm;hQ56zM!jB(O,UTGNd$?ALO<K/I99CZ(V(oEcz9kgP7%;W4<v' );
define( 'NONCE_KEY',        '4B2pgjP-O U@1[reI)R@dhnMxn)6E(*7#O&58i8a`:V+/Z;c|_iqm:g5)Mw(z,o ' );
define( 'AUTH_SALT',        'GFOx? dBRHv4Q^Jy1|}bkC+]u%orX};r`(STvGz$%kwzcaNVqi/,$bb$c$,AbQDS' );
define( 'SECURE_AUTH_SALT', 'WQNQCNOJUwFE/n,$?Z$cocN^8BiHD&)O>aWW5L{YDez:GHvQpt$0m*9N?[aemq1m' );
define( 'LOGGED_IN_SALT',   '+w]>f&h<D~v<wFb YZwqQ,sZ@*$!N@O:R40_bU8MyDpfXE]{:9&)Q9hr~:{:/yoX' );
define( 'NONCE_SALT',       '-EE/?CK+#k]oxvVG1d^mX4!(L@Hts>9NkoZL-*a5%BcJM[piL?6aDUqGlhkj|=u7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ar_';

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
