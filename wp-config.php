<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'localsite');

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
define('AUTH_KEY',         '==ZC@]0-R`npTf@;1?LTUNfW?7|arfr>l@QLjvb^Ow_G}nfnHm:/FgdoqmptHFBy');
define('SECURE_AUTH_KEY',  'abfo1xcU|YF#g||-|-XdyZL)q:*gH85QdMt-g+]fGW_P&mVP+/yM--!d]`&j0M+W');
define('LOGGED_IN_KEY',    'd^[-,%SF@`[yg`hCyxd7y1&&YlEv|N bBef?R|fGrDDPDeyx+sQI*lme)<t.,0w:');
define('NONCE_KEY',        'tMeb`)aKq4Iq_M+g3(v#=jgMF[><iYt2|hGg,u5V,-y++7m%k*~h.L-QrSr7Av~I');
define('AUTH_SALT',        'Zmqz<%7obRswa]a0tR;cvrGW~Rhs]/H^7D3fML$4m9 W*dOBGhM9-]!a6C6RhJKo');
define('SECURE_AUTH_SALT', '` BGx.&M3gy4FKCV!CuSm6-b/6Q#lts|+k4r{9[JgKtpknY+C_j7.K+>d%Lz{6DX');
define('LOGGED_IN_SALT',   'knuI!c`|3<.%TN+:$0hUD ;KM?&|zleV(fEQt}=ASC#-F}#%+<M]~9t1g9~Ru{rB');
define('NONCE_SALT',       'cK[5$89=?(T-]mK[bJ--~x>#rX5`m*|o:}C$2|CC>+s~C>M7uTx$en<S}p||c7oY');

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
