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
define('DB_NAME', 'dBgolf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'qhV|L}+6&zSbW3=qGwqnzyWqbU11?Zu5Gc&9&%`&jMp,Ot{C08O[Vv]kpF|z49|j');
define('SECURE_AUTH_KEY',  '`pHF9t0`h21~sN7M]_b-3;ZUg3AOQK8 E-N.&.&wjyaah$P!bV8:V/DXEbjwHhA4');
define('LOGGED_IN_KEY',    '+|=eS8Pe3we/M2<?*tY^OxjZ`c&H0}~+2v Z#Dnhmef@zPNx2&tbMcZhHUUesQD5');
define('NONCE_KEY',        '_oNRy[M3w%R;u p:B&s~PpW9W6 h-]oZtfZKN)j&<@HprNpm7<f5yLn$Sl_+yEkh');
define('AUTH_SALT',        'I^aa&1!H<_?]d9t/:a8tWmt%)6)*.4:JK:Rx+JHMe9:TKd.Nyj5@!|bdZ$oP+^9N');
define('SECURE_AUTH_SALT', 'zDw!Yd-16H8t@3uG HR:R;;Xpk9c@-vT]X8(FV9<R28<2bh<`o+{]*[JU+}y?~7B');
define('LOGGED_IN_SALT',   'eAvJZ&QH}(IX3=B}Rtxuij23Q,P:_R_]C`R|8-tdtXPNC4PGH|:,vtJ>jFz9fZQ]');
define('NONCE_SALT',       'aML+0_J_#=m[9<ZLuEz(*z33#Er26_nBnUNqekaMVz|vV3^9Xd<,?sb@WFPV3N?6');

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
