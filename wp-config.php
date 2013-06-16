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
define('DB_NAME', 'dailyvelvet');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'PASSWORD');

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
define('AUTH_KEY',         '{7C,oHXf_WSEDZ/>b-@t-$|-#JU%oreW+J5]j.vsvc>h/;zpD^M%xLb?h+dl@wK#');
define('SECURE_AUTH_KEY',  ')[gnB,J/V/^!)f<)W;=sH3Bnt>.WxFyUuwE,V+AS,o|x3ePO]2GCFQ9/+3^*_*Bh');
define('LOGGED_IN_KEY',    'rZ[Zq`o$UEylkDIzaQ/9D^Ug.7/K H8j.<pl|S)qJMm#tZzi%|}ef9V2?Un[aa}l');
define('NONCE_KEY',        'K?cy>,=Q?(tbJ[WGb:oY[-u|)V5h0y3BTsx/%QA4+1L=W_-5@y(JN!t^6`B4@a+<');
define('AUTH_SALT',        '<I%>,EgH_-Y|B%6fW9XBy>V~fm-#5o){S;714E(_m689Cr10S|bcntCrK}JQX-35');
define('SECURE_AUTH_SALT', '1kDs527_=B6]$E,[qpaQ5^lHUl>nwJ[j|a^m .wg@wT*=r2A&xP(N-~AEhACJUYi');
define('LOGGED_IN_SALT',   'Quf-T_|+FZp*RYb*4)QP#Bps1<&icuIt<_klF0L>VzwtG8lW@?OV5cocBQBu&5a8');
define('NONCE_SALT',       'Yi9>%rTabdtCv$Uc`ctSC^*vZEKOr|}>`j9IHfu:IN3sZ?A_vC)!K1)Z,(C?I+{b');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');