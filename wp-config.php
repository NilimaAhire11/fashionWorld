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
define( 'DB_NAME', 'ordernow' );

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
define( 'AUTH_KEY',         '}RMEZ?l0c)a@NUchB%5=!,E^){fGePw<#v;Q[ l^rVg|U6K}L{>dTv1CQ Jnj>E>' );
define( 'SECURE_AUTH_KEY',  '59O;V5|VT~B1URcrv>;Myz)0`2:?6#w,y]8c0@cIqQ{xN3?{F)xlu0R/6B7k01 0' );
define( 'LOGGED_IN_KEY',    'LZ::<3=4^pilP.B;T:lx[!N[O/2f~l8r,sceL}B?26jychKk:9{Q12Yh_Z0$|Sr<' );
define( 'NONCE_KEY',        '}7PUDvg-1s1TvziN+.mjD-VndR[g{6Qriwo.q_)9 *6Ai@9.RTN(>lniYY @[R1]' );
define( 'AUTH_SALT',        '.M#SAhWX6s_gq+qG-AuD=Mcnayt1+j*L7r!?V[$RS$!JWM36A9~}6yGNd6(0]jAx' );
define( 'SECURE_AUTH_SALT', '*+o9r}b9E_)AzU@[DD57Cp=a:-]W/|v!*G?oc{v;9%b>UoD$fLXper6wkA9nN#hS' );
define( 'LOGGED_IN_SALT',   'P%Hj4/N[WMsR!H$_l96dR<v#S]/}W.GA84Uif0-Trjkx]9mVl!4~d.maLBg+crDZ' );
define( 'NONCE_SALT',       '@8(f*71[?xLgP6+Jt*4W8cT~/>1Tzxnq6PL}K@w.IC6n)`y|2-;N}oA-r~`UNhbC' );

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
