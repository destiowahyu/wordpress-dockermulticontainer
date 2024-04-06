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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         ':[]IcF<FJ-Nb1Nsi=TG>ssTm_|rzAU>;nr(.t~-jmBfRxreg>8m+b~H-j]6*-qaF' );
define( 'SECURE_AUTH_KEY',  'Np}t;3VF0./y{Cr_ hbW_%!fJDJ.rol`8fF1)e[%]Nbx)f}xpsE~Ui@p{FBdeAsH' );
define( 'LOGGED_IN_KEY',    'aGM4l5BHni@>MAS@~PKen%^@VcuT,%-7Rw@F4:b.&Fj3$_}p1-WXRXP(m(x7U2UY' );
define( 'NONCE_KEY',        '73QF?WX(gju4FPzoumGX,@mhsJsXOo9KMG{WQ#$uHp_a<}XNUic`}>$G,sOO=! ?' );
define( 'AUTH_SALT',        '}Ge;rDR7/Sc5L^A#r]{5&bKmAnIgo WP m[_4v.=3>_E-UG{e:vAJ2^r~HCtB+@M' );
define( 'SECURE_AUTH_SALT', 'D}t~YNg%$Z;h=S[|p&>2<|1t/E]#3183B%,E2lIW7R,`winr.4X5YDWSmUspgG<w' );
define( 'LOGGED_IN_SALT',   'G{_j]#t08P})=h@W{m5QPo[_+Ajlh5G9hy.nDjb<OVd,*J[1v]Uzv0&gCCwTu_3V' );
define( 'NONCE_SALT',       'bD1o.hB~)y09t<I#Ku@!su4@30#&2Dr!yhbLOE&?aNicm!=(%qj}iTjGH#_Ll +^' );

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
