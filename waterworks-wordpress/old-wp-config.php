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
define('AUTH_KEY',         'QMhbqkjGDMaExFBO)(LU:c>9jv(-R:%Hfbn@hLYc/NOHFzPo(wGGY[OVj+gSKD:0');
define('SECURE_AUTH_KEY',  'VH)%Go9NRpE6(Nh-lyud}Xy~RA7B_]cL3[i;+lhDd#`,!^!kq>(sdGYb%4~:.;F@');
define('LOGGED_IN_KEY',    'E(w?ld8CXDvJPI4ih#@K2lBN6$;Sn3>,Xb^@&HO8JRZm=mXf4[(VD!RZ4+lwX^?t');
define('NONCE_KEY',        'B1XOn+I,pfcDr_H:F1@7=//QSswI:gE5xLT/n63T5wDn}IB{#x%7M.E;+~@[qjzM');
define('AUTH_SALT',        '}wAO^i]azambtgMpLFIB.i,>mUw<fLf}A8CaNt9#1<mvlGA%J!L^-QRF;M_II3ne');
define('SECURE_AUTH_SALT', ';>$cg@*6/(2_7#0qe.GyS8i SkVl|LO11O]_6i!6ZtO2Z|uyZEt.2vP243A)RaY,');
define('LOGGED_IN_SALT',   '3RB+hWO(/:LEp* OPZSmqsCyn^1!h)4}Yd2F2A6&I;MJD~0M%V#M~qA1cQlftbB(');
define('NONCE_SALT',       'Lq9%/ H`$i?1$DpOWAN*TcP<p+MQ.h9!Mwa~!-*AKz.zMv+{#EhG%uF+oyqBFs|=');

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
