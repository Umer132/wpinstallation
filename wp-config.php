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
define( 'DB_NAME', 'web1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'nakmdUqj9k,,p@:a}.mx9)uR,0w&dW]k1-w+x<|J0wF^m/yRU5uf2oc1d4zSCf2F' );
define( 'SECURE_AUTH_KEY',  'yC+%,->!?>/&Jw/I07a(TRaa84ERh^[(OsE-kQa^e>y>jR[Qblx%h2?O;HP}Q)Yj' );
define( 'LOGGED_IN_KEY',    ';-!q#J7kVm^1B9Y_2.:rfs_~yVh$l*~:$p>},zoUjai9YycF$Sl[PASrQva+ntGq' );
define( 'NONCE_KEY',        '?|OJZp&`jCi,{Kk4w~k:m*>){z2ajow>o$y]6nPmPIm9=dL6(uk|c6*<^F>}Bu^2' );
define( 'AUTH_SALT',        'r1!Aj>:JR7-~+sOK?-Sfk0b?EaEhaQM/H3;>gV4^CcJ]sz_No_#7u4OVS$J!o:xo' );
define( 'SECURE_AUTH_SALT', '@fXK7G/dm5Am|s2XdX!3I5n@3viKSPsiJBz-MOA9O5eJh)dJsLq:>dDIV^GPGS%M' );
define( 'LOGGED_IN_SALT',   'aU}`FwWj-qsYs o+nOVq[!Nb,8J1;Q@G}<a-&|o6wl@D./NI.t5Jf*^*XnJ@4COh' );
define( 'NONCE_SALT',       'HGAh#@?: aP|5qw:q!Acu$~lFfU)yBdvp}:$)n+Mo1+EsZ&lo&&0FS:.>LOU1f;T' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
