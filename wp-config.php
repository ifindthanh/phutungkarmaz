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
define('DB_NAME', 'phutung');

/** MySQL database username */
define('DB_USER', 'thanhx0kjt');

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
define('AUTH_KEY',         '#Cw<_Y8D&,~pEsy:zk{?o:[Wq2(1IcSC=8!/rn[yJPQC-j&b=#xY^xw[r&~sgeJO');
define('SECURE_AUTH_KEY',  '5RahoIsux$o=$](MT-*0K ;7iR9gDf] /CPTQWFy~F7{]!E}Ig_gU?*Rvn|!{tah');
define('LOGGED_IN_KEY',    '4JMEF;Xr,Z`cCs WLbtJ35xP!$Z:XoPb~{@TEuCx=CZxDJi^I-5</<n*Z^{p6y{h');
define('NONCE_KEY',        'p6UZ9^TEk3*DB H:Psw[gPPT*p2eH-o*EQ$g{M9/?Q)E1[sZ#b>asux+c&wJMGx8');
define('AUTH_SALT',        'CsQnKq)OVM!j2S}F=Mb]_2Zmdehg@hn#y#}sIZ(EugVt$Jbyz,(^ENPASP!;62W1');
define('SECURE_AUTH_SALT', 'F(TKu;(@5,h|x!SuF*hS^-#eD:@n73.st:)h|3EgpABQDhOY^O.`EQ(+$qg&#pgg');
define('LOGGED_IN_SALT',   'vMo-aVsHiT[o~oK359}ez8%Luwl:G]>!n=f-@{+g9pi.*Z3@!ntU~c3kY]*@pEVv');
define('NONCE_SALT',       '`%}2c05h~#K=,zSyfdwtSnI%1_rPDUE*OXCX|% Kx?&@g|{*+hU=qM#fXby=j5D&');

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
