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
define( 'DB_NAME', 'wp-discord' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'xO}C:Cau;_~T{0:KUn!#:VBY2BR5PEIW <0?]L!8zpyA7ObV]K#bsa`VkqP1?|33' );
define( 'SECURE_AUTH_KEY',  'aQJ`m/m+<,+WC,?h%Jwpgr?$9~MK^]n9.edOLQNa(+SQxggb]]ic<}GXFn1Vx*SM' );
define( 'LOGGED_IN_KEY',    '+?]=&%FI5r_!Jd7Vg(3z0eQ>E!{fPfd3s7[.!uO%B[qMXHlGw45ieOM$}/*8[5%Z' );
define( 'NONCE_KEY',        'Esm[,&Hpt6Bn}QbcYyeWCL1^ZkA@;uva~*qz5foQnI|ZgdozjRthl0F/xT^rOo})' );
define( 'AUTH_SALT',        'g0`KQ5sv[9 ;dv0/g?7-/UD9m>oq@Xm3Yq-mnCd}j#L W({qdaMBO[ZJY7IiT,c&' );
define( 'SECURE_AUTH_SALT', '~qV6P&9G5dR[;ld&OEH&Pj?yq)}jtY.LsJ@Ub%T1)77 j6<Nl1|&B)lXq_i=P=_c' );
define( 'LOGGED_IN_SALT',   'lYrrL>d%oLBnX|Ll+0]9*{su]4O*MMzhNi2{!XvO,{/Z*&<}0jD9&tx#vlQdZxI ' );
define( 'NONCE_SALT',       '[:I$OTX jB(V6(.lod*,5`3MY()`_dtv$tbu;<cG4FM9oe||*w[#wc!VaMf]HKjo' );

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

define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
