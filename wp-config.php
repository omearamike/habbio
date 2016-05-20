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
define('DB_NAME', 'db_habiio');

/** MySQL database username */
define('DB_USER', 'habiio');

/** MySQL database password */
define('DB_PASSWORD', 'habiio');

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
define('AUTH_KEY',         '/xOtzJg/OC Bjv%4DN?1mXompTFwgGMQfdgW0Z-)V 5jhL*/3vS3?gbgg!@D4Z`$');
define('SECURE_AUTH_KEY',  'NHp|0_sV#f^MCX5:T3?TMVG TD1p4qHM[8x]B5Bk;coO]Ut9]x;I32uEjcL]OoKn');
define('LOGGED_IN_KEY',    ';bG2Cm4lZO4YT}KJ8CbFC&MgV %F`6EASHh@3!]21;CGS]0974-+rK8GM?T*dEQ1');
define('NONCE_KEY',        '()Oqcma>2H)s>E/FT&%[D}ROR3!g:C)Agh}EfM1w)zK4UwGKFMCT=_vupt{|,t /');
define('AUTH_SALT',        '<3dGX@rMN:)7qM8Ai)Cb|p+r.uN+{4ZC:AE?n.`4$CYg~yE5JMcLbr4E`HQ8^^ 0');
define('SECURE_AUTH_SALT', 'bHjW~2{YPmR.>3V%u*LyjC5rp7Mr)KjA^8I):tirbu,mw^(ZY+1GwUj{u%1XG>a`');
define('LOGGED_IN_SALT',   '~}n(|xmg6/uYaBL+ysAAlcs~ciWc|B&$A^!-C.3wUh<cbh3kS9o9jq*|@68g(Rv^');
define('NONCE_SALT',       '^}QDw|>)vxE~8PfA#v3MpMz?ZMC9?F33i[bS_7McD(Hdpu+aXS$E_8Sd,&H(5_O-');

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
