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
define( 'DB_NAME', 'aht_landingpage' );

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
define( 'AUTH_KEY',         'xbX [<gVM6Y$[rh_L: e>WH@~0=/#0pJ%2>tN%i7QU71Vf*&2e1s!G!^7Wy3ecM`' );
define( 'SECURE_AUTH_KEY',  'Wmt>,btZX`^OU}f:#?xcaDFdU!}|21{Qf0A^oVVtl;LvM*h|Ukpf1: Kbn&Q{!z/' );
define( 'LOGGED_IN_KEY',    'fX<L]R2GNjVeF]Wx8<hL[lx+#eJ72d@*4T5A`99LMA1hCP,Ux8abF1D kn[B0[AK' );
define( 'NONCE_KEY',        '.8]B`R;s6X}<ZBz|$3D2SY+|Wc `1QD?D7SYo?Qw*5lXuyFJZ21rH3WZK~d}~#23' );
define( 'AUTH_SALT',        'd|vn{0hn^1*<|/.F/7!~)|m{V<93.a2-X{F$,b6t.ttm)k#Z|jc+VTU~DJ>.l <s' );
define( 'SECURE_AUTH_SALT', '1N4  Wp2+_FEpNMBVOGDD?8*x.i~GdAa@>A|kMil.}$WaoMR;~obw;5OR2>Vm1*&' );
define( 'LOGGED_IN_SALT',   '|XJa1gz`^04V3^<F*2zDFb.(8~p12Y.UuN*;%){F%[Nuwh}b0UZ&FRIZ%R$X/]iZ' );
define( 'NONCE_SALT',       ']TC%.%PQAyQ(t`pSp[dK&Vtnv7fH^-.OJKJyF@d 6m0kg4W.kJ]jKcY@[:t>59A;' );

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
