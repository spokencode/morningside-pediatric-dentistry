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
define('DB_NAME', 'forge');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

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
define('AUTH_KEY',         '|tX0knfU[#p|VebA#wR#3)@&(|m$,hG|-8:t0?<6;^;MFO+TP9.T-)n*;vcN3Ngi');
define('SECURE_AUTH_KEY',  'idEA~z2Kv{$ccL5~CGgucQB7QxaD3A9SmJpuB)|h~,5Gx)P||-)2sK@/jdfA`(@=');
define('LOGGED_IN_KEY',    'H q~7>Ie^OgdQb+a,WX#m|dpCXK%d0?=^E]k.<U@LC1?(k|,,3e,{S[G0@n6$f?Z');
define('NONCE_KEY',        'Ayp88d-6ua(p=G80N(Gor&l$EJ=VYc,KD2drE~gJ!o2dls`K,y+?KM*[bWSMf#0i');
define('AUTH_SALT',        '9<`.$C._Z,n8r4]6B]1<O</@<A+f]oEDcPf,k`X^l,OmH,Oleyfg CpTbVXf&vzi');
define('SECURE_AUTH_SALT', 'EJEYrU&kwc}`AE*A0a7%4f$3XDY8*_;%R%XSX+mHio6_4mJQ~N&K4ccWg5;{ j;~');
define('LOGGED_IN_SALT',   '0-lPt&IbG`-n,$>>_F}yK>/pcY@2275-hin;@^-*hgR9ez|Sgj-!B?1:T.g)6n`s');
define('NONCE_SALT',       '`kxkFq]l1Kf]a+7E+^cqmgUb,~ kk<`K9l>ADKZ |g|-s!5x7u](?X]q=yBx>R<~');

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
