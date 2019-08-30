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
define('DB_NAME', 'kominfo_wp459');

/** MySQL database username */
define('DB_USER', 'kominfo_wp459');

/** MySQL database password */
define('DB_PASSWORD', '8y@S36pK)5');

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
define('AUTH_KEY',         '8r5yupbag0leahgnuh7owzzwqj13excmdve1jlmxmpwi2p8zjf8yglzahuvog4gi');
define('SECURE_AUTH_KEY',  'el26q8rmyea7bnxlllu1ed2mljytkaxef943xmvnpnvyr4hd003cfpcoj2neh9fz');
define('LOGGED_IN_KEY',    '0ebtukhgi7zvd3gxlunxwnngkwxmdrdz0n1juukrkfquyloumxzwbioeyvuz55fq');
define('NONCE_KEY',        'fvtmvzikwz2bdodvwvhparygtumel8d6mzbya9ikztdi8c1pmhcpaucy7rmltkmk');
define('AUTH_SALT',        'rhnht3kvnl3apapq86yn3fuyi1e926jw2vhssnjweororflmye4zfbhovwqalkaa');
define('SECURE_AUTH_SALT', 'go6vkv8lajxwo8idlys5glf7cervp351ewstsh4jp05uvsiv4ilaf7tjpyaxge36');
define('LOGGED_IN_SALT',   'k06w9kas5hwx5rpgl8mij9adlincqgggyimmjc9tomjjz5gnvgcwipvwn3tcobui');
define('NONCE_SALT',       'wq7mwuyt5jfakcmwsb6q3aplek2hbvan41zu49hmnhpeeow1yfhfe2shudi0tvv0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpwj_';

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
