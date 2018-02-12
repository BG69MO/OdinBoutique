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
define('DB_NAME', 'odin');

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
define('AUTH_KEY',         '0(=ixTcY-`(MY6JTSp-(X6wL^Epi0~IoN./W-iyRkAW(JBcTZ.OotWR]$w[D6{:P');
define('SECURE_AUTH_KEY',  '?iIO/ZIl%0(n_qn]7kLiQ j6.L/Z%ys/Y<yo/[/X3(wkvGuC1; (,wJed#~raZ`:');
define('LOGGED_IN_KEY',    'H-wZ,RnC`?kV Q|#j!vk&,ge%CYUwy<%ypC<ObM[g?95x,)wxN4feD:Eqh3ik;49');
define('NONCE_KEY',        'Bm-k*{V?kli{v|N?@sO/!]?l6VoXaOru-/0/EIGIqCjy(FrqRXp3e5vmnTQ]DO_W');
define('AUTH_SALT',        '/r|@,u.Ha=1|Wdos^0k~8tH=pZ&B<~B_Ky|HXAEjDCCZz2O%=b={6*(!ta=71ZQN');
define('SECURE_AUTH_SALT', '00#;VM}:T.0]|:S1grgPbAc`XqwAz^ #w8DDaQ>w-qE}p#,)2|y!FL2TK+8m~P)2');
define('LOGGED_IN_SALT',   'IaN{`b|YX0hU`/#D.%4b*-6{eWcD#:^F)Lqt z&YvSqDmbia_6G:Juk,n[o5PX!t');
define('NONCE_SALT',       'IP#lzLD9R7Xc44G5C?(j~CIlf,HF?i7DEKJKq_8Pth_9+$T:TK{.{C56d#>I|USV');

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
