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
define('DB_NAME', 'new');

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
define('AUTH_KEY',         '9zbA]LZmwAWIby6:^yrZLJlbxNzoN{PfH3D|jY?+W`!e`=.&7.Pz]}S]HeM$A?OT');
define('SECURE_AUTH_KEY',  'g1nc#cQf@G|!gW$</0=[(A}AqDd:`D=>FK0v!%zG[^?2;`cuat.H!84:QgaCPm_;');
define('LOGGED_IN_KEY',    '(b[?Vp,41NDIYlm@^MjJ=NtIiw_9k-x]oN=W2#YOkESM/C{s1NitO|vmHE$N0CQP');
define('NONCE_KEY',        'z4HEexM&x6-UPySw9~Z0%cdz?0[9&>?CC8Wv}%OQ[@7Ji,sKA/]%8HD^~n&W3}yf');
define('AUTH_SALT',        'd4e,<qaJMPd1|;E;)!7St>dnq,_OZ+fm3^2h=B[T+AN1|hXV*H?U&p;?Vlnu~fiF');
define('SECURE_AUTH_SALT', 'EJyjFsmQLEME-Qw][G:@`6AGuw>A6rL;R60&Q!7b9KKQ5J=-X+g}H,ZwKzy)xz?2');
define('LOGGED_IN_SALT',   '/i qv(0t,(Ps?wv^DD1N?iKuD%$TVbiuNJ=~nZ=UF3.MVs#xFBZNx0W;g-}:2[]9');
define('NONCE_SALT',       '<FBl,[`H>JtY$a*c+e<bW!tQ[B_v/cysMMiL@1uczZ+DGD!uoyR=L`$zf$~I`k/(');

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
