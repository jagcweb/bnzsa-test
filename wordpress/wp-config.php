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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bnzsawp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '*G1,~K/.Swj?[O>^n#`Q&G)[1oJ33n<ZvKS]r!,wG04?5c?%1UPTn.dd~:7k27Uo' );
define( 'SECURE_AUTH_KEY',  'l}PO[chwYpLrfw=yJTD6tQVbthQh!gG*PdU#?3KM#E?<v`hy=2>(6i+K,i*-_b#n' );
define( 'LOGGED_IN_KEY',    ':,) ?gv7(2=n#Q,]V0]V`-~a *<vm&[LxGfs0<C`Q>q}Cbt%..a.$eq)L9ojB29E' );
define( 'NONCE_KEY',        'V,H$| +S$2&G*cv|`x+fPy6F+Vz9c?6t?u9U89Cfi*n40s OvMbE<fCpI|B;[Vx ' );
define( 'AUTH_SALT',        'j?BM$vwL^?jn=fl.8rOO^F(p3sX~?n62*v,3Dsc6o:1PQzGh$E+rS+hFrxWM5 aw' );
define( 'SECURE_AUTH_SALT', '10p1LW1Ed<q/VZ;n)Pl|s%;&6&QJp]A86;P%jXoHb[7eH4-~!T&(.h&P?,,s?qo1' );
define( 'LOGGED_IN_SALT',   '0c.F~lP&/f^?TO}3uq0)k5{&A0`ahYh9}B3Z#:|~[zh@DUN41lO;n>A9BX)a!}OV' );
define( 'NONCE_SALT',       'Zgcay/ZRi[}o~m_CHa3]?Y1<F))U}9ELZN5``E/6S}wIX1M*HN)j8_D[r*Xs]M}j' );

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
