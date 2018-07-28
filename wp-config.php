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
define('DB_NAME', 'chettinad');

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
define('AUTH_KEY',         'btHcC&3 n;9?I/19KgS|E;c5:/Mr%dXMpcYH3&:beUf&B](.|tW,=3LZZ<9J2+95');
define('SECURE_AUTH_KEY',  'ipXeQv4$4wVNsKkL2|#ofM}ZK|b64potTaNEH|k<.hBaj`2]wy6B0+fWBd{BLf#$');
define('LOGGED_IN_KEY',    '8xf%++}pI=nR$K=<<lk0d KyM;M$/)4IE6Ov{)c><Cv[BTR %Q|=/;DJW$?jW8i&');
define('NONCE_KEY',        '#NH[n}RBaRbT.`sWi!P2z)X.p{@8W(rx[k/7Mw9}A#15hh&I^+!eZ.IUus9AL{6a');
define('AUTH_SALT',        '6zM[5!~YTNs5rj(Q`XICuLhaD65 h1SURglHv#0HIc<tM/Vv{0H6>Qe($x2g2HJ/');
define('SECURE_AUTH_SALT', 'y:{ +? /~Hkj7vNaMf??Y1@$0^<j3}?57|ovgaX>raR|xG1)EOJ<ttL08rOQrD1:');
define('LOGGED_IN_SALT',   '>-7rXP|-eiT18&abEqW0I~TvK%]CB;o(-]H_H{SK+FFY^,gw{C.G^tlmM;CYck(>');
define('NONCE_SALT',       'uNw$#E=}ZZD/*,`>[t|[iy=ASxqT,n9,piz/kv2*KPoixEW@g[CT/xjLRRMOm$UP');

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
