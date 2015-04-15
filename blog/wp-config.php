<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nextlayer');

/** MySQL database username */
define('DB_USER', 'imyaman');

/** MySQL database password */
define('DB_PASSWORD', 'bsdsys5l');

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
define('AUTH_KEY',         'j7?])`w%J1 qitE3Zf-$z3=|,I@Zg0bSm#m:QVJmRxaiE|jP`bW;taa,nEa/J:_M');
define('SECURE_AUTH_KEY',  '&{Eo5Hdf-Zaw+>Ea+5yo|69|4.=Cf+{-z.)^1J_%+>5sd(yRQE4q}C5|Ch+l+e||');
define('LOGGED_IN_KEY',    'Z*-xB#u|Jtmoy)[v+H].&j+EmF ;O#^76y6pOQ,=~I<3Z Wn$C.n:R=KQoh{=3cJ');
define('NONCE_KEY',        'lx}.w]$``kCEb-5|>uQ1-rtu=aW[RKXXcj?p4eBu?WaZl:J(ALJpbB2yoA$-LV+I');
define('AUTH_SALT',        'ZVjP^3)(!{$o.C#nLVo|%!+;n[a]:nP959uP6Ic+Ma*bFr}Gq32GI38fS+Ns]N=.');
define('SECURE_AUTH_SALT', 'u#&!=MPN}$U_N<`y:w||+/q)<SC~QyLL:Jqi#sz=qc+!J@ex}+TElS219)iCK`]i');
define('LOGGED_IN_SALT',   ')uFmfc<#x<MC6eh%rBl_xb3i?!hU rl|S:>&$H7xw[VN|nIVTBIcK*-zkf:3r[z+');
define('NONCE_SALT',       'dhq?1^-@VnG)Z*:_L%U2So ~8GAb/#@+mMQOyFIY/1RU&__.z:g|D|F9KmNy)fM`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
