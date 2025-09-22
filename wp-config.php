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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'w[xXQu`;t`r:WpA*xInq6+jcaP=!B[BBR8xhpTRLX)2Oe]25RJ]sNKH)u![;%z}7' );
define( 'SECURE_AUTH_KEY',  '76n_6CInjpUQy 0[5qAj)m=EnqEPw`T8TsW#ljVQuFRFE)a%{^91M*pzVfvAtYC/' );
define( 'LOGGED_IN_KEY',    ';|**=>th}#rr(z0uyyBA6;z8MSLb$oXW((??pW]Whv5Aib]+o)WSDE>AX/,]c|Wa' );
define( 'NONCE_KEY',        '`G9,~i/x@3eQ/2Z2RU-}bb|p+M59NVmt[07l-U3S&8)(#<wnj%j%[M5!>(IA6+RY' );
define( 'AUTH_SALT',        'K|V.jlDu7;: ./XLFgF>XQ.;y}u_8G%}JTQ3{h35O)E|!y)IK#+D+vWMqk^+}U;y' );
define( 'SECURE_AUTH_SALT', '&8)#soQ ]58@JV#Qv-/elhR~KV*8}g[=0*Eu!dQC`>*BS9tUJUmZcz@3S>PEPe@0' );
define( 'LOGGED_IN_SALT',   '2w|]+yiZjc[jo;Wn$%,IC#PA5H,x wjHWn})MWkAl_jV{[1B(eNiA2nrI;9=Z,&3' );
define( 'NONCE_SALT',       'acvyK.HzA{j1i=cJSL.|Us1,kzVJJM1vh|?B?M)jzg[{9OOfH0Un!~X^Z$3CKU4`' );

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
