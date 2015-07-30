<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bd_sd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'taisa');

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
define('AUTH_KEY',         'P6|q!.[8-h!@Q  dE4e7vB>=f!$cF-Uew`U>,@x=rKE~;VkTgS4O|ot|T?/Gl=|P');
define('SECURE_AUTH_KEY',  '^SA;gap:WJVKy|;kAxs(E|!T+h`P)G5TXYK01n+h!a^99y:<1 A+Eg3ox6nd)A[|');
define('LOGGED_IN_KEY',    'AKp%+vPRw(iLP>uQ[,WLle y:#Z .M#wO|ism[XsGr+ ~i7rS,X?B/I@U3!$(H(z');
define('NONCE_KEY',        '*QFUgEo8iz<7K$]bP>S9RtZ5i9{Fm4liS|W&~Ap+&d;RM[5``Ld+2anH*sv BEr5');
define('AUTH_SALT',        '%=GEDi|^2Z|XAKK0A zQx.PV*6_,qjuUEMVO09Fc P5^+MU^&Z& Il>=JzHHKu#|');
define('SECURE_AUTH_SALT', '%Tpl7=Q;*m(bc,e7/jKbgK[F+Pjpwt%.~2J=D.)=#bsvdd<]BY,/^ie4 WV7;-D6');
define('LOGGED_IN_SALT',   '?!KaQqHqtOfh;~#^7m*|-><n]ir`[ct1R)w@wR0H$Mp.D7%g%`}z5vH8KK4ca2qh');
define('NONCE_SALT',       'fr?KDoPr?0u%!&%PaCoM)+L?3-j}!oN68L0,J{#q:mv;A=1sc!2AeM|FQymxXKl$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

