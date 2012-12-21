<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'terryland');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'kippers');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')rbR&WG*{_(_;u),3[~WHCkrw |>]()=Fcw]DU}@WNngJ>A|bw+>Phk/}rm~W#xA');
define('SECURE_AUTH_KEY',  'YOb!(&Ge(_{xC+|3C:0RK}7Tp$AG=,w`xDBLo)nF2qEGea/_dTvlDbD$eKYww2w1');
define('LOGGED_IN_KEY',    '%F sms>ge.^AO-w,V-{P&&6BCz_+yy*:;2|F%+!>hJHPwfbdL<L-p8cDFz)3ICJ~');
define('NONCE_KEY',        'vei@c)n<_kGerA4o7T@EW0voWBp~9fnMu2Y~^{?S=8?Q,Me!R4{1j7{C$KP%PMee');
define('AUTH_SALT',        'ocBcu`X -7%0dg!U[H*&-/-LkQN-2U-9&s21RBF8_2-M}2_y]`Fb)|,e<=IJxjj*');
define('SECURE_AUTH_SALT', ' XmY}R-jfp;#cI0[skj1tM&<S9cI+ODLYj<YA#G]S^|@b NAvne`K@HnD2KsG1J9');
define('LOGGED_IN_SALT',   'T:ZO<PS-/-TG<(dA^U==a AHt%I6Gz_NH*CoYsybj-.%L+h|-LKv0+a5r_o].1}%');
define('NONCE_SALT',       '7Go,EK5 jF#5k5&T3}e9qsopCf%D`.UD&%6@GjFB7]qo^uw,_$/qgsL}~4}|Q>D+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
