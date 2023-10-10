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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~,Qa0cb+-=76U8aYk~@VjaSFu$cQHYNKD?I8toc2x>f%o*lVlVJ:6Dml^UOw2<ma' );
define( 'SECURE_AUTH_KEY',  'rAm*YuhtAm3,Fo:I0j9Tkur~>h}XJnj=O)=I]/6TE`peI!^cmP.nWRA?/O|qD]Uy' );
define( 'LOGGED_IN_KEY',    '3)Ke7D@0>Kr^0@`}HU~GY&+]shz)D1`F!)._${PdOT*PBD[;HpMB+U8,89L5[@Ho' );
define( 'NONCE_KEY',        'j@_i8|!XERJQJox?$P:x7&EEtT|iNd(wZOihb(i#>FRk`)_}dm{6]HnJbdfdyj,u' );
define( 'AUTH_SALT',        'TWLrKjr/{#{,Ep=NV`$6Y8Xo}aiB2!:Gh6J`L*$#Q$kz8&(a2~qry]hJ[_^!,A$r' );
define( 'SECURE_AUTH_SALT', ' yQjA,6n/wY+T{|q*A&U4r8w.k|mn`%lqqM`GV^FhB@mR@=N:I>p7~QN0XllieNQ' );
define( 'LOGGED_IN_SALT',   ':c8{zLaAp)hl7;vej(.qV]o/1uDezL+[Ga Ke.M9rj4O#zv{?]8qq}qEj} UK;V=' );
define( 'NONCE_SALT',       '<l922?oed]@,9_`_V?:Ji~Odr0YMK*]m:^zu67F7o8<+$g{.w,R=m~(I@pMdUZlh' );

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
