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
define( 'DB_NAME', 'cyberhero24' );

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
define( 'AUTH_KEY',         'dX9OOk2[^:?Pl+hjNtB&Y5t3xgVC-%43X3y4?>?S[Ed*/$aGqv_kVw:lB+HG/@7~' );
define( 'SECURE_AUTH_KEY',  '*{[ir&L{EaB4^Q##eo~h[/dYGS_a)dKVbui](~Op^;8hE^eo3%+#lwq=[4/wuq09' );
define( 'LOGGED_IN_KEY',    'm};%^ Eeo9qwwwZVXz#2*?Uk!|+Z(R60/%F_:#sQwg2miq%pE@J^Q[gB2AS2|=A(' );
define( 'NONCE_KEY',        'KtJ,*V9D]+Gxo~FlI#H;%sNV<-79|IY_hS{,C;JB`K<d(Gf%5CBM?24L_}&-?_lg' );
define( 'AUTH_SALT',        ',JQk^T=QfJi&xG|{095avxjP#[7Z-sj-b-D?a1Tx8ZT$OHro7c0KY?2AAYn#pa}r' );
define( 'SECURE_AUTH_SALT', ';NE.vF=.5Ha$n9|$9W2OE&fepb}y1[+p~EC_e(7k*Q3h(Hm1esV:cxjcCiim<:1~' );
define( 'LOGGED_IN_SALT',   '/i[Z,<m3*U?HzY3ek|~dfwfn]j}a5L41CL#6[%;n%*Tj{)~G5!m11`Dw<4zBZ|}8' );
define( 'NONCE_SALT',       'F)r-a-{i?+SoxUgT^.,U}1qb5csv6!i>FMI0op5fQ-apwb.kR|&UnOI&:sfUrj_q' );

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
