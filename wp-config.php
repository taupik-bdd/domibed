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
define( 'DB_NAME', 'domibed' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '!WyybvQFJ@7cL$$W#iOkzno^p@N0Snk7TPr@GYetv`*J !8^#A*pMl318Y2Tx$!H' );
define( 'SECURE_AUTH_KEY',  'Wvn-DClS]x:EvOtg:R,YZQ$2]u3 My:v4iVS,)|ix>D+*vc}EOl)ayRGZ `}jp%}' );
define( 'LOGGED_IN_KEY',    '}BWJ2A_qM?OB,]iH~^x^5/IFl*.`%>E~ms3DSdEyRKq3n3zm1=*T}}lm{V6=v2Af' );
define( 'NONCE_KEY',        'C%VDNcsbO$8X?i4&hmAKhVvWAMhj_n4hI`%~1kAw4s,d$NgL(xtJr4vK$~CD_MBa' );
define( 'AUTH_SALT',        'J=}MH/&^ q<SVn=)oGkNIa@@>gQC]>)v s/KaYG4-P1+SRv`Z1$#34){vN)bM2Fj' );
define( 'SECURE_AUTH_SALT', '=`u-L7-%p]/?c_Hr*vLFd[RU:`(X}/.h-}mv20J*tHxr5;X-Ud<pPs!*xA)W~4^K' );
define( 'LOGGED_IN_SALT',   '.vP%;ji}AmB,V;l;uHLBTBc7yI_!O9eeMh8!1%P>`P=V; $#3Dd$x2G[Fe:G>$Nk' );
define( 'NONCE_SALT',       '2I0qm &,{+pq^Hg>g(}c(-sB(yeu5%~SWe-$}{ZPHV+0=W.m.+$=%*JE/TsJFZ}?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'users';

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
