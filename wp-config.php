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
define( 'DB_NAME', 'orion' );

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
define( 'AUTH_KEY',         'x=Z<fOI^Gf)Jrjgj>R.VEe)7P<2^;nTrq,i|R|p-w `D0WaC %|>Bu!1nh@a[uN0' );
define( 'SECURE_AUTH_KEY',  '&kDVOk{9eH<<F@S4ZV.8}{d6DB~[Dhl!7!#lwB _JRXps%w6@nC|>|!EFt<7Ehjj' );
define( 'LOGGED_IN_KEY',    'Pm&0i>.}6Knv;^}9)/N2Hb3uCqH}S`P{`R,Y{2pkmq* 2FB>X9[/d!Ospd*:g%4T' );
define( 'NONCE_KEY',        'WM:l4(]{3 {I;pmLPmkRx>rmWP2Q@8|:X!DE=LbVf6#W?j4Q4/j}Rj@%$I<&z>5t' );
define( 'AUTH_SALT',        '{A}wN(g{aHSO`,oQD;JjE6a=Y7~IvI|A/hsT^Zc|qKblfpo*(QsYLM9b]}<S5/ZX' );
define( 'SECURE_AUTH_SALT', 'Z|<<.]@r tViVG;f+Ri&kFhRwbD]6^e!+ZF[tvW09OOGOp2wpF#wUjpjhqY+/DI_' );
define( 'LOGGED_IN_SALT',   '9?,(+<MiiHhDx;xMOYT $MW|cqT[aZBsHzbT:<TJSS<1CKjxh@c#)HUn!6Z##3 K' );
define( 'NONCE_SALT',       'F%Z0w6VaUfl@NT,3}4[jLU9%nrn6N7[aw+o;$)f<XphB)plJdO8)hXP%V(Ru]c7i' );

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
$table_prefix = 'orion_';

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
