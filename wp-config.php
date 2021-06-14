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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'fmC:p:wDr3i*yMIltMlhV!Nt]2Ss7&uIC0IdPcEgv_~aZP-G@iWCW2^` <br)HjM' );
define( 'SECURE_AUTH_KEY',  'dJ/hLDWW8D6^ZV<qN}ik!Qe|iKe`H2z@]EV[LF`<k[-Xi%Rag7Y~n1iCXz?(]B_f' );
define( 'LOGGED_IN_KEY',    '23S&I A;]-%FQLAxj{b0A9|1CRop{2|++<<JIK%I65GfX<,5%RBJBDJ-T3^=x*wP' );
define( 'NONCE_KEY',        '>=|0CBiq3+%QL?1Q%h}(c%C.uN0tOn{VNu*>UPhc@n_8seAoV=-R@vR/4/[<y7Mj' );
define( 'AUTH_SALT',        'nOv2H1?^@K6R=5=>kKhr(CHU94/X^<%-brSE{`<P+xg]KL~|DYK|tMoer_V;2tu<' );
define( 'SECURE_AUTH_SALT', 'v7/?xp.[%m)XGrcf*+YhbHr0!U?+:NA{cEMjm9kZ<3RI&w><D>s.~tI)lDq!&lqW' );
define( 'LOGGED_IN_SALT',   'qO4#eZ5oupFB>&/#s{-PXUKo?&R7a/[W8`vRF):Ei@[/RF6)}>QlUEd6Nr_}59+I' );
define( 'NONCE_SALT',       'f GfcOkf]&lLb8HYXlwUF|)V@uiLd!FvPM5Xndw 5o62cK<$VV)LfR$>$Q55$~SE' );

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
