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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'get12' );

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
define( 'AUTH_KEY',         '1]_~J D$K/B )t2$H6lI!06^J.2%Ec;g=DzCs!Y)QOEgdkn&5c4{=CaoBR<dg;I ' );
define( 'SECURE_AUTH_KEY',  '~AS<[it7_?nwqThLt+SzzGz/T}Fe8 hcidG;^KZHks9u57Y2Q-a*^}Z;?Y|(RE 2' );
define( 'LOGGED_IN_KEY',    'k(Vn6{~/>W8tcF*>qC2>S9/ gY@7.RbA^u;4aoy:z@BYCpErU4|jrLM[g,ys{omH' );
define( 'NONCE_KEY',        '#o>8XpY{K-^R5}RFx0n%ZFx?/V 4tDIW#)Ci2=>tq8+gC_*|4o2aGv+M%NBnRhMR' );
define( 'AUTH_SALT',        'b#-|sppu;$Noh.,y~TZ={+V_PF+k.w5* K#mZN3Lm5>SwS/ZfTJWJf&TO&a/yVwO' );
define( 'SECURE_AUTH_SALT', '?0)U%uj{s]/0Gc$hmv}HuYbQpg!$SI=WFBB= DIrUR|j$<4I8Q08w5ebNONYhX 0' );
define( 'LOGGED_IN_SALT',   '%bWDhl/w_F}ow@G13Woc}23CrN %./AY>:J[MNn!cO;i=[noA)iJ&fv.ZbYgX3Yv' );
define( 'NONCE_SALT',       'Cus{@3^`(`fl|79zXWMr*#Du&.@i1y*-BTIqKqo0LYUbD<vpJHB@fp4jZYcfC))R' );

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
