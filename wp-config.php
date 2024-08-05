<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         'J/bEyI5/-tcy_u6?_ ;Cu8GNBmH-bY!xXPo(d-i05q>UG|;}^tah0d9;$lnDlPm~' );
define( 'SECURE_AUTH_KEY',  ':I5E}(uL<@DbR]^Y1Gc3{!CYGl+LZZY-|)Tn7dh[ 7=_z(U32IpZ)%cG^/fnetak' );
define( 'LOGGED_IN_KEY',    '`T4Mkkb-%nC0z({Q{gkDHPsJ&Y+13P.bi4Hi](DHyYt#hbA*T MFm)dmjzObfl})' );
define( 'NONCE_KEY',        'cHU;9eHNwx9,Jm%{E[Ra:C(>l#D|H&mgOKq7Ta{gV)A??Exj*u8>h{aqEW$1=?zS' );
define( 'AUTH_SALT',        '1[e~i*|5gY-Iy60S-m/lXeh*.:D9QevpU)jLl@_E%`HhmOI]81HO.:77)b0bSA){' );
define( 'SECURE_AUTH_SALT', 'NK,6uwgj|r0g1j]`?|]<b^>a?q2U04NXyi4r(il(SGg8Ia?bsN97#g|M`=^qoeQ0' );
define( 'LOGGED_IN_SALT',   'lw ]xq_&U;nf]&Hd{6KlNE%sBdooCJ}+[}U@!Dxouw@VV{):q$[k-ekF<[|-3nUD' );
define( 'NONCE_SALT',       'cz*}wme(lr{nI6Lu]B,+.J}-{Y=7vP{hs?HCx[}+8s5AqbBs<b9t2ioXhB|0$UNg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'abc_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
