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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jobnow' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_general_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=+-(X0o^q)M1}X*sw]c!*0^L8r0s$^)_1i[%hpun.XGTnhHp8i}~5eH{R~PD#:lN' );
define( 'SECURE_AUTH_KEY',  'tAPS%_! | 6|W>OeeWUp:ak(<*$]UU1AUkD,J0wu/7H;Ivx*BjE,YAk}tP|*)r9U' );
define( 'LOGGED_IN_KEY',    '.IW<_Kp>]%j77nsP$GXhZUaZQc)(J~!$bpMBaj2=lO@d.1F{$3*6Ly)tzdy$cY[^' );
define( 'NONCE_KEY',        '4qhzkkz.JN9zi/LThE)NDpdqT4Y5*[G;grdR[shucIQ%xu66uOEFDin:e$Iji&j`' );
define( 'AUTH_SALT',        '>QJFqf;L8>+F1>L0a/fWRmEhBi(|{2ya!ug@a1z)i%{V@V*~jjuN*&X+*0sZbe!u' );
define( 'SECURE_AUTH_SALT', '4n(rg^7`IN+[v^s_Gs:-U);S(6+=]^?T(unJo`OHmEh=k[4~STk|KhN4vL(g$UrB' );
define( 'LOGGED_IN_SALT',   ' b4b#D94 ORuA)u?MJ,q%BI/f[G+2YkDkb29v$&;]Xz$1=K[22ah&G^|})J^VVPy' );
define( 'NONCE_SALT',       'I4(^Fnj)SpCkDiw<$.c48XC1?@ltp{q(>>X]*~09tazDrAh,c?*Hug9G3Q{2z(EQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_jobnow';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
