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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'y.=!ppEHsQ|8s5ug+L<R|DLO)X&.aCY%P0`[HdFSY50._@/UEq}PKJd<z&9]iX86');
define('SECURE_AUTH_KEY',  'gCeXmWcODnCV,l<,!OO=7:O&gC+VsExz@9MoFP_L.]W$!/0Sn[{h0p,g!O)Z^pOa');
define('LOGGED_IN_KEY',    '}9WC=mce:)9O}%/] Qk56x|Krp=WV%B+SJ]|smqv@T(a/q_NTq k%<oo>,ijUrPR');
define('NONCE_KEY',        ':0Y=F V-L?XQ)dP^),^&&L+wsL5g?@Lv^ZyUy7X~.w-f[EEm>F7i^@c.1t:cpVu5');
define('AUTH_SALT',        '|CpG<),fU^V$(F6(r?y{t@4C_w&Hb5GYGhCCd?)Q///*,vv8e *{QQ.AHTs%I>)l');
define('SECURE_AUTH_SALT', '5%CFOc7)TFIWtlgxY*y08$ouHvf<A2YY[@G4Z?Nu,a3@slPf?v!I7s<{gAg)rz;`');
define('LOGGED_IN_SALT',   'lPF}Bf+%gthEH:AH=UUe.=pGtKA/QfsEEajgWs+yCYi)sVOE8,oR^v%P/cQb<)b ');
define('NONCE_SALT',       'Fel(Z7T8ox(FN>wNcrA:Q?WAoIu+$<}pFS%dsNWs_XS`Pqce#7Y}${#l|vNzdb2u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
