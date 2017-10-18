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
define('DB_NAME', 'iglesia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Iw$?{(9~^JxAH`W+ku6jB@NZIYDBs5L(s=A5uZ?wNA;E>3J-=)or4+fHfMgEdB/6');
define('SECURE_AUTH_KEY',  'UW2d*wj0&Udip6ov53U+Mq%Xjb<A1wsG6s4|$eZ;>#=})SKnK_N;n )E%hLBoY6#');
define('LOGGED_IN_KEY',    ',_&,Iux0kdEWk<Obf.t3(.aV@p*7Do]@wNk>dG?@Rsy)?t7Wk}CxO)^.DX.ZfTt|');
define('NONCE_KEY',        'aP+B0QI]$2-#GnG<<Kr@.;Y--Yxa}!z8U[9gokH3wqAOC13[b&?--;_x^GMA)(]b');
define('AUTH_SALT',        'BKHhD~v>UY?kLE)?dLc+%zFYJ#P).g2,%5{,-5wm~K(]bJ#a[1,k>1=VIGBm@(<X');
define('SECURE_AUTH_SALT', '5Qqp tuLH_O;](C(+#Bo/13|#1eZL-UCXvcK}(Br^Ww9o_$Fl=vk/k2` 8T!z#]m');
define('LOGGED_IN_SALT',   'C[+0x7xQ]WE+eO+sy2IIC:d-CLb]s#t*Pn/M$d=?b56TWAb=)ej0yX@ Hy19o.h^');
define('NONCE_SALT',       '=,}45/4ABpo<j}5?UTP)3|.*4CBTCyy?&%BR9|/.yvnCD+sPgDlYZeE6^:JAyDGg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
