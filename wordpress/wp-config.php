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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'nanomech');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         'vsGu?*Fuqfw3i4V=*t3,@6i`.T-o}//Qxi~;H5mCk&Ti+IsDFwA6`f!jk5%5FdR9');
define('SECURE_AUTH_KEY',  '>aF$ RB]&4gv+?p!{`fcUL;o{Zy%tZ~:BBN++jITEo52eN~kuRlo003Zo>?3LMVU');
define('LOGGED_IN_KEY',    ' [5Ij4,nJzb4^1dzv.GerkV0uw5z&8z2G EO7% {y2Tb<{n66IBWo#fp@893/e[z');
define('NONCE_KEY',        ',?x_dyWR%?L?0-+c<;sN?,|odRmo2)iKF/67`98YWy[t8xjn+mN8?1#mCz?13gJ(');
define('AUTH_SALT',        '% .c{{(wqx-$ GXcV=}^/bEw0~0md8^/4G2<) V0l_6<;)TFDB6Fgvn#l8Tv4HFW');
define('SECURE_AUTH_SALT', '<YK<*v0+vn`i[3}E}EGm!oWWQ|Xq#E`I$F<C@rn=[fCg:0udf{*D=VtU5.;OZ`-a');
define('LOGGED_IN_SALT',   '+E{z:^}?Cuc=r8<|Ndm,1fvx8HbB6S.,P_ k?(ZCr|,u8Bo,zK=>{P/=V9qRuoqQ');
define('NONCE_SALT',       'Wa<v/FK#oh6;4PcWvI,e;,.xo.f!bt)B:g}j&*>0%Ij;GDe2kSg]!X|fn^sT,a<c');

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
