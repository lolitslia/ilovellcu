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
define( 'AUTH_KEY',          '~P%%?4s&#gs8pCq3*),|Tkh2rfIlFZeW}@v?[e(9dd=O|l3^X[BCsTwc9/l*wE7j' );
define( 'SECURE_AUTH_KEY',   'vmv,JX{U2~fdNUPM2SWAW`M?ZMV%~&+4={W}.Hx9Ig76QTwDw&fyT-.vsq7bZl^9' );
define( 'LOGGED_IN_KEY',     'HxD-Sk%vJdK~?>Ff=edr3;1G5^LIQ~aW7e_0|%r@>*Pi+L8,e}r:`fx#+j5}/cU1' );
define( 'NONCE_KEY',         'BC)1%U A6<P%C@XiC[3Rpl<mu$/xF2R943`sW`]h{exLZLHVI!2yW]>v{~^9IY@P' );
define( 'AUTH_SALT',         'I:S(TGE:?jhF6K=l&oE[Enq?!=tKNA!.cpVBR*}pLf(`BJ<8Yd3yHz&|Gmvx}#Bn' );
define( 'SECURE_AUTH_SALT',  'ScAF6ZLKA<AwD?Yd7=%RZ+D#u(b$WZX#a%y{QCh:.T,(3d $u+QN{)V%kdWRu?^T' );
define( 'LOGGED_IN_SALT',    'xj/VZ/8nh5BHuBv6AUi-SyLI&<XVj4 cwkg(SQK&:<y;*NpcjkyB,b3dB98r@JIb' );
define( 'NONCE_SALT',        '1hEES`n~C^KGXaYRA!0uXi,C{lc_4dU~J[+_pis(5V22f[t%}a3-ogRp4DN3.IL6' );
define( 'WP_CACHE_KEY_SALT', 'CcyHWRBMOnu4H|{}GU)o/Tg@1G{W?{y}Yn::d^%(b/=QUuC<wm8(k.=p;xDvY!|0' );


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
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
