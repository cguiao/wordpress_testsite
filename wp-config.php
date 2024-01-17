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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         'E</MG]ot8&@>IjNd<J2c4KX25e,i@_i&,/I1N(3G|XCB&0o(4-UmHnsAMoi=e_PL' );
define( 'SECURE_AUTH_KEY',  'j~3k-*S6dM?Z-`ED}q|O%r#2])FTQiu7wvg2k1dx[<V}&yhp[K)Aurt5Np;?[fr-' );
define( 'LOGGED_IN_KEY',    '%@yiS;xE{ sdK=- X!BE!RI.Dw?Yu0~34Xh!)c|^x4Uz*_ul6:_2wK3}hEYoqPwx' );
define( 'NONCE_KEY',        'ryH,,:m=7n>NQwhBdv82F98=-l UdQQ3@v0#)}S~ V1-t}%c{z]=il*J os`X(x9' );
define( 'AUTH_SALT',        'bPB^C>Nm|i{Ifg}LH&Pdl3.m]eHkcp7c-#HA:EB?0_#/s_;$4[Zo]WG3K2H_0Xy-' );
define( 'SECURE_AUTH_SALT', '=HtR@m}2C/9s;F!rM8JAu#,k5jWnk4>Xwn^s[LzX98mHK,so$[gl;jMKQn,[0TL3' );
define( 'LOGGED_IN_SALT',   '//3%:0be<e2Bb~&-E[1T`0%(?y{5/vK _-Db|XsrgjrLj1j+XPUpY8S~|6/Ud0r%' );
define( 'NONCE_SALT',       'Il<znbUrR[(-PnPXI`]j)D1b#{2oqWp/(M0q>!xk]TQ!YM21&Zy>;,*>voEgL)W<' );

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
