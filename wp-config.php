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
define('DB_NAME', 'foggyzon_shop');

/** MySQL database username */
define('DB_USER', 'foggyzon_huydzo');

/** MySQL database password */
define('DB_PASSWORD', 'L-5nWmK.8]+=');

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
define('AUTH_KEY',         'SQF9%,g0;B3|h7v3 LqaL8l,}Xi4[P:841%Dr0:2CmzH8XBNFL9!${;^}]@2>]gW');
define('SECURE_AUTH_KEY',  '.>/(-a89y}!u9H4<&iGS)HN.7CQ2l@r&.v]ThO#U?LukW+OuBpz6H-</?<:W{0~g');
define('LOGGED_IN_KEY',    'hspqT:Lj3Z,/O*%}gy-`-(n15*zi#bXpzEteW.zT7^i@Wb9P*>=n{[*B8cI(3e!(');
define('NONCE_KEY',        '=V(>%/Pp@3-j)f/JP&9Ub% ?/,#;|sS|NZT6} *tkU/6{?xx$!K|6X<(p1j;Mo6E');
define('AUTH_SALT',        'VMrQ+r-!&@7u2Q ^+-k%OQp51L@Qd<DNP##~Zihv;[OU<&}vb6PN=|_uT-7]=%>.');
define('SECURE_AUTH_SALT', 'BuL6]x/P&WjZK.-vR.V]_cRo~uG~7DvsQk/gc:/BX<m`hm-fR_++7=2]--w}!Ql6');
define('LOGGED_IN_SALT',   '{RB7.jT[pfR.n3`sDXxu7?Y[aOL;(2V4-#O33%lh=Y@grOl4@Z}n(?NmU%5-SERS');
define('NONCE_SALT',       '3n)IC}vCwp(TcBSu+Z,|/[5)gSw9MTrm>_r?3:?P`]~b%>8TV0TGCz@uqX{H9]+b');

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
