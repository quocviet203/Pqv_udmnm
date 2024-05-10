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
define( 'DB_NAME', 'university' );

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
define( 'AUTH_KEY',         '-VC->WjQ#[6Qf]RmVPxplnqeQzf_[@qgf5?~52}aW{Hv0Z =4Nk~kBH^kj2Uv7;m' );
define( 'SECURE_AUTH_KEY',  '^EXjC:_-bMH$}?CXl8dOQUyMWc$@_CDHtOg`mXn3FLn^eOpBB0~c:bjk`(UBsh?H' );
define( 'LOGGED_IN_KEY',    'GjdO:,(&hcP0h*<!&k&x5L]sAQ?9k=7Bd^U`{=IV|L xi)Q:=`HHlZm1;[C2YyS@' );
define( 'NONCE_KEY',        '80<_oT+S]L+&;$zr&x<$c&(f JfDC(E#km~ZGts7Ej4{NMyda4=mja:CwYEaQhyD' );
define( 'AUTH_SALT',        '!yZDql)3tsb|nmx.**rgq6Mr4bNm=LJ$Ppdv md Rz9Yn8~cON%Q.B&]X&O&qWL ' );
define( 'SECURE_AUTH_SALT', '#]/&0$cp0m(%DQU2ko?8V~ED^Ag4w@W3--agE~fTEW0W9UGoL#2EsM!&%TL046t)' );
define( 'LOGGED_IN_SALT',   'd~J!BQ^MJI?c=TR6=f{2&mSbicqVlXXS>BMYZol-5YCsz*,<VA&Qfr@HY8TVx_2&' );
define( 'NONCE_SALT',       ' >}t[@+h~?ayy)O*6/7!%rsNmC{z-NkPI7$$N-|V25duhw7*nNr{rp#ZT@Xq_=v1' );

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
