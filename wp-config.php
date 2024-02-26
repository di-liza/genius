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
define( 'DB_NAME', 'geniuscourse' );

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
define( 'AUTH_KEY',         '#tZ;)27uW?F6_# _Yg5E-CuS92F.}])`=R02=c{wLg2 4;nTesG<G-35c0U#+hJ?' );
define( 'SECURE_AUTH_KEY',  '>SS<Fil&C_1c=WK2VJL~:yb$Y}l>G*~N j6bh>b[pIu+5a<*qdZD9u$S+7w$EA f' );
define( 'LOGGED_IN_KEY',    ' _fyQY_`&auikLxnxK)WJw~!X]`dQ>;j^II`:mf4j}K4skox:<HZ0Jn7z/JoEcq$' );
define( 'NONCE_KEY',        ')PwAy[9zStye?U1g6%^=3i>IDa1=Qw6uvZ-H5K)#H])qNv;j)T* ;6C5Z-AQClO%' );
define( 'AUTH_SALT',        '&[G%e%/~<L4Z+[;4oZQ_2hkS5}S&6$#bzW+`IYm5Ac=MO&-INjIpjxsG~(V&5v6v' );
define( 'SECURE_AUTH_SALT', 'lzX5;9_/e+EE=8JU#7od|M1~g!Uvo&FeR!OO4jfLArqRxfH!UIKJY7sLY!$&4|H1' );
define( 'LOGGED_IN_SALT',   'GsX[60&6qwL7#tKOD6g$Fk:*&yGV[7lPXIfg8V`52DY`%*4YnT#|r.FpgON0tm)/' );
define( 'NONCE_SALT',       'DH`9yEqL8$1kJX:][8{IDp8y}izv;zd:^SL.LGtDTebYTi%IPx0/,b>jPtWjoe;0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'geni_';

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
