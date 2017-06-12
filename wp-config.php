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
define('DB_NAME', 'custom_wp');

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
define('AUTH_KEY',         'U:]WC8?2=&3p=wy<Fqg?RC-?|+_2>aO+QDSBl4%qHeZ&w>EOA6aaxs{J!{-c.6W=');
define('SECURE_AUTH_KEY',  'SH2f$h8JaGspe3koMO[~`h?Z?SHNP7A`]$*h0SMqjYV*QQ=xJX(q0]$3zdtR=~6y');
define('LOGGED_IN_KEY',    'JvG*+gmJ4,d637e(MVC04ac(#wDGXC#JkXVd%<iK3PqTFvO,Ds[q`M90(j#JbEr.');
define('NONCE_KEY',        'l>+DIgmVDcD[[Jl7Gzcw$++&k``^,,DC[ Z)8zW9iBY`fR8Z~2/y Hww}uh[NhR3');
define('AUTH_SALT',        '+djN6GbBx]~#>DG[FFc.#Y [iP>H<O0Dc.0qV#h-S/y&Vkk|EUs{Wy7QFjE`J[a-');
define('SECURE_AUTH_SALT', 'zK_WUJin*u-a`q60Af]60L<[?{ A$4a10m)(Z:JuF.1.P I2DqKJ_@jni{D#|CwV');
define('LOGGED_IN_SALT',   '!Lq70_1JC2IUz*);#y3n*NV<T8ewmbUr&@(5hH1XdWcI_sfuy!sg1eSdc(y|QN0M');
define('NONCE_SALT',       '@$DawP~rC4C[45H:-? cK9(g]-:E0ip$W!4GJz5Xw};KG1AQoHJ9K&o5u/*XjX>M');

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
