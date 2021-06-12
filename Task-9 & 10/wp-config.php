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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';T5uP])QX,cam9l^aWd|F_(!-;Rx]qp[ybD`#0fxA@Hns.<G1MEycjHM5l-,a/z8' );
define( 'SECURE_AUTH_KEY',  '<lf>;shUg|l)92;3w9cI[u,NUd7qf 7mCA{q;x32yrx]eiBWH$Eny2>Y]S$kiBk/' );
define( 'LOGGED_IN_KEY',    'q;sx7H=eUx50m-+MSrVKf`=+k~R:8SL-OOY?ndeRVP(su.J?Si>Xl@BOobcK/q_s' );
define( 'NONCE_KEY',        ',ReR^1!p2|<HaZwimY~tvP;w@d@ce)XRlyzGlkqc)BW^hZMNPf_J{ym>&[Y[S,?0' );
define( 'AUTH_SALT',        '( w=[j92bdYE*G=/iESlo,d$t.QA,)jU&=eB2*&NuI^1[_=XQgO]Cwt5*/bQ#9c_' );
define( 'SECURE_AUTH_SALT', 'TW>]tp_{tArAYN>^QlFd5LW3%)64BpMZm3e>r0?r5ZXp`@5,_]Q|.M/gu}Ic$zC3' );
define( 'LOGGED_IN_SALT',   'pk9baDQ)U2.2:aaw^O9FZ7g1/F=7rNq%<*REMPGRO4C[)`JUD}L52PD%GI+6Gq(o' );
define( 'NONCE_SALT',       'JnIxulKlwHzvoA<wGza{M.UNqB&3+]KODBa*cwF1=3z531 #1VKbk+%7Z<W+Hm&P' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
