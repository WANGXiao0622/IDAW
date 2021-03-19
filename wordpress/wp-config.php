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
define( 'AUTH_KEY',         ';GXRIFb9-smY[cmLMK]vHT]bG[ivfj0eJA>ZIHG-jA12Lin(9^`,K;-EOxe8>2wU' );
define( 'SECURE_AUTH_KEY',  '`*!$3er8CeW91FPjyVk=u/~Q]GVG1$EFHv#-4:~Z)[S<S`~:>E&ub2DxS;#h]&eg' );
define( 'LOGGED_IN_KEY',    'O@fyBW(%K~gm`u~3j|n#U-e_o6-8uPp@zo/G#qX}Ve[IhMjftX)F^up20uUPi%8q' );
define( 'NONCE_KEY',        'Y.Kv4f{Ubn~;`Y|~MD{%%DHXEC/Mex2(SrltW}^{j:l2#j%z}mc)%_<oFvaiBA@t' );
define( 'AUTH_SALT',        'T-J&![:FBWQ7~by,~(B51nF 9=R;j}t%i~A38]s?xrAMG4wDQa^/s^Pz&O5MjEGI' );
define( 'SECURE_AUTH_SALT', 'z!ii#Xemu!mvQwGV^@w.SY@=cWgM~mzD)t qc.xr*Zou]Ve7|EqS10`N3&?hZ,Nw' );
define( 'LOGGED_IN_SALT',   '0JD;5wd%VXx#y0B_oN!Dv9w%<m%iv)E^Jo9QU>/kt*FkX[uq^gRxCP@0ojhiksB<' );
define( 'NONCE_SALT',       'C?P5:pCvn3C:%ns4oTgr5R+UDe6Cw1-Y~FO^aYCm.H[x+umody{U_!23[+7$%Btr' );

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
