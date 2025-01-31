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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yummthai_bd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'gFU)H,>@CO5(w29Fgesd>~.#[U`W(DUYsu]]a*|WLS%!f}hLNo|<]> F[28[e5eH' );
define( 'SECURE_AUTH_KEY',  '^Qb8y EnoBlGBe<*172YwF`Z1^Bqt^y:$=DCR/m?oo`}30&uP(BCA{N9M)j]gY?X' );
define( 'LOGGED_IN_KEY',    '.1M/$]wsa+3ta+ ,/-cvN1F078*Nff<R/`M%%5O6Qbo_d0t$`|?n+}LrU%,l?4 1' );
define( 'NONCE_KEY',        '~*o)~2ZWS|Eso5Eu=X]!.tAdX%so-HOH<dHE!uw6)^[_wN=4J|YZ:srH].9}>$]b' );
define( 'AUTH_SALT',        'Ww5grJ>#>}|hL85<tX5{C<jJZVH:@nc?HUM k-/u*e+`:$e(pud;kINVj$Y$XnlG' );
define( 'SECURE_AUTH_SALT', '!UH4Q||HIfT<HcV4z^%V`1+1e;oZ80TD~O7 mkFgz;5(`jy+]}h >1l)7F3n36|g' );
define( 'LOGGED_IN_SALT',   'OdqFma^unQ{$kOm|3yIds?taie)LSYA%HHv`BNFmJlOy:yxxNr]1odgho,l>X%V,' );
define( 'NONCE_SALT',       'G#R%}x}1o9G1DylEzx#N=nK6l`[<Dm_B[/%ui1(HM9DSuyY$d9a#?]T_ToqK!b(:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
