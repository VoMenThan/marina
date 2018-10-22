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
define('DB_NAME', 'marina');

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
define('AUTH_KEY',         '*PZ^t<K ((gOPkx}{~AJu1ha5YghN@L0QF`B[jWS?n]B}M--rz1Fp7#]dT:XMYnS');
define('SECURE_AUTH_KEY',  '8 64<!)?-3153dL&A?C2dbo+kr[_tiGmM]uMj]H,O=#{%J>M64Xf=,7Bif!ks0:W');
define('LOGGED_IN_KEY',    ')?-px}}{ @~b+BcYG[k]5Cch4p1oG-rQdN1X;ZR2^~L_u($^Au!H.hLP,THku>~@');
define('NONCE_KEY',        '!pMuR@bxN?LrRKb-flpHF*)`Dp|}|)s&-:k*3<4iRvmV9E9X?kTzMC^3wy3?Bfec');
define('AUTH_SALT',        'cU#kU!~HKpU%EPLc_{ an~5 UA`cvjZ=R}>R+KV%sMiFZ9vfy:~,yAw)Ozw~(DXW');
define('SECURE_AUTH_SALT', '^Fh`hQ=L-S3$0dOHs~:bi(,W>DHqKv6A>+bXQL7C_N+ :=l?Wl[QmU#U-nd>_(~]');
define('LOGGED_IN_SALT',   'X<>*%P]%TpSC {qA_}shdm3p%eb5:$YU/m~Y]#JH86%V;|L1ka2bON./KD-^H[%O');
define('NONCE_SALT',       '}[ag}ioyc|h5v5JFY8?/fw;3zI/oJh<}}*Y$-k/(@M6Fl3?hqQG1n1cc3dK?DhN ');

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
