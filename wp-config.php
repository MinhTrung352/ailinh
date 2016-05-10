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
define( 'SAVEQUERIES', true );
define('DB_NAME', 'handy');

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
define('AUTH_KEY',         '49w}D!bv=sZS]%-=zV,SMe}^:]>3miuN-G&|9u<p$=.pdoBjA[_1l=,|/Rz^&>|e');
define('SECURE_AUTH_KEY',  'U%8.T#wJpP:s^C$x*-$zp,laky4]l]F?bvD%#P9D;$Vu{~rjg34,._$U~iP0>dcA');
define('LOGGED_IN_KEY',    'C,TBH^3#L]LIAhSTKRFRYSz_/DwErp^ePY_c16WCr2Dv?LC$+a~FCbX!U=R,gDRh');
define('NONCE_KEY',        '7wXV4d6GGth-F(-2cCVZ@XxOt5q4G6U{_?sG_/Zq=o0H/6MPu{CsU-JpZ#i:^hTl');
define('AUTH_SALT',        '^PNlALupN=b{0J|Ez|AcU}I`}4s/e#zN;?^:Y7Z?=p:VQ/61:6FMk/:!vfCb}fwn');
define('SECURE_AUTH_SALT', '-7dj5:e] JUraupexOY4U-* }hg{fGMC>z&6E;!z(lL2eCHs`~Fj0(X[N66EO`90');
define('LOGGED_IN_SALT',   'lDV^J4Vj~#I1l kIEwlqyBr[QzQXe1i6486:a?YpYFTFatZgS+229W*~0em#hTkG');
define('NONCE_SALT',       'qfr%wAYQY tU@S;=w+:,sD7<Hv#V<Wwp-4*z)@-r{;[Tvh$-|-ax@N6w)OW4P%1]');

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
