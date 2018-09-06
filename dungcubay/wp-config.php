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
define('DB_NAME', 'dungcubay');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'h(3-5|n%o**34luqTC@1t2<224ruM9]Yc,AThpRnqW;x}W]6|N@PL6<@oIu%Z:~A');
define('SECURE_AUTH_KEY',  ']dtSp(U!NR[j[%Vuip0AFK#sXXqhVaPd#qW`mqo,oNlX>GRu^X>uMgAM AjB8GlH');
define('LOGGED_IN_KEY',    'NIwHijPavAHu1$]-;`([SKO.Fg|A3V $yUvx*PA+77$b%+69v=JJMQi+qpj{&?A(');
define('NONCE_KEY',        'E!#;Aa_)ndZsL:i6;b.WVZ=^<|Sy#}raz6 Q1i,N$H=_sO_stM[9A+~6_/d1)iXE');
define('AUTH_SALT',        'p#wLV.*GQ$q}D$T4-c^.g[4ExH0A}Uao88_<R3twO[v^8xZ.T+uBS7HUQr@AUkEa');
define('SECURE_AUTH_SALT', 'yapTGl:gOz]f,%L!mUEM()}Ji/Zo~N(R|zl8e}|eQM,L,zf62_dyH-Z KM@*p~k#');
define('LOGGED_IN_SALT',   'GXAO)x=2FB6TYf)M38/#|(jM1RrcWU-Q<wmp6Hs7z?];b%DH^m[F8T]2s*j+j=BE');
define('NONCE_SALT',       '.;T@Mut/jYSJ7N<hAGf6|X~&S{qB<6J]sYa-z77gv5/t*`[Bg%|>Dql@oI&WB}q%');

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
