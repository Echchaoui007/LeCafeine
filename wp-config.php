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
define( 'DB_NAME', 'coffe' );

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
define( 'AUTH_KEY',         '`R+bkeQ@}OMsNz0|O}&|R4dM$8EA5bZGms)5j^:%+e#_mg?rDb(u<N&x:lm<3y,a' );
define( 'SECURE_AUTH_KEY',  '[@5gH/0Fr.LHA(f[UZ4_48v1`6cdhi56<2h0:JW$=lcmchY~ax[&jGlf{O`i}_)W' );
define( 'LOGGED_IN_KEY',    '9zJ([o{EE7zw}1|~B(M/fo*Q a7D`A@XuIcLi%_&g5s~VSjBJxoD7|ars^iD$=.A' );
define( 'NONCE_KEY',        'YqKld9x_lP4o45-oW@@RuxgdAkjLV&h_o{piI_m+rd]N,^-[F-0,^m -fb~d~}M6' );
define( 'AUTH_SALT',        '!IG):<8O*x.Gh,Y>Vkp~3NOe*=qNmjl=QUv9&U4/.#((1tF{VL 8WTN0<?fdBy.3' );
define( 'SECURE_AUTH_SALT', ',/EnQLvS`PO>wFe8|OBst[za#TpEn@#RIJ<5GeW;Rs%aCVO80y/@#{}YnBym8vfA' );
define( 'LOGGED_IN_SALT',   'N<;A}X~Ov$Lff,JnPFujd0TfZ7/5/cGN:l4HI}k)p>?>#v0KHcnfapZ^mP{*Q/a/' );
define( 'NONCE_SALT',       '5Kx[&!:_$hGp>}ly*vHp5-$QLDOaWV6H2[O9TIjnOnU2]f1_*,7+eA/!2Omy&;@B' );

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
