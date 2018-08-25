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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'joshua5715');

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
define('AUTH_KEY',         '|SrLpR=wcqa_c-S1fI0JK&7+8*@NgV|2[H9~O&PIK8LTdf2RC|F4dk}{K7bV;_&+');
define('SECURE_AUTH_KEY',  'E?v;`kzH{ kmM_wt(udNq!GsGn^tw4JR8.m>2Gz-T{xZLr<sz:]e@_?;-e+MjJ6`');
define('LOGGED_IN_KEY',    'jiu+H&y+~;V.|J+= 2hJ?q7uoX-RDNB.DvQ VLga_efH*?4p$gGz}%6pBJ)1#vO$');
define('NONCE_KEY',        'lu&X.;Y0zMG1;lo(nvr?o ~QgJUc&59!?A(3&K^CAl8*@*!8=[4J9]6So!K&n)M2');
define('AUTH_SALT',        '7esr{p(=0+|+yfr[$Q99%Iag%+P~5p*5-0$ar@~6jFhZE#FHYQssKzJqig}=^>wD');
define('SECURE_AUTH_SALT', 'aQH_697);p2.3`p<&@V0QBD$?8@Q{D,r#CI:kDMD6%taL6{X`M]l{n4C1]SYDNW%');
define('LOGGED_IN_SALT',   '`2r[Bw,,vw6kp!r-Z7gAErGlg}3g|sKK,rU.?9wNIVKMVbNgMni{babDGs%UM3[d');
define('NONCE_SALT',       't$(P7u(A>)s5~9D351~hYFN}SBhR,s;%IeH.|YQL2[H{8a-g?bML<E82cDCoG%xZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp2_';

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
