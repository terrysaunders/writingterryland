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
define('AUTH_KEY',         '45lIA|/oUlvE,DA-.|Jx-:NzbMPGPZL$%v&)?.2,@QV&J-zo1dYJuo!Gx_E@{j6R');
define('SECURE_AUTH_KEY',  '&qZqV;e$hgQ|<`m: Y+4ie#g~{96s!ua],z:yxnlmJ~D-+Z.+:WJNn=[BBSTVU,B');
define('LOGGED_IN_KEY',    'j__xcA`lko]M>vr(<+)/2,b>B_#UBO@&K=O9;*EM`]bTh>MDPIp,Ta^gw[xUEm,I');
define('NONCE_KEY',        'v$+Uo))bR;WO+on]GX8I*zeT=sxH4sFyRo*{ESpv%L %a%_^af9M$)WRUI`LGg8<');
define('AUTH_SALT',        'Q53[r%%;~*1g%qLgu.P AMb+PEvvQ4hl~(u^213T+BHF?2KB`@l|%Lo|WNAWW~c-');
define('SECURE_AUTH_SALT', 'u?uw7?_H?e|8BHN q?R/(StNux5FdrwiMey I4(QS9sQk<3|IO)rPd okEmPTfEP');
define('LOGGED_IN_SALT',   'o$AI:U*L3X$&Z}sHR|(PD@6]-56l]Um%Gr!pf-}!T-cZ|lS|A:)-q_,#1v1S=BGw');
define('NONCE_SALT',       'u~]#lIq<aBv>e-cl7yDR<l:u+^v*!@gwbCK^5a:<b8e]uX |_jC>(du|.5q6:E^p');

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
