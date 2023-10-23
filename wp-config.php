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
define( 'DB_NAME', 'bd_belajarwoo' );

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
define( 'AUTH_KEY',         '*VF*0:]3;q!,4q:pJ]O0`pE~KZsrw<pD1 cYbp|<X$MUwyM>Tp^#2a;Yn1H}jAbh' );
define( 'SECURE_AUTH_KEY',  'mOqtInTIQ95d@h#bGc,wrno:PEEys)Z( 5G8Z2!Tvc$4&?U.he9]{rEaKFmsZ#GC' );
define( 'LOGGED_IN_KEY',    'i|^iJ%D$tnZCP(A~wv+LW}y$?(j,PC$h.)6A*rA*<2ocKa#,;d#Mq5b5~IG8!z;x' );
define( 'NONCE_KEY',        '@6$(/5WZ&wb.[9VP>Hf?5@xr2~<ryhUH_1UZy`GfV#Mn(^S7T%<,K?tGae5S/dkY' );
define( 'AUTH_SALT',        '~Iaj>JYFKUmPU7`|HANQx+-_5.JSP6P`fjP2k}?-cmBQ3JCByqc#_f4hyE5lV?R)' );
define( 'SECURE_AUTH_SALT', 'qV7Ur85]a4Y=(y<Or._#Ry(b#(bAxptPxQ=Gz zfeJmG!ARjbNT)TiTY}wE!e <[' );
define( 'LOGGED_IN_SALT',   ']q~V=!AODHv!)Q]q~K%+CH,fq`;`@=1a|+ _mj!?(o9j7cQ3U&p=#c8 5z]SfA?W' );
define( 'NONCE_SALT',       '6[Qn8qVS08tP(2IE,o#Oq^u=:ykP3mx-cQ=P(%@B_bytN.mK.?C8KJvS{N^$l($,' );

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
