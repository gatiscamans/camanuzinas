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
define('DB_NAME', 'u162428928_wpdb');

/** MySQL database username */
define('DB_USER', 'u162428928_gc');

/** MySQL database password */
define('DB_PASSWORD', 'A1!?P]PnON');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.lv');

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
define('AUTH_KEY',         'inb9#|oBY*1+[}1(k,laTxs<QN71V0K#VNd-[I{U7Pz2a})2|FwZ*#i^jel+P;w[');
define('SECURE_AUTH_KEY',  '=Z8>M3w*G/(-5y=;||R9yS+L*feLrXM]t q};UG1r%&8>!| Po<~>Cf$}ZSWa%a4');
define('LOGGED_IN_KEY',    'j<5Pw7jOb&9Exx2p+HC-4-R~ia.8rny3U/4. cMVn.Mb-3X,NHvcqP)o-EG>+iS=');
define('NONCE_KEY',        'P@2OD8G;rO*N%_S)Jwy0gcB<.i]!;hoKH8UyFumwyM}4wDFrc,6shIr)KM|5gsY/');
define('AUTH_SALT',        '{J!+o=*=u8%nAI |.j09c*zcP3yr];><N4vc@:hB-B5S?OA|VJDV[a%tu6yv-H9_');
define('SECURE_AUTH_SALT', '@d$tJoVBvS@$s0~fDbl[@FH8yC1a&q<caH1h.IH.bJN8,PH;5*r@X;;m2npwffji');
define('LOGGED_IN_SALT',   'L%us C|x0WE $=u5aw]|*OM.|m1vX|!1 7*]Ygl3&U :[H_hz.%}jtS(`zksM$pe');
define('NONCE_SALT',       ' y/a4bCdJ>#O2qYXVVEF+)edL:SyL/yqJF+yyvVwQ@]CV]uB.BV4.|c]2pKyb7|e');

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
