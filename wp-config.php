<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'idaabaik' );

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
define( 'AUTH_KEY',         '2G-*7!FNH0J*p6wh=+~8!Ou<}:9+RQ3IY5#abD/C cEg,;y>`N,k: dL3TGqjHx{' );
define( 'SECURE_AUTH_KEY',  'eTI>CJrMb[untppU%fP.eW)fNV|i3553.7l9Oe|/NWJPnnbod>p< U|;r4<+-A!S' );
define( 'LOGGED_IN_KEY',    '6i7MWcRo)T,]6O[&a#BF<gi2J)]=>CP@[:ugOi2P6f4g%xtIrvGVH+nfJ~mJ{,k/' );
define( 'NONCE_KEY',        'Aj%*RKR<, =P]4(O%rhnTQk&, IH-U)v` <I29Bg5n&)QCj,X%e3v5}@OEHITo{G' );
define( 'AUTH_SALT',        '3Yj/-Q_%Ya%M.7>$MXL#za01lx<]T:*cVP#F(oBAFj:ajDIWew2nkeL!%mN2 z5D' );
define( 'SECURE_AUTH_SALT', 'qN[RM=Omw%B(fW^L(B$}/tKOS-i Rj7#k /*68lTLj|_q12dz~_9lvrN7<f__X,x' );
define( 'LOGGED_IN_SALT',   '[!JF-;_!_TQf3 _,!#E}v(x.KgmU7;HsF>_*fAvbiz;Y.aNzdk:>[Bb!WmZpbMp!' );
define( 'NONCE_SALT',       'q}wY3:b8p<?1K>ms&EVW`t.:/v,]XGzo~DUG@vPZtep>lC> @?UJ895%*_6a(?7Y' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
