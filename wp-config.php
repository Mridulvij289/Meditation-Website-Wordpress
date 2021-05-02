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
define( 'DB_NAME', 'mydatabase' );

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
define( 'AUTH_KEY',         'BH[1}/.rb|o52yx^*zo%P_ne>XkPPkE]Te1,4UbB;oj!;vIn;f=r-TYpNJx6HDsS' );
define( 'SECURE_AUTH_KEY',  '-)hm<AV[m,n%0@nFmF7#w&.81HLRk4Z~Rj/pO)QAYCj-m)W8i2H4Qb`Pa_Skw77S' );
define( 'LOGGED_IN_KEY',    'F|2H5T5N(sIe<O19k %Av;j^I`E-GNi.}bmoo`t:D>P5=|MiP_M6<po>ge/_31LY' );
define( 'NONCE_KEY',        '8(sI^*+BnOo8_1ePl0DZZ>Q^o>Nn+v[$62Ljzo$^#EDDPP`yN5Jizhj|3{=L?|5n' );
define( 'AUTH_SALT',        '+Puh~ICT%-*hx+_z0}%!es.($N0n9IO(=hA/:-XPI|i]i9<d7d~Aw9h5AV^Po&Ai' );
define( 'SECURE_AUTH_SALT', 'AnQAKdH{ umhzFyBT)&bD[+0p|dXXZJB4RH&idzsoaf^ KmiH<Rb;pZ;CQBd:Rfr' );
define( 'LOGGED_IN_SALT',   'SubQ:C[7wv5x.,~bI0P.&FC}R^LQ*IRkE>2n8_RDr7d)2c2[f)S`7;Kv&MFWp3C#' );
define( 'NONCE_SALT',       '$^uZp1Fb<yT4fm.O+rbhJ eVF#+jR!ajqmoY,S(t!|_T]C;_M{:G|qT(@Q?9Nycl' );

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
