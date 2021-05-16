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
define( 'DB_NAME', 'nafidha' );

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
define( 'AUTH_KEY',         'w}U}3Pw0J{kcR(bK{X:bL8=4qY}9&8m@yHH[(q@G6jk]:; lOlTynJ{)X<W_g=~5' );
define( 'SECURE_AUTH_KEY',  '0s+mf3$ZS/g?n+$e.EAlzBc<[.P~PdKlF>z0H|-j.Ah>D[y }&g O,Hrn^.YvFIa' );
define( 'LOGGED_IN_KEY',    'Wkd,%l70x|i(Q>d(Bbn&)Mn;baLvGF8{bc<2O0>v1KTHR@n~?g6}tQ3A~vq^wjIR' );
define( 'NONCE_KEY',        'sXGSa>@p!OZtOn`Rp)Kd!?,lgaG+)074Ke]_6vwbn>p$~io_S@$hd!hlP:SSvmq(' );
define( 'AUTH_SALT',        'V=@De(cfOpmc[c@9+}|[E`* }OY.29T1Yij7m.jx)4f@(Js>yN3nA&yUt<Jxy&1>' );
define( 'SECURE_AUTH_SALT', 'hY^#lQps@0Bb?wzxXk|wL[A1&0YC}{XKMxo#W;P,}*xjBO-Hdt%rlc(_iuO k`ro' );
define( 'LOGGED_IN_SALT',   'k^^KX8Z/9 h%lR{MnF.+C79LEELqhH}SC6n.?g!<ORij6_)P.^)?unsi9ph9I)K_' );
define( 'NONCE_SALT',       '2~*WIJ3<TFztk&Qvj6?6c%t8Jp7p(9]4e4VA7w%<=MU$!(fuYP;yv%i{7D|NLGU_' );

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
