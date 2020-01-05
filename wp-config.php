<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'integrity_bhutan_tours' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q `02u80`^vZ)Rz}<[@/~woogJR;6%v2s3}os! r^zbxSbQja$30pfzF^8}d}Omg' );
define( 'SECURE_AUTH_KEY',  '&~dF7#iB9Yh+V: Rw3,p^tMqJJg5&(^e8pOR#i}C(=O1!X%?s.*nEmO/xD}h4R=`' );
define( 'LOGGED_IN_KEY',    '`Q<sD9nc$Av$v(;}D%(lH^#66V_]K>17%Mn+gC9!k2.y8*]/l-YzXD-nfQ,p[[vO' );
define( 'NONCE_KEY',        'kkapDrzEsjCd},-L]A8i%e)w]o=GE{XiUGXm1[9-$OUX=xLyoP%R!DO%#D;f^7&$' );
define( 'AUTH_SALT',        '~kJ0xcNuucKC )]h ~oMI9(c~dC|0#3whv|Rlv/9@4NFoPD8@,^8#$;ogZ$!d5vf' );
define( 'SECURE_AUTH_SALT', 'yl{qp3g0:@TrJ+_j+)imlHM~k9yoaP+qf|iE~.(?8f-|/RIjC!D!6Z<W}ntJj^1m' );
define( 'LOGGED_IN_SALT',   'g5(Iw/c|5Azm#iW^;Hccv4%Q8%pyoOh3iv=<URmr%(qg{JK`b?EV~]g(C)Al]>6q' );
define( 'NONCE_SALT',       'z${$_J.nF$yp7-6@%x&Bc2|@jbWR||PAi`mIdI.2-8qj>wd7mrqy)N1unfJ(bt:v' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ibt19_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
