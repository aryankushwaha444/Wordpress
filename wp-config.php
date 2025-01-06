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
define( 'DB_NAME', 'rnshop' );

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
define( 'AUTH_KEY',         'i*L{H3`5On5S: =)@kU~(^Z?4-JXAZ3.<WiYA=#4=Xr&JM9kp<8Z JZ9*wx{h2V1' );
define( 'SECURE_AUTH_KEY',  'J{wnugrDCv#5qpS*mKfWWEjsPB|%qs#ia1;e5lq5UCy./<uT:rGX)+$uQRO<iWO`' );
define( 'LOGGED_IN_KEY',    '~0CAhMz_u(*biqR?Y~[*4mopZ CT/@o,6DE!U>>pb;AJ[~{d,4|ium|,>PoPW#%Y' );
define( 'NONCE_KEY',        '4d.4>N=d1L@PZ_iVAnwD-$k:sXdchl5+m4 I6e]0RaU{6jG!6n<n[-I:W-^2i)M/' );
define( 'AUTH_SALT',        'mN/@ZF@x*h{H:1A~P;.smf{5RpF_,jr|nm/QcS`bwksme[&]-eT<Q$*TU2KJQ{*>' );
define( 'SECURE_AUTH_SALT', '@]fO.2V0#WhO.`$9xQ)bI HU0{eBv<D-w:bTxxK_9` 8![^d-*B&<aXP=ChE,j3R' );
define( 'LOGGED_IN_SALT',   'CwU}a4R05iN(l7<V9<Fg+y`S*M>7%~I+j)1.IL9+ .RActaU3V H9.OhHyDVG>~~' );
define( 'NONCE_SALT',       'YsmO`K7Oe%|#Q$T9&NS9&BdVKRA%!Dw?_.S3*0[fCzhi3zOmNTx_N_e6af[;h1yW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
// define( 'WP_DEBUG', true );

define('FS_METHOD', 'direct');
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
