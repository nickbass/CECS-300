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
define('DB_NAME', 'nickbassDBcftf9');

/** MySQL database username */
define('DB_USER', 'nickbassDBcftf9');

/** MySQL database password */
define('DB_PASSWORD', '1E3s603693');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'c@0CVwk|8NsVG|1dp9_9O-#l6LxPi<2mIb^{jFr$n3r7NsU|0cod[8dOt#15~DT]m');
define('SECURE_AUTH_KEY',  ']+${Mnj7MY,c48kzR>4Zss_1-HSx]Ht]6iEm+A.Qf{7^FU^Y038!Rg}k@CO-h[9');
define('LOGGED_IN_KEY',    'm+.b7juf{ncnQv!Y4gv@CRt+P]Ti<A+Pe^iuAMD1Wi;A.ET{j6bQu,Q>BFR@k}B');
define('NONCE_KEY',        'L+LHqPy.b{iu7*,fBjy7^}Uv4@8NzVo:9lO-|1d5h_H]Le#;xHX.buy.X3fu^I0c');
define('AUTH_SALT',        'JfBn$Bg!Nc!k[8kws~:Z1hx5~DmPTi;A6LqTy<Afu0y7Qg|kz3c7jz|N[co@G!No');
define('SECURE_AUTH_SALT', 'p5Gt_5aDetL<Teq2uAbyb^3EjM$}U0cnzQ}UkwCZ1GlOtxDe.i<6i.PXnE^Mb^fr7');
define('LOGGED_IN_SALT',   'roz4g8o-9!GW_d]5exS+;2+6LyT*<6b$E^3Un0rFUcCgz[K:Zp5w[Ka1t5LqSa#6');
define('NONCE_SALT',       'Tf^Tv7M$f^0JoRs}V0do~G_ZopSx]9eDt.LXTfqI.Pb^3U$7cBgz>N}Rs4w[OZ|s');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
