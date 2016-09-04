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
define('DB_NAME', 'project001');

/** MySQL database username */
define('DB_USER', 'project001');

/** MySQL database password */
define('DB_PASSWORD', 'project001');

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
define('AUTH_KEY',         'fK?Y!|ODW5B-%>Q!E!*rY]]!wRb+0s:d13gYYk$}yz/{|QW]Oe&wNTa)r:)A&pAT');
define('SECURE_AUTH_KEY',  'pY1mayl.%pc~&Cq4}_299RMt/!3XRHZ(L.m-]:&7GDTWEo0C8[hDyqQ|k$jKC4u+');
define('LOGGED_IN_KEY',    '4$X9^MHE{s%gS#n#v87)pHEh>g;^u:KN((X, MGSOZ#S>%Oc-SSQd9N@TTrV+MOw');
define('NONCE_KEY',        ')4Ap^ 3Tsb^rnJt/a_*[L:FF;Vm3b,|^y!r[W2FQZvkZ!Ep3G6V&qe}tR|ewO]Yt');
define('AUTH_SALT',        '1R$ciF+(/W{U4$IRqIc6ow!!_E}$G4(C1G-{T3 |VuFS{3iSS@hiR!T`Fw-EXnk;');
define('SECURE_AUTH_SALT', '_ztuIpk+N-A$Bj2&JXmVq^Qjywe%(H<}{%`^AT7z0TmfZI,{_PpY1r0@Gs*={Vj>');
define('LOGGED_IN_SALT',   'I%jf2@D]31#%U[*d!G5O4Vk;Ajwh?%h}|z&o=ny*k[i~g]o ul@[fKC:91td%lbb');
define('NONCE_SALT',       '~r^%6h[#AO!,EpQF-F_UU6!FdjYG:q*{{;n$ W.0]6,qU*^mFnKIme5morW{;7x[');

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
