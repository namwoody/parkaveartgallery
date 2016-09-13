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
define('DB_NAME', 'parkaveartgallery');

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
define('AUTH_KEY',         '*.W.+72ttSP%&8E0Z)t.K{M3X35frR1]JXF4b4Y]jo79A+a0;XV|o)&YGM}g8a@m');
define('SECURE_AUTH_KEY',  'M,=Jm~?f1&KBklm3g)L#<(V:&TuN1,;j%kaIB;Yi:4-Is-jr`q:~_CwVN11foIv,');
define('LOGGED_IN_KEY',    'T9:(Io{6gS?nia{X=p;r>N~kS>2E A-dw oO&/wQ?o<&QL.MdWcWJ43 egpo6K3Q');
define('NONCE_KEY',        '>(0m76Xj&u QP|`r7Qg,E{Y|W$[L?[fg;_V^FtF([jQeM sQ+vMTAJ`lQqfL>2g[');
define('AUTH_SALT',        '~?>#q!WQ :=g6Gu3?EUump[$m/i7!P*?tgV]~pUvh}Bg^58B8.5bADeO>F1 a(EM');
define('SECURE_AUTH_SALT', 'V+dD1WH9nDJ}0`xzjyD;.1X8R,HJ4h4vRBQ8XQ;_u:yKK6/ cL2`b|<s<=1@RSs_');
define('LOGGED_IN_SALT',   'RxN]MA#IK-bS.o_Y|VtESZ<Me/V3dTXxbE!#%QHyNlQjH*YNWe9+]9^9;SLwhA3n');
define('NONCE_SALT',       '&^_f3` dY-FfEepz3n*]Nl01{+!9@xEna!23*.;JnBnH^D8{!I<.Fqf@@V/ik?t|');

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
