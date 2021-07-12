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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ryahgel' );

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
define( 'AUTH_KEY',         '8id;J6.W#^W.n/UmM:NYCbJW;]1GgDxHv)P8K&Gk3]R*-WcsPYycj3}.@`+mW-`q' );
define( 'SECURE_AUTH_KEY',  '6H0`; N:E[67T4NzuV{l&d_dg9$}q9pwKCZ(-:aOKDq!J/o -EdSZ_z0&0-d9k!B' );
define( 'LOGGED_IN_KEY',    '`kezJILrlFc;9wc_k&,//,7Oh9>U#{PabMM=/klP_Q*lj9)5!3UtYcu`Z4 -A]<D' );
define( 'NONCE_KEY',        'L2)19/=x PN9Sy`4fZ>.=yF|:V(mtLAo2.uJGKKF_8qpFe:OTVYI$]y2f~GEn.s]' );
define( 'AUTH_SALT',        'lO>y:K1sjXHe$qKhN^jgm8O!= sjJ%*W0(ZkAZa-vqeq1.0sHTWbex=P0+am@mHb' );
define( 'SECURE_AUTH_SALT', 'vyx<|c3od!382X%)z6m,]|+UynH`H7t17]Fy$pOO<[#w!#?KXQ{^+_~b0l;1/54Z' );
define( 'LOGGED_IN_SALT',   'VhYXT|#cQ/d6KGkMr2Y%5O3n.[cjvjFi}q8l*y8{KqdA,(c^yZ[dfuA*1;anbHfq' );
define( 'NONCE_SALT',       'w8A|`v`OS>.WIXxA8AO]<:F9|%g94u<Fmz_;t;_,G-KtSKi6$d?~NIjOsdvG3h%R' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
