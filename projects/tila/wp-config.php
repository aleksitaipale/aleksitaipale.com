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
define('DB_NAME', 'xolotl');

/** MySQL database username */
define('DB_USER', 'xolotl');

/** MySQL database password */
define('DB_PASSWORD', 'A6BGNwkvYs');

/** MySQL hostname */
define('DB_HOST', 'db1.kapsi.fi');

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
define('AUTH_KEY',         'HxNmeE 1IC;>1D0Q#^Xm=om|yJZ2INEzo-,tN82wtZH!JamTnf$;UE!Xa4h5l[A`');
define('SECURE_AUTH_KEY',  ')8p]KU&C~7p& 6HXkU7yy>|W,u.%I/Z-F[lW4 r`9yB6lsnzoDbtV{=*5z5jw&m=');
define('LOGGED_IN_KEY',    '-Z*URsb3/+5SPLL{qJY3*e`tbf(!^-(-9PryE>rjKG&oVT!IjucCd9PeHx?@*j@u');
define('NONCE_KEY',        '-CU-.gY3-`P:u<nRe_l6$,{0tri3$vzzEJem<CjtkCo +E*F:P _iK|OF7wqa<pH');
define('AUTH_SALT',        ')4mGu60y|&|*l_-qL-AFg@gg?zbn]R=xe6Y-^]{8jXTr{z%bf@I6M`n)mw,F/#{W');
define('SECURE_AUTH_SALT', '3ucPnO$FzzA]n$zu!t3(xP}b?=~yI53A4fy|w~{>*+V!~z/^*Z0 u4CaR[I-`cIb');
define('LOGGED_IN_SALT',   'mVm&e-9uNKcq782_/+:NmL<dJ0JF,-mVm7.c<_%(x[IhagD`0*;3qCzZsg%iuFyA');
define('NONCE_SALT',       'rT-v|-+(|QzJr<z*/2ZoI[{*IF eSF7mP)VeF.Fk;ilqMq$~,5Ur!8LDrP#c[N+y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tila_';

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
