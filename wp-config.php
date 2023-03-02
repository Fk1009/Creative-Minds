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
define( 'DB_NAME', 'creative_minds' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'rh%2N9E>Jh}L+<Z7Rp`^*4-,UR-m|/j^UWV-=BTchc48A|:1l=|[,~1)/rU/@MSB' );
define( 'SECURE_AUTH_KEY',  'jJ P|5%c;(@;%xo biFHwp8uq1*5Fs_*Y=>.q3#Jom2c^z9D@?oB3ci/~Mh@s9z-' );
define( 'LOGGED_IN_KEY',    'dgaX<N$xyJA=Yb5AL9MP-x!B2mLB0:Q@i+yW~SFR=-fu-32(jjQHnnv1a:0}#$^`' );
define( 'NONCE_KEY',        '|R-.Wd$S+&GF#,l8^m|TyWfYQD0vUYr^t-74uVR=3GY&AV;c(@QL%F&[:@r>fhX3' );
define( 'AUTH_SALT',        'CF%4Gk#RO0-cOpyl~F,s`tzGt+ri<!($osC:[@)^[vuaB?zv7NHo<0j^|mkhp[c0' );
define( 'SECURE_AUTH_SALT', '~ogBJ2>oN#C^hj(ZDlb?!c5o&ZnG5f55iD(S1cl*$o/NQB(U~)Kivvp? %{p$(kf' );
define( 'LOGGED_IN_SALT',   'W1]B4`s9ZKzdt*`C1QN@eqSDa@FIyN`Iyc=%t4mCT+xs`!k }Y*a#CrL8Kirc51=' );
define( 'NONCE_SALT',       '~n+4loaT&Z:<Hku[@N8Ae96sv:P;wPFt:f{5uc3KLh|Z|.fgfau)i71cp)ZAQ{/v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define('FS_METHOD', 'direct');

define( 'WPCF7_AUTOP', false );
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
// define( 'WP_DEBUG_LOG', true );
// define( 'WP_DEBUG_DISPLAY', true );
// @ini_set( 'display_errors', 0 );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
