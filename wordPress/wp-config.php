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
define('DB_NAME', 'wordPressRasmus');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '|cX>y=EJ4/F-%=kUglb8]]m^a*z4h5{@t8u/iVfvYS7/PKdiNqt!u^sW,NL LW5D');
define('SECURE_AUTH_KEY',  'CC*T0pQ}-PXB-[S#.mh m;+.P0am:=ebwc.#>!o6!25<e={NV1@(lLRM){pi{$u-');
define('LOGGED_IN_KEY',    '@I0_i{p%m)Vz=wtiJf`Vd##f#!|QqHltRc7mq9zp9|,&D%<XH=$n y4YMby-]2wE');
define('NONCE_KEY',        '7TUJ;G+rw+QcRYYwoe6 DPyeKxd-klA}j*;#[_T&I(y4?n2(@(B-AlfZNjn3ETDk');
define('AUTH_SALT',        'iiBvT(3n%RrMQ~{O7,4 S*,A?T!jT4KOrtJ9:U*+LA;n<cS-i~9J*z68pVL;D]=z');
define('SECURE_AUTH_SALT', 'a$Up<oL[~O&YH2.6hS%EENO;{_%~lGv!6GYVeh%+e]x9=usc3c8ya. 5^jM=~<_:');
define('LOGGED_IN_SALT',   '7jB?ji>Dc@->vTs^S9WS(80exniA/5kX#1hgx81P8wGA-Y:Ug`Py}^C;hK~jt4Ka');
define('NONCE_SALT',       'O8bq!Kg.-kO~`kE6#sR{]4ctI2d#x(/J?f&-mk662=D96;/0]D@osz2Ax&u?8PD-');

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
