<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_tut' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'lawbs0775805798' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W&zvM$JEk$Xw66F(RZTlzx_k3gS0[/Pbjkqs1LGg^x|]2zQGj;YyPdrq+675bqhl' );
define( 'SECURE_AUTH_KEY',  '|l^?FZ:l2*ld/XTxR;OypW(mP2_;=Y<&iGe9cf]5)iCfzOtKPX70otJ24)_*tJBJ' );
define( 'LOGGED_IN_KEY',    'RItiqHX]0)Ufe>:c7RDkOw9nGGs|U4dzSE*bT+yL&_Ye,.GKa-y*ornJ4DKG4W /' );
define( 'NONCE_KEY',        '8#=(kTY0a+m;V. n^=0:M&)KZ4F6$7N,= ;8#F(5qfskE5^7qsR=5ld!L2LLT.MC' );
define( 'AUTH_SALT',        '|!TXU=W`{W24:CUDP}&9.ElDA;sUn;f.s8s#pk<iu28Cj6y,*<a2nw1$wl2Gc&;c' );
define( 'SECURE_AUTH_SALT', '?<U8iU,B2oXPRRn0uvL$Nf~KX{1,z(^TIK.-[,CBvVbpS@u^1dY&?w)+1piB 7me' );
define( 'LOGGED_IN_SALT',   'r^BaxoT3^N!9;GYs yz/@%kth1.&ut%Snz+>pc$p>)@,P.DHk8aE37:/*yk6@ji!' );
define( 'NONCE_SALT',       '3H:L6~Aer]YGg88Xww1EQs}*{Ka4c_a4_nzJb}S4V7xU^8SSO+W-Qv7w$/%u}ywl' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
