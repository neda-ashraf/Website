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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'z]6SZMT(:R5p ?/pQV{<G 3HevqeEyQ%sgzl5ZasLV[DL(qKs|) Sunz,5r}Vg4-' );
define( 'SECURE_AUTH_KEY',  'e#4%,d6NcVcWV$ES`aiHRttPR@q9-z{x8rx,g#.W<GP=-bpnTxq8?U-Xj=A*0w+k' );
define( 'LOGGED_IN_KEY',    'q-n8{A,~XXN$ON5PVU`|-qv-d/||kYpzEGyIQKdxy-$cW;e*u_ov.Z(@SG*UDcP(' );
define( 'NONCE_KEY',        '5h S;TZ(18wq3|$x=1dhf*a+S0UK%.]z`fv|w9:gs0Z10Mdl5J0D?5H-(yakbE&+' );
define( 'AUTH_SALT',        'ZA[eYL>[U,fHlg3QYFEu5NA.Ih.e|H}x4t6_|6l=$/=w5u*K+L3:G#K*)`gvfNQ/' );
define( 'SECURE_AUTH_SALT', 'JK_BS~1ce+!ZJjxA$&U0KSH,|Rg#7n~_v#j5#*[r=9V0it@lL9%jYm8@%F(fH[e ' );
define( 'LOGGED_IN_SALT',   '+yO*>|<_:%wB?hPu!z@P_[f1laT&ZlYW; .zckb#XAd+o>|@EiPGxzi24MteG3d3' );
define( 'NONCE_SALT',       '@LNqn1j=vL6AN-]mP@_Lg`Esl$u-53Hd<l|Q>}ii)B ?i#GOdr[pKr^Lo{*<`i{Y' );

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
