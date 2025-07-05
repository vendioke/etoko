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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'etoko_db' );

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
define( 'AUTH_KEY',         'xi233BJ;0(Yt%-5ZAzP1<s+r*7T.nI+R`OiT1a{#V`M2_R`vu>2<p?&K~FLzFO`b' );
define( 'SECURE_AUTH_KEY',  'LYykII@-LA+2iydR%j4&cd TVE_D}2r_Aqr36sAWP rYnLN#id#8T:T7E>_U2[]K' );
define( 'LOGGED_IN_KEY',    'lx`n$-Mcgmt`cF(C0@gg]~G-Mu]tPixM` VGSb`KWTA?tbn5ag+6c2x%^1gRk||v' );
define( 'NONCE_KEY',        '[{wv?3SM-2PWVqH)ynnZ+],L9jd&o<n&0gW&;U8*H;4VTU},(;:]42::<)-eB9*i' );
define( 'AUTH_SALT',        '_?fio+;yo;:Piux*d`D@/{c}#f< )=_Lq>9RtgcRqEF~vt`u~._i9e*[edgC(^m~' );
define( 'SECURE_AUTH_SALT', 'hmBMZ{7h/>p!hWoMBCnB#zWf6Wlavxv>=(^`G;oEC6(27,-DEBtmqLXYC9DzSX/:' );
define( 'LOGGED_IN_SALT',   'X.:~/,=<HNOUF72_^:PKwZC~KNbxWYS3W32@B?1fL%<<<&~5: 3egnF([kNEnDD%' );
define( 'NONCE_SALT',       '~~NOY{$GE{g+a@2*XV9cmg>YE#k5[jG{XjAfdzk)@+BG(r-+aTcDnS)EF[ars7#~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
