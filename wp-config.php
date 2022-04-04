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
define( 'DB_NAME', 'Museo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_Jk#o,xx`J[ `(>_v^Xd]f1Um0EeS|,z?{z0C:giZJJa!P)Zm>W+9$:CL<,#/j-e' );
define( 'SECURE_AUTH_KEY',  '0f|9uZG!2%n&d:p%pW=1^W7xqqx+qbmY7<;6Ughy063&R~#U#A)Pk!j|vQ]p7XW(' );
define( 'LOGGED_IN_KEY',    'YSz;liCSkA~j&4Xu`#W)CACrL;2SGPYMko[%{8pE M$<,K(X+=3dP/DY;ST0=9 n' );
define( 'NONCE_KEY',        '9MV>-$M`3P<Z_.kUnD bLF`JK$Dq,C{Pn|Q a*!ws1aEh91U3/^%%bSC60fYA@#^' );
define( 'AUTH_SALT',        'ds*m)VI5rnf,-2;y^ba:]M!P!0fM; ?$Cs}a^}.Kyk8/~.(|FQ.nzwoS% mV(,vg' );
define( 'SECURE_AUTH_SALT', 'lLl_{c;ZfJFb=,MACHB5I^rgeQCvXE` UGXo03N9=pF]-5C*:(2ZpMdk&3,Ww59@' );
define( 'LOGGED_IN_SALT',   '2>xrV.6?sxxS*N@]C.[v.(+36Ha w,MoER 8wx;:UA>o&7yM4UHm|rF=GwU0V4xn' );
define( 'NONCE_SALT',       'RBA.jC6mk0BR:9~H.jv-v!FPKz)P,Ux)R[.Nb5qsoS[ccM`Y{lg9rNvhrU1ieiau' );

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
