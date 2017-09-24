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
define('DB_NAME', 'waterworks-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'uL8Za1aMej?h2sL-6>}<9i8h%!Wd^_D&AX_mSxn5/7n|<(8#-`*3N}O@AA=>TSB|');
define('SECURE_AUTH_KEY',  'O.W32}Y8Ng,g5l;!]O~JU<i1<f0o%vTM=F)GMTCsAAPZV-=+* qzm~Q Fx*9je}l');
define('LOGGED_IN_KEY',    'o~+(b_Fn+!#6`bSj9.`&&k6yz_}$xxpq_%@KxQJ^+G_Y9qGj/GuoetMQj?UUyjLF');
define('NONCE_KEY',        '2z|L-;?<}tFI@o$2/>Nyqx$urtP}cYNJj<)o&n-Wx3T[D5R?van`2ok{a2lm)`K*');
define('AUTH_SALT',        '*&X#D{pkZ]0z0t232ZW;I)TX1Q^W[hw:ZSLPAT,Rq-Q<M|>K-VFc0zZ-<{`^AH&:');
define('SECURE_AUTH_SALT', 'fh_2kh`@$GMy|pDIPw|{}&DrMQ+&VLfy 2_|q;*;#%]EDtLj}Xqud#^/}rqwvpdc');
define('LOGGED_IN_SALT',   'VnQVcP:T~`L:~R7`Y!JOScR,d[JCMJPqH%Dpo kHZ=of|x02P2g4d7cc0Q#r A1^');
define('NONCE_SALT',       'jpW.XJ%Y7jD-OZ9`e%[i5@r3#31EWBfa]^.^q;F);rR1R?-8;LV6]U@4q9z@:8!L');

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
