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
define( 'DB_NAME', 'wocommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'u|%OEEGFn8O@slVjB4~/> N]Xenr^:NU@egd9ro_kYghi0 }ZN?,{2:U.08~P]H]' );
define( 'SECURE_AUTH_KEY',  'HBbpNm11#f_F!(I{L0JMyy^z?S~cFKN.Af6Al`h`6g1[k4YB9rc4ZasFO]Q~Q8S@' );
define( 'LOGGED_IN_KEY',    'MQvn,~EeKz,<11;hvVhPJ/-j^rsqBPj *m)dXqRY52cAJ*lU0}[/Gaomq!+m;^1`' );
define( 'NONCE_KEY',        'l ~P2b{A)S`)V10#g<9GqFxA-D,l0V-XNQA:S16{5cfY<|8-H$M]td>BC4LWyMU2' );
define( 'AUTH_SALT',        'E/rv;w1jR&dT#A.xx.s-Y]{&)!n#BP;-^YRq&,H2RibU(b`rdx4rwSDC|i7;5yWa' );
define( 'SECURE_AUTH_SALT', ',@xC>?VD_@=E$7~V>J:Z)CBkak/J0dczL*7R8(~p6E6(qrBMGzHLxiO!EJ3G^e@n' );
define( 'LOGGED_IN_SALT',   '%Zng~+#5$ZoJe$@=}3LaZM_?@]xNOZ*!PyT~3#{oi)y?x|Q4P-m1I 4D~i kD`8]' );
define( 'NONCE_SALT',       'u2TJTSe=g_wT:3pj4+eKy9np3`D[%s@<+k#gf$UiZ2|lSXeF1(u;k<?#|zm4:iX5' );

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
