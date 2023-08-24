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
define( 'DB_NAME', 'aklamertae' );

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
define( 'AUTH_KEY',         '^r!`b$1UrMq#FDqM},53x[<G1Uc*~N8V[h(=b|02EDbR^9{3R[QylF:th]0`8Q!O' );
define( 'SECURE_AUTH_KEY',  'agr@9oY%tHw;:dtF3 bIH9<<}LCGVn|lo) <+-H=#rq$T^siIW^0{TCl5ts/%Z~^' );
define( 'LOGGED_IN_KEY',    ']ERh^N6tn$1JaeKQ8Rb-2BY,&$F:.Bb=c;Vqv(4_y%{8r*PI``D3/AQ}S8OA#E6B' );
define( 'NONCE_KEY',        'b 0e/de0b&&{}40PT/Y/[>KFCK Ut2-<k6(akP3Y~[IS*IMToE (=0_%>qxBf@=R' );
define( 'AUTH_SALT',        's&V6;2{$YMu+PeRGy`B_;V?$BaEN`%) Xv`h^smIe[zHW?<O50bjBdC&Jt*VCGzk' );
define( 'SECURE_AUTH_SALT', '0Fcru$Oo8:K,1#W! HtJJM]S3d_2T|twD#X58c3Rz, Ini7pOCpP6_$aD!Qx,Dv}' );
define( 'LOGGED_IN_SALT',   'cX_UBF$w)MwBXxH.acz|RR56J}EcC{;TiQ^MjJuJ:6j>j#oMAktn&M+e8aDH$5dm' );
define( 'NONCE_SALT',       '8X-rewjC0,o.-}:YbVc[T:SzU!B4^1%18i;Ra/YIcS Cm^_8@+wa9uz2qy^Ql!gE' );

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
