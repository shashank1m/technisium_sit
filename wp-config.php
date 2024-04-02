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
define( 'DB_NAME', 'technisium_sit_db' );

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
define( 'AUTH_KEY',         'HhZ^H?}Fh hXIL6_I/@+ b&yZD<HtQsurF2gT42?A:|uV)t=.] h!XB%)/>sJHN5' );
define( 'SECURE_AUTH_KEY',  '*=n;d0E|WjyCY2Qe@lkJ!|R6>|%j_c~1mJ:A+is?oKWc3:nL}ED]J>Gsg+[WQK(H' );
define( 'LOGGED_IN_KEY',    'grO6lRJ]o=PV3w7ajD+g(o2C=|i49|F!_{g9GMD9wlJ,<%G#X+%F9j>dyZW+7Thn' );
define( 'NONCE_KEY',        'fBuT$3U7,hsD9`SXwQkM/PwK-<FSAO)v<$7Rd_!Sf@XdW%;w+xP}w7|v|K8)u[E1' );
define( 'AUTH_SALT',        'V1B3>w/Z|&0pg_,-e99vR S&tw5IQ|^}h;Y$eCjIfBE9Lt*AaNXcOFYQF#9+Ng5f' );
define( 'SECURE_AUTH_SALT', 'Xuyy6<G$u+zJrlXz3ZSd_]99Q^rI[(z[rVnmR0oZ?|1O {(e:J&=Jo,#p` XmOKv' );
define( 'LOGGED_IN_SALT',   '3ON6*MS4a$MbBX&~hB:LmZ3c/sJ`I%q+(K/-Bh63jg_!fmOxn5].lmq]bi)q)ENR' );
define( 'NONCE_SALT',       'gQl9/Pp(sJAv6=7t&1]7+>.WodVl~K/A/QyiETm!nB*}#{_yQK!A& AD*5ST|!<m' );

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
