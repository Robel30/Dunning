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
define( 'DB_NAME', 'Dunning' );

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
define( 'AUTH_KEY',         '0a$P-V<NB#&Y6SXe>MY`i90 .(i}?/hR@+!<LU#=qhm345fWm7!R.`=?X@:08%+?' );
define( 'SECURE_AUTH_KEY',  'XeB|X*U`2HYrE?W!GW2e|j=SP1U`O]/ 7}db1T(@>F_Tv9O@nULDbi&9IbfB4Rnf' );
define( 'LOGGED_IN_KEY',    '&-*eQ(G5YjUf+5@XB:@}q_g7@sYhI`N1,W+voZg.4-tg 2yndXqdctuNMrXR2*z ' );
define( 'NONCE_KEY',        'G^D.o,(sl{6HM3Sx~DP_bFLOn*FpH$G7vmu~~!G}S.|I*cqs}lP`=r!a$,G+:*OF' );
define( 'AUTH_SALT',        '4.JL-]f^Vj8akIOQ?<#:<CIN_8-j/1ysp~N1[SvFw|:iv ?r^U3jBW.w)d,,=t_F' );
define( 'SECURE_AUTH_SALT', ':1W[.%,xM2`N%,E.H~$>kY @gjWH90VKa`!x9^u%3DMqG1;,A66f1q86$[~%!.PV' );
define( 'LOGGED_IN_SALT',   'e4kKlcVxr^:lPtxd}qJV&i1L]L2n*uzh?l#8njdQj%/4xd3 1j.AG?HiP)W`91s!' );
define( 'NONCE_SALT',       '@.GN2Vj1BqgXa|nwp0I*1Pp0,p)QSh[Qi6-={jM  b_BTMU*;VlE6p!0EDrU(O-7' );

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
