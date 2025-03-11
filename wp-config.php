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
define( 'DB_NAME', 'websitecat' );

/** Database username */
define( 'DB_USER', 'catwebsite' );

/** Database password */
define( 'DB_PASSWORD', '@9aMY6h-7ku@SNBj' );

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
define( 'AUTH_KEY',         'KiJ@kKHir=Da[BKsZ&Bk_]YzTfw@FyhE5Dg84QC*xPE9snn_m7o-8s`3#n1lk%6E' );
define( 'SECURE_AUTH_KEY',  'w2}230Q&>xAH!}:nN2KR?1Jq2.?xM}@x*C %0(cvK3O@J@nqZO.f#p!k91i0sZr5' );
define( 'LOGGED_IN_KEY',    'SFh5aI4Fz&mcTfV$%8zK^E)&>yv{ThNLt?TT+_<*UG62!O!/?0Ir^}eBN|k2zAt5' );
define( 'NONCE_KEY',        'wpmzMy z{;fY:s{xb$<173=Y:!W+qMRbTr_&5=Z0Jf{m EZ<-WRW<5[2$4R]#UwV' );
define( 'AUTH_SALT',        ' &:T/CFp^~0XH^2SN[sbY@Ky`C8x%&Ke`fxd mP/>fKC@$=%E)RZSB6@#[%h.~.q' );
define( 'SECURE_AUTH_SALT', 'K/Wc|[S@GvBX^fN4EmV,Dr2]Hi s NK}Z|4Es)940H6YbWqimVPHZpdNr9kY!538' );
define( 'LOGGED_IN_SALT',   '0NuW+2clKeHrwJXfKrWvT)JB6sp@hNph_#O2_AI3B#R>8Z2%5DD`xW3*Y~Gp(?]a' );
define( 'NONCE_SALT',       '5VLfb.sKdJ<miLa$X6yx3gOT<I*<NR1{i~cjnxwG$9/o5O[/-_,x9$;J{X3<_~Uw' );

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
$table_prefix = 'ed_';

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
