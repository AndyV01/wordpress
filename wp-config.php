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
define( 'DB_NAME', 'ejemplo1' );

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
define( 'AUTH_KEY',         '`!w?{(^1_m=g:ta48|OA~B>n8$Z #qomKT-~MM(T;_j77OUv7&7]=Xy6i33c4G @' );
define( 'SECURE_AUTH_KEY',  'm#4vsRzvHa}}n1VunrEli+;8Z3|ZaYU_Mz?.w>re1_eltY{/gv)4W`h?`U2,fH[2' );
define( 'LOGGED_IN_KEY',    'acu)VZ`I]/`S c{Lt%u v,-+&MQhWIc2l/3mp%WD|i~Sxjf/Z!_FDkX%dlBcs|!a' );
define( 'NONCE_KEY',        '`8tqPVck8%*BED]Y7W&mm13Jr(6-`PQp+EUZx4mX1?Uq@9^0j~R=x{Z0=x7]+C**' );
define( 'AUTH_SALT',        'oMOH@m/!C71Z=d;rOgJX1pf7Q`I5Pa3BaoO-<#& GXVcNUwcC8$]Kfm:rNa`:mpj' );
define( 'SECURE_AUTH_SALT', 'L=j/!;gcZ7sZBj8__+y1.[T<.0@Puew ~;f>KQ9;B,5VWCKx%Z|US@`ILzH18^-S' );
define( 'LOGGED_IN_SALT',   '(##c 6_zW#hZaNK@fCRV.KL+!LT~5Wv(] psdJaG0h(2{<MAi?-B>?]$Rxc3 V^7' );
define( 'NONCE_SALT',       'XtA)~#!`3F`JO?VB3FSHW8!_gc3_n@GN#1_q&D50+<Cx@qjKy!T[%|IZ~3.K6K&u' );

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
