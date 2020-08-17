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
define( 'AUTH_KEY',         '8{GjpoxMX.j7Kggcr&p^9zmYLf,l )ZSJVGj]06Qdo|K~&PX7{k%[WJZo5:U EWV' );
define( 'SECURE_AUTH_KEY',  'D}?~Pkz|WS59Q+ooUWfmy#.VBxim6~M_<Ln8#6**@?,uW/!o`QkGnv 4)1)bMyyA' );
define( 'LOGGED_IN_KEY',    ':i3p~,Ozs0!.-, t`] [{?*K}=W=gw?H~Y c:O k`r%<e<jZi:UVqV^x+BLg[26,' );
define( 'NONCE_KEY',        'Ng/D-vZYhc-v7tmw,CL3`j$qFknp{`!A7PV(,RHp3u=6OGU6>F1aF$BH=y/eACgo' );
define( 'AUTH_SALT',        '(V]MU,7gTwk^!DzD;xzOxBJ47}P`BO7sT1$k9fuPvKu2Y:!Bn=*loG{6p!}Ayd^r' );
define( 'SECURE_AUTH_SALT', 'q*W}[5PD$c0o(? iHetgyTc/xn1X*E40fBy=`Ja*`]zBbJ2TO[J96&MnGyTF0htw' );
define( 'LOGGED_IN_SALT',   '%q=>M+tGQJu;el9)D^P;T{2wQDXY[P5mF7&M(+T|<_Ij(QJ%A4Wh+zq-F%ZA^bci' );
define( 'NONCE_SALT',       '7mP<7w[,`?g<xFNmU ZrzdPLX^m3vQxz(T}77e8jRx|M[s8%_.uBXSOI k?4WDzh' );

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
