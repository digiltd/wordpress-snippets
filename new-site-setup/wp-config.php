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
define('DB_NAME', 'SITE_NAME');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'vp7(t-|p]o-^1$#6^@b-1a&$tF/k+Cpz8/CDoaiYZgG4kZfT/1QF=0`W2)iBrWIR');
define('SECURE_AUTH_KEY',  '^n_A?;ir&vw8#kz^gr3cw.)irR0WZ?Eu_41VSnD/|q{C6(vjph3*aL$A*^CLk,(w');
define('LOGGED_IN_KEY',    '44jo5F@{weU,FF)tORH^d.8.bDsiys@g<>#4p;igwmX&sE~W16*]$;S+!,kkJbrt');
define('NONCE_KEY',        'OJ}AW4-@k3%!W%9<WpGs4hx3-]U-|;Gg%T Tc11P;=3ZE|A,8N/E]Ikm^!~hd#|$');
define('AUTH_SALT',        'vp7(t-|p]o-^1$#6^@b-1a&$tF/k+Cpz8/CDoaiYZgG4kZfT/1QF=0`W2)iBrWIR');
define('SECURE_AUTH_SALT', '}Tgf 0H-v)AP8~F_t#q:YpDu;oAkkz/Sm-j7)o^E}}|_)lU&gm8tTN`W:R!P-BCu');
define('LOGGED_IN_SALT',   ')}[}4adfJO5~|Plp-JI]af.#([h*=} 8JE)3=&KS4:XI`I`Jx0Z#d_*fZBV*t~@c');
define('NONCE_SALT',       ',.K!J|loc$89/k95n_rv|u3B3&{dC7COtE}jXiZ<&OH_bm&j^L5k[yH4mTJk$ht^');

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

define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
