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
define( 'DB_NAME', 'nn2019wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bj@3-bUi|QEAuD-DsGz]4B]2B+:e#nE:$cXV`l:[BsiVp[c]GO@2Wf|S&/K-.@B`');
define('SECURE_AUTH_KEY',  'iu?%EZX^,o)8huz0m6L^phw]qI*|1GYc(@[xubsA3PnDK@HCJ6-BMAP16G:n_.EC');
define('LOGGED_IN_KEY',    '/J.dO;|53xK#LT!S$vi{8bXY<H}K.:GlJ`[@C0k~#]I=~{D9nW]jWFMsKmdE[eny');
define('NONCE_KEY',        '0UltIAf<6V|G-g=e,[W}3OrO}b^Ez!E!#a5B{yE^306`1H-b31=VDN:Bm w_zm)f');
define('AUTH_SALT',        'W%47g+(=$yKHE;m=kG<Q@8N*eOa0i}=?(!!+Ed%}MD](l2RF7C:*leE;+_HZXN77');
define('SECURE_AUTH_SALT', 'P:N)=,iQq`!]rQ,6Y(Evpv$e*NC8Jh9Pi1FN-s:(,v|0yO^XJ/j{rG+1YGX1I*/9');
define('LOGGED_IN_SALT',   'Gh2Tq%-#,bDKCQWXGX*c}%|/zl*hyEFGqC!3o=O+6qMAIot85%%.3kMVY%FW1ux1');
define('NONCE_SALT',       'ppZ+clJT=pRQD*=.-V|=84)PtC~d]2+KhO3GasK CPmtr1Y38l9{z#fV#i?fT(#r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
