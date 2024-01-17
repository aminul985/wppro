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
define( 'DB_NAME', 'wpdb1' );

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
define( 'AUTH_KEY',         '~@bmvKI4fg8#YF.+ $<DY6{#UX125Ggzx);MIU-`K3H9-ZyAbWg9Lf!nI1M#*[51' );
define( 'SECURE_AUTH_KEY',  'UL|Nh>8d4&2=&fU^m.Zs*{[>= [</&7[g<0Z_K|a{D]tn8]:9^U.@O(v9akz.}T8' );
define( 'LOGGED_IN_KEY',    '28hT_].dwcMonY]DbQ;S<g}1{m-Ds5wE_pXBYnZ;qnU.p@k_%Qd0DU`m4:~|*4:S' );
define( 'NONCE_KEY',        'NWrGD;11}L]eX]3.0*$qF4j~_sH<3,!5)t/1Hg9Ag14/2+>D$U@!+LRK1Q{L;__S' );
define( 'AUTH_SALT',        '@06VR|5>oulCXkf:QC~7Z,818&Z!x4w OQ&4*T**-m;/cKT&nq 3DAM4M}6tXU`]' );
define( 'SECURE_AUTH_SALT', 'DG6OZBJC1V(r<TN~O)ZQAX9V]$jtlh%iD}GyF!Ld8xf{WpZSkN9S8CK>ig+?<1eb' );
define( 'LOGGED_IN_SALT',   '`x-kb}(?=Chewx*SR+#nv!UvddIjw[q=pSWORVr@+(=}AcY#22G =, Z;/it!U$(' );
define( 'NONCE_SALT',       'z98l:->h<=61?x;K(^GGgl/]_D56{C?+yDrv$~N!v(k@VSRZg/b&!RFuiLVy}{$M' );

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
