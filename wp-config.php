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
define('DB_NAME', 'web_domibed_2');

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '123123***' );

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '%%+&s(9/2#_>lL74!fuaT*u~*E+;I+=v7*dTp.6h(#Fkr_^=Qndbf>Bv-kyTi*r?');
define('SECURE_AUTH_KEY',  'NV5)1S)E7XiHl5A2+vZqJ)!pf,QZ`viru8aV:Ht$Gz orYD4`f6K hS9EbGhR0N(');
define('LOGGED_IN_KEY',    '8~VT1z-:G`fP;i|P(K)f<f]WqPH<zo!qZ<S5*i;Cuc#S4!z<I/kA&iRUBU*g[go9');
define('NONCE_KEY',        'xB#|Gj<~|LpSGpXJcg0{#t9X1z{0mG`B[G5-n)TqFWq37,<Vm;O2kL6CDbkf5*H8');
define('AUTH_SALT',        '7q.fe1Et6&6x6- DPDR!-LB8u[80oPzcM^=!:DznHi?(0,E#T)*=_H<eF&~E4fSW');
define('SECURE_AUTH_SALT', 'v#Y&P%=Ct.uyg7Gwwy9x3rc=G*cN58>G@(Q!eoo 8aO=z8fv*u~&^vph3>_BaI@}');
define('LOGGED_IN_SALT',   'f4bnLBXRgrI3=xQ~k%[TO]vi)Szlt$Zn>):0s?9OLWt#GB.}&>1j >*`d}53^QD^');
define('NONCE_SALT',       'Zr|~eNJ[n[*IxV-/^OeCNg2yldid<tUQF>%@:Kw)uRet0*O=:9~G*@gCJ2=ZizOE');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
