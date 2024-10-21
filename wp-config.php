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
define( 'DB_NAME', 'doudou' );

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
define( 'AUTH_KEY',         '-k)n$Hb%Vd+sBGJn0y,o{O@LA1;I,L/zZub}Z/&E-(H2s8F1P6FLA }Bh*/XFTf&' );
define( 'SECURE_AUTH_KEY',  'F@mk6@8Rg79z-e:*3=gR!F$7?ZC[%M jy</HH#|kXCd:T2oEUQHm>~UxOTw?fEA,' );
define( 'LOGGED_IN_KEY',    'Uhb/&M:4 3$VBoXc^!&BYdqv-fjqu#%=WVw3[lOW0+BIn//Ez6x&TNOvYWj|z&Zv' );
define( 'NONCE_KEY',        '$rpn/QOM*F&^;9#Y8@o9|:ZH#lDD~@$1A[aNl+deM+U;8h+R@BmZq`a^?F[(+Ctw' );
define( 'AUTH_SALT',        'av*G)9)^CdK@ GVf-7.h+F!yfz$Do0s qaD~ysZ(5I)TabwQ,4JO2;RXM$.vsUNn' );
define( 'SECURE_AUTH_SALT', '=^Tc*Io2)E>=.F JsIJ?guI5REiop6K4TU>(,eYV00T :;aeC?Iyy<%3j9Dz$YH5' );
define( 'LOGGED_IN_SALT',   '8YLcd` &nUz) }l%Z j)TI~3MTXE)q+p^Bh^i[aOG^4t.SzV*.(&`lY?:i;Q-oVn' );
define( 'NONCE_SALT',       'Mz}6g$S8LW[X>pWOki$.Ye(~hDZsP#aPA=xZCC6M>kvxzuG`#xColnYUrA2[2&3O' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
