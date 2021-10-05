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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define('FS_METHOD', 'direct');
define('FTP_BASE', '/var/www/html/');
define('FTP_CONTENT_DIR', '/var/www/html/wp-content/');
define('FTP_PLUGIN_DIR', '/var/www/html/wp-content/plugins/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );

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
define( 'AUTH_KEY',         ']ZOKgVpXD^smkU fbhM;.r9&EHg{e<:+@j6D/E ((FD&,j4MS6n]bC@L&bM-mw,<' );
define( 'SECURE_AUTH_KEY',  'T_CPwS`10v_L &%Sn35LG^~,puTAW+7b&Jp|J&40x7s04,`WWSn5|n|9ymc@pBuv' );
define( 'LOGGED_IN_KEY',    'n|eaW=Wjn/;XzpX$<AM>C|0(L#BqsG=F}ydj%C+EQE;F__X-Ql[3]x1p,x3,Rq/R' );
define( 'NONCE_KEY',        'G]]himYf$b+Ws>L&O[I2{g2,YE<`Hb$++,LIkll3(C^+{/!UvTu-=PWH2n*&F%t`' );
define( 'AUTH_SALT',        'I-p#}x<7at~$M2Wv5cQDI,_<-[k[3<PV+eE]uC14nqY,rXlc}i})P]+BFpy8NSk`' );
define( 'SECURE_AUTH_SALT', '?EQ8[I;p ;:/zbS&w;_yIDy^KRk{B@;S)JOdiRdwhyE@Uuj8&;Dx;os{sEe6bpcf' );
define( 'LOGGED_IN_SALT',   '4<0qeu>:FtP1IWXUmJHoQA*#zUhJ_T`155S4]nvlGEoZl=7:d0CHj50vuQVOT|_w' );
define( 'NONCE_SALT',       '.SoL4TgwRp+0]9Xb=b#Pi#D&HM{b1!#hbEcLq+>VPp4>OeA+6C^|HcwDPQ<EkOoz' );

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
