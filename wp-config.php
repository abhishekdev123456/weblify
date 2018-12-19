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
define('DB_NAME', 'weblify');

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
define('AUTH_KEY',         'q$}Z$%|wMy.bVpcl,g$`RJf[D2q>EJNBRhP3FT^|4vJ+d~:g+`IJo>xlS6;$W$C=');
define('SECURE_AUTH_KEY',  '].aGjxj=x.>vjdJt+jwnY<&2$C,&yT3YT09c&O=v,1=AetnQDW1L~xxdm1QFu7Ek');
define('LOGGED_IN_KEY',    'YVJ9a 1KSGDaV%hwYU=`4RNFiD>xy|I/jfbmLHZwqN62h5so?w}4r^qEl5U$:(7G');
define('NONCE_KEY',        '#x5;9?{n~kyOvx?f.G:_6,4AQ&Sg*#R|GoMG}M&;~_5K:`fK>61Nu,Dfi/a#oJ/2');
define('AUTH_SALT',        '>F!t5rvL5xPm^hW5!%-&,;3;;`VME1s;2O?:uNLs%HQh^LA((Y}:0e.eECSp_bda');
define('SECURE_AUTH_SALT', 'gV:TYxpl_||6`1ryB}]3`$DLh.Qb=IVCj2P L8m9BiO9o`UPJ$}ldwF-sMJE8oAl');
define('LOGGED_IN_SALT',   '3JtrFr+ L]:CT=jp/YAV&-!^P7(B|14e5yyX>&7}3o8|kOKku8Lr8h.DPJ8W~B^S');
define('NONCE_SALT',       'tNu$%]?&~yx,#QuIiMAsIsyhjVYXQj<oKoP8~E6!=-/I::vY`ami,|o[t_rKiL|;');

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
