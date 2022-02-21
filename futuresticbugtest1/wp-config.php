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
define( 'DB_NAME', 'futersticbugtest1' );

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
define( 'AUTH_KEY',         'swRhYV`Pl=a>`U(Bf02p^-{F{^,dwn|[i1Z.}HVii~TPxKWZ_]M!kmV()rOuyjGk' );
define( 'SECURE_AUTH_KEY',  'KRoU1/{yLa5-Z2g=Hu.~2kW>LZ,;^vN]@wH@=+UpnsnWSEMx|EFZS#RIJC&?f7c3' );
define( 'LOGGED_IN_KEY',    'z9&YI }9z}8Lh}m:(.4V{pmo^IgbrW,3?+/uf&6qMbs|UN:?4D$Q]yZmqkW-):JS' );
define( 'NONCE_KEY',        'mj. JuZRl~VFu,f%m f0ic[b~/*rszlUk~nmGD#o*h=QWZY_de3t_>?1kk! >{[S' );
define( 'AUTH_SALT',        'Em~~m-y>JyUL#hk2O+,0kv% k)i#8i9^b|v@f~i]*(v9^Wisd2(M3hzBj-)G.Y1U' );
define( 'SECURE_AUTH_SALT', '639;|,xt`fx3&~UaeoNYb{PC#XZXyMd=~jp7eWk3&}ZLLYfZ:/B`fbAKjZ2A}M#d' );
define( 'LOGGED_IN_SALT',   '*&p~W&KG}2Id)r>mcA$4b|J;rzwI|Hx2HV?f;G]<u_(i*x^6_w,FJ_B4U~|bu`:h' );
define( 'NONCE_SALT',       '@lt^|oI9O;q<JTg`AO?FXw>E+d6:_)nd3a5UhW*bsnN+Mu{NhmQ]Hcf/L0$.hDHR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fb_';

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
