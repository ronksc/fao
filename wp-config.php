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
switch ($_SERVER['SERVER_NAME']) {

  case "local.fao.com":
    define( 'DB_NAME',     'fao' );
    define( 'WP_SITEURL',  'http://local.fao.com' );
    define( 'WP_HOME', 'http://local.fao.com' );
    define( 'DB_USER',     'root' );
    define( 'DB_PASSWORD', 'root' );
    define( 'DB_HOST',     'localhost' );

  case "gc.catus.tech":
    define( 'DB_NAME',     'fao' );
    define( 'WP_SITEURL',  'http://fao.catus.tech' );
    define( 'WP_HOME', 'http://fao.catus.tech' );
    define( 'DB_USER',     'root' );
    define( 'DB_PASSWORD', 'catus' );
    define( 'DB_HOST',     'localhost' );
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '8.#d)QM@+G|8HfTO/B[Sx_Aw?N}t-y:d(Fl)X+&l)G{ISaDBN2x`56as-c=g{rwq');
define('SECURE_AUTH_KEY',  '@Dc,IyxG^Q37f0e}<+ ;bpi zRbB[+b>M*$k6oX*ctAT-b!Fi-!%~Ck)_v~VO&A0');
define('LOGGED_IN_KEY',    ',+T^K9?T1G996/ #`R!%6U<VOM3Gmdsy*V99^1k+?r:%Q<Y|bpvi}7:x$XBM}yS}');
define('NONCE_KEY',        'P.X#PzS,&qA,@|@Tp?KE7PFgDF~cr<{>)nu7@qyKNcIR^.:|M@TYN3f|-P3jt_#]');
define('AUTH_SALT',        '|[i{G=u.dBt-&}YMYuet?ki*[ v+-K6=>O4x~e6<WtSs.KZR-`*~nr|2nTbMQ0{z');
define('SECURE_AUTH_SALT', 'H</kRU1q-OKpy^9/Zlj5D<53!cn/<drgz>UCIM$HowQCiBGg++Z2FF3N<plxWE~/');
define('LOGGED_IN_SALT',   ')1r$qUjNXWsuZI#q3^hl5!uX+Cf1oab#K-b`6^_a#H|?>1=;?!4(l3!%#~k$ji?z');
define('NONCE_SALT',       'itX-ytQj[[EI&txkbiCV}9+F*]VI:L1n:}-TJ2vb,i<dv+vn+,+{U1%dd:|:v_0`');

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
