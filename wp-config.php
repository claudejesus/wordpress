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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'eh<$ml6f?0Mx(]_;PZAi~muNIiO!#.wS.h8K9v2o[+VNXRy.PuN@07i|F}JvF_|W' );
define( 'SECURE_AUTH_KEY',  'xJQ^;]PLPl1`Xlx^v}dmY/T|lymjNC8;oV`o+C-*IcG6R@A` _`8@XX7y=]5|GE!' );
define( 'LOGGED_IN_KEY',    '@v.dMkIc4Ix3jkiUq~1e:Madq3cR=E1eu;}l[S,*<Y*1sx  .JG q$Q:mB$k}#&o' );
define( 'NONCE_KEY',        '{/eZeRkxSLCR@MC2p@TMCW|._CCJ s$`I=dfs(G#UVM+cH#@cPW/d{{<Has29j l' );
define( 'AUTH_SALT',        '< e9D5dcIRJd8z1g/5J6O^3PP}T{y:=M[=mQ4*j?R;*UWq9#[V%=N|Z&=9Uai;2x' );
define( 'SECURE_AUTH_SALT', '/<KFSpMZP3Wy]H(]XY%|xU5mA._]V:fnG_<GUUpfw{8@}FFk$Nl_9kP6Ku11x|,R' );
define( 'LOGGED_IN_SALT',   ',{4Ps.^_2$JsK7LK6cuzWJbOmN9Lua{p`c*xb-Pb8BqEY;Pn^S6qLdsE?.*S#l`;' );
define( 'NONCE_SALT',       '<I68PD-_Gnl8({L3%E41G/kWikv9f`/5FK;Ko;}Y6{X ?{(h}C;.EbH9Zq^6RY/(' );

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
