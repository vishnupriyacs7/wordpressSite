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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'w(3dY.=GFv,,nImr3x$Zj$r,tTHIkvOs-&I#DkA4dH4[GWwx%CDG<exJ{~g!F4R#' );
define( 'SECURE_AUTH_KEY',  '%jH{Tds$6YZ&b,/Y8k0.3owZmRfC?FG@d6(iDhKSiH5a6ZKpeAz0<F,5np?cx9$m' );
define( 'LOGGED_IN_KEY',    '(%Z@jiB+L;kO@Qu9jfPfE1r.zH#qs7[)[$yUNz)Y=;hR{wkDi>a2`?ZZ>GaN4]83' );
define( 'NONCE_KEY',        ' V8t=JbfH9}Ix}sz~6L;*:1=>)$Mkqst.r{@0J2Yot|%>s>u,yoSFWexv<7P`1#Y' );
define( 'AUTH_SALT',        'MhH%O%xgL-?hseNu9C=N(UAB!L-nWJZsvD C&B,txKVN#UBmvhSVh[c)ujk=sIsF' );
define( 'SECURE_AUTH_SALT', 'zJX^O-UKl9XtS*!{o~WyUJ8SQR]jPze&|x3|imGcL][yCw}}p0QAFc#$I@IfSk?q' );
define( 'LOGGED_IN_SALT',   '&4Z}US{Hi3E*V!vVp,lJsE_{#ku}>QiCHTB*|(p:n*TMllx*wQAfeIuC*_OiVlMs' );
define( 'NONCE_SALT',       'yUcZXb-GA5!E3{2Vqj8zWJE*Fv3T-0G@..?0p0!*2H`B8mls)#>F4>>{B0}U3]5|' );

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
