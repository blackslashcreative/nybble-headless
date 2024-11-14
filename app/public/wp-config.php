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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'R*2T<,UApkd>u}sv8U(3lPwl]a0cd3`g~RPVe5zWw=KwS<Kb.FW?8Ke/Ff&HaDqW' );
define( 'SECURE_AUTH_KEY',   'f,zsEeSN$7^yt1/7?!c`U**=JEy&oeCV>v0`7r&c-_uR[+1YU=?,nFiqc#w45gt/' );
define( 'LOGGED_IN_KEY',     '3e.vYY,Uy_R,^3$SxrRIGpIF4hO3yaHp{nPZ2ukmm87`tK@i[H;ORPWQ=U~Ghx<]' );
define( 'NONCE_KEY',         '@E&YG}pWqF$Cz .EseqR8,pvoqzK[v+|yc)I 5a`)vjCNo ~)uf+D$rIFn8#zCK~' );
define( 'AUTH_SALT',         'F^6ze*_.U#|-6} {dotvK!y3[!A[^&uwISZ>RzKnOz|p*|ty@76F~}{P`5Q:jfh`' );
define( 'SECURE_AUTH_SALT',  '$qc%t@g3bMJa`Hoqb~Xopwc2{4U?${S@`[CXC5Y+O0L{hUL%^iLh`m#*GrS[n;*G' );
define( 'LOGGED_IN_SALT',    'X8n:`o&?-w4]cwGp >gH4Zu/~6B_FK6j,5LFa%%.x.D4x-c1lFVdUJIj6dvga;#o' );
define( 'NONCE_SALT',        '/Oz2l3<6KF|7S^~X-ACv#D{K!}ms^J%Qt~Hrz4k#g&;R`}Ko9(:v]q@nMYk837+%' );
define( 'WP_CACHE_KEY_SALT', '3_,t9C4@;SAnRu+k%D49l:f$bnr+Ee&SiMNV,X-P1ggTb`&~vT1Ub6ZU)Gn1iVWz' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

if ( ! defined( 'WP_DEBUG_DISPLAY' ) ) {
	define( 'WP_DEBUG_DISPLAY', true );
}

if ( ! defined( 'WP_DEBUG_LOG' ) ) {
	define( 'WP_DEBUG_LOG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
