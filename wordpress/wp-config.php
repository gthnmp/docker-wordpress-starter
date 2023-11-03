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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'gendis2412' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         ')AX{/5lg*e^-/NwF-P5&R|?umYgeAj;Y9G{VdAObn@#m9L.bec7,NHj;=6GKt`|!' );
define( 'SECURE_AUTH_KEY',  '^~NRKERl,p-U/g-|P65RuK;^FQAkh884u=)Gn9=.:al=3n.rA? abL}ZoYXST0Mo' );
define( 'LOGGED_IN_KEY',    '9H%u[8i*)Xf0mlAcdP0s6d/P:}~N{/EbPSey=HOw<VI)7vStoX_0g/K9)boK;{,A' );
define( 'NONCE_KEY',        '/>z<%q%!r5Tgd0=X9y]6ysQv_QCym}h`c1tUlu*q4[Y`8LKsu.9ob(4=ifvcNXFe' );
define( 'AUTH_SALT',        'gE[Fq|wR7!o^AYpD4;T.+qrqgxA/cN/<@*5;([Kx_b8|lUk/gi9^CF<-3,$FF2cr' );
define( 'SECURE_AUTH_SALT', 'OgJ&wHK1s1=z-1tBfld{?V-61m#h3N||5*VVSs}u(fb=atc[[pMHb2::fgnZ{s>`' );
define( 'LOGGED_IN_SALT',   '(jbWbjjQN8j,cV|~,<>BW~O_%1[M~G+UYke1&%2ndh]!!JrVHF$*unr4[AV$aj =' );
define( 'NONCE_SALT',       'xs]@0Zx:FT2&CB:,%*~%S1eH_c5+Z`Hh*OsE[9vjk=SEx5#zxp`+iX,{}0a!Y]-M' );

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
