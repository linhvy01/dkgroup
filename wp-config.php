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
define('DB_NAME', 'dkgroup');

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
define('AUTH_KEY',         '3N_*z8$#RFsR;AId>c( HA0u2U2z=|3^d@l~u-d#m,S{s)6Uk&I(ac#{INkH/Jo-');
define('SECURE_AUTH_KEY',  'k+TMMQq:<>-V) 1Ze>(4?]XFyWJs?Bp,ordyKBagrpY||Je<ikH|iFF[XBtzgd+{');
define('LOGGED_IN_KEY',    '8d|Dd1R1pWF.+DU{I1rac;FFCdIw9/%zQ132OZz1^{zt_GJ-re,U-h-rT2~cmR++');
define('NONCE_KEY',        'ANL^;^T;oBW{@`>oN,-vL~LR{{sA.)`Jh*190OP`{J3kz/A:<K}UD5arj+S.h!e~');
define('AUTH_SALT',        '%w^([BEtiJ4?.(T$G7[&Mm4j?2LzX=b13Ub1TQ]@5Wt/]=@:(O6?5vd`rh]#U5=N');
define('SECURE_AUTH_SALT', 'n|a-pg<_-gWlXZ5[HbP[yt%s~OqlYGWj$}xwoIP=8=cE5g#g<!mog$!Om bRUOse');
define('LOGGED_IN_SALT',   ':UHu3%[;$A8`(fT~6ej n55*P3<*9ZfSeT].)DN+&n$W{<{yu>~~eOox0/V8T(x]');
define('NONCE_SALT',       'XcI+VLFo %WprWIpT*Iqh!ueneF[nFR7&Nv+#fjV`9AvFDP50*:#RPDnQ4)u|AX<');

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
