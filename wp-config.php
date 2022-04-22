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
define( 'DB_NAME', 'webiste' );

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
define( 'AUTH_KEY',         '<k_,auTi7Q!5Y,sAtV0`&R]#i`)XzFoQD8MGqL(oD&ofq[Le@u%Cm,#J</#gPb]J' );
define( 'SECURE_AUTH_KEY',  '`c!h6_?Hx5a_z~$/p(0Fy{}j;MnT<?V1VKI[Zg^f=*icVRqL:irDCUOcH|&1.hyt' );
define( 'LOGGED_IN_KEY',    'u}#Or|sE^{ltW<-d.(FHk3.dpwnZ%4HOyB>gU8T8%Q$CCXrH.0:SkatViJV&y=di' );
define( 'NONCE_KEY',        '* w/N)/A?3Yx>a_.6CV{)Si19gp?9vo(#&g1Eru8c}YrGd1Fcx)-F:{~9}Xnr3Qp' );
define( 'AUTH_SALT',        'w$%KDNZhAZPyV8!9A$&F%Ro-Ac@k{YDm{bu;!blte2 KJoV1{<}g`pz;o!$WC>;!' );
define( 'SECURE_AUTH_SALT', ']D*+|K<uLlAZq?J=@kU}fGaHU}sYEA~Opg8Nf%*43R$,M^l+VTZ44Iy<#7DQS!~}' );
define( 'LOGGED_IN_SALT',   '*:&^d@29,>%g;qzPg03}Fktw{XlBWJjyXT`g4l8iolv|qAaMV> vRGi^ie.-QE-Y' );
define( 'NONCE_SALT',       'hvol! Gle$1 e5p_P^^y$yrJ8-/eNk3s]C<7Z{:s[V}j+_eRb3g-T]7f{%^+j~ho' );

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
