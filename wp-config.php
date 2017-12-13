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
define('DB_NAME', 'allwordpressdemo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '0^ l{Nx1`7g1&7?)^WSWZK+h75K~Lshyzl[2r5urTnPX@%+LHz& =Fz]h7CIhj^X');
define('SECURE_AUTH_KEY',  'nWN46F#Y$wJw@qlPfMPZvMRN?gF/$`Labfh>`CRU8}OkqC2V1sY7EEn3qO`Tv H0');
define('LOGGED_IN_KEY',    'VjrCrAA.1l,|?0vQ>/Z1%b c2?([Th]4pu{{BN$|O]tir#>Mh9`9gF&w{LJ9%]/%');
define('NONCE_KEY',        'zHiff`)_@?*51@;xQ%-AT@bv<*(zAbZPR5Q]oVzQ4/`<1|aIY12a0q} d/qQ(0%A');
define('AUTH_SALT',        '+(Fk,bt|&?z7[(h)?L)=er~%6Vd#1ox-bh9~!}WT/e}&eA?$NPg2:b<fH5^HJD,N');
define('SECURE_AUTH_SALT', '49r6Os}gOL]Ve95zs[?XFu*o;tzZD]gp6 !D<6eNS:$`P_0<S!X./2#uH=7Rj:ch');
define('LOGGED_IN_SALT',   '~DW?~iDiQz~kP]<gWj><R#llu@S[+&P~|77{G!p:QBgG@&LX_M$.i]l}Ue8DJHD5');
define('NONCE_SALT',       '9g{#oXX6s/7 )yW` #C:(]]@ucq#&N!:DRTv{yc@?RlxJzP+`~&IXo/~Eo6=1Ja!');

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
