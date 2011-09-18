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
define('DB_NAME', 'wpykbryan');

/** MySQL database username */
define('DB_USER', 'wpykbryan');

/** MySQL database password */
define('DB_PASSWORD', 'blue8616209I');

/** MySQL hostname */
define('DB_HOST', '182.50.131.232');

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
define('AUTH_KEY',         'hV].,GR@PKe`>et6*:4-ZB>0ZN{8zg;?a`yWrP|4b$-kYRqX>jz^)ZwIKo`&<BT,');
define('SECURE_AUTH_KEY',  'R$GgMih|e9h<(Mj++,vu/WdPgJ}a$}Ka>YvQO;0.79np{%[Mo*-HyE{~@Xg!Jwl^');
define('LOGGED_IN_KEY',    ',*vK,<W#UXVt2/J(9: [4_uT+~?Yi|iN4vUzeGR-E%mB?I+>l&%Wv,n(z#_(j:jy');
define('NONCE_KEY',        'y;gKGJ[VM5y;y2m:E)[sK9Jz|V6C 72/+mEMO?++=DamEiDKYtj4G7:?RF|f<818');
define('AUTH_SALT',        'y#0L=J6A,x|4-9(-3[%K{hW6W>@!+)[>](ny=oV5Z:W.CB^nNZ3K^y+V)?!,)6Pv');
define('SECURE_AUTH_SALT', 'B?[Wr?Q^+|cV-PPl_j|FR#}re|O)-!yGQ<#~#@HmR=Q_h8fG/P[5xU(jntbyvyFh');
define('LOGGED_IN_SALT',   '[Qx+f|d(-3Y^GHtT#33h;m*l_#yJ1c^2_EMQ-+!3yoOA*j=cF+Q8-.R;%uG2LpSQ');
define('NONCE_SALT',       '~~bzt(B6Rq4$gJ|<+XlU|<FNAk?SSjV])#c26g; ypz+hJ#k<BPgjy+k?l@>3nT+');

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
