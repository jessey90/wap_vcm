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
define('DB_NAME', 'wap_vcm');

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
define('AUTH_KEY',         '4_t2~-$!Ex2S(r+ma6=j |`@,?o{ss5.J]:G*{^b0(-U% t._I<z?LnLCK<_7L#~');
define('SECURE_AUTH_KEY',  'o-fGb&pVj45&`E2LEKO|O,2;3q7/c&+#ytR=&Qg.F{Zu&9GI)lDd/[b.8SQ#VJ4n');
define('LOGGED_IN_KEY',    'XdE4euV:OHqY#=m0s62zw=$ wuPeJ]?wau>(;b*Ad`;9KA}GBMuk8gg+g 3[Lbj#');
define('NONCE_KEY',        'Rg1<P>A:bDp`Biem PYo2[#{EUC4QVL~ZhO`2;@&x;zHWV@dFt3zFEJ,Jws,K_|/');
define('AUTH_SALT',        '&jHvqW> <z7iHN=N{sWW~r^5;^*G>vI[7z/cnRI+#j>^G2aj{hY~,#*[2vQ>uMRT');
define('SECURE_AUTH_SALT', '^DdaBq.]@7ULrD<]:E&7V@6El9iajK?1{Bl$b=qu0=P$YNQCYqU/j]Zbn;A0e24^');
define('LOGGED_IN_SALT',   'v~t!pSa!fB-S?eQ#PTKQ1V%R^%xdN~W`/ly!u-+fL]P^Z~S *s_bOcOb=|h*{uL^');
define('NONCE_SALT',       '-&[vO*OG9BsWr#1-VJhYdSgLigY/peNMt]lldRB}lrOs}x]UsyL[pEMO@%fdyS2>');

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
