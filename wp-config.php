<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'mediex');

/** MySQL database username */
define('DB_USER', 'mediex');

/** MySQL database password */
define('DB_PASSWORD', 'X7QJ7EcmvHDNQszA');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '6DpdjZM.4)P5Al)9 )du)tr_@GpZ*WQi !!*pQubG-3%hM{69&$+n+(f#^3nxZme');
define('SECURE_AUTH_KEY',  '3tq7k~[yow7rWDTtl/S]kEB5D)Lln[4-vXXGMCrx(/#JzJ71h%afhvALTsq(]r4L');
define('LOGGED_IN_KEY',    'v/im:X|]}1lv#`a=ph#z~A}FcbttdE}&2;@YlF)Nmr1#h9M^Yg$zJ .;~t+f$$ye');
define('NONCE_KEY',        'rg(gfg1Y&:NojI`t4?DB%%oJ(g2;TWzPYKpif:Zm{Td9H5z+!j;N@)Tc|Sz.KMR$');
define('AUTH_SALT',        'oY21a[.&? _I,C^nAfh_4z=zcE#C.F*~?&gLrZ[N]u?=VPJ*O)_fZ@},o{!S2>iA');
define('SECURE_AUTH_SALT', ';O>cG=15[w}]|jl7j%Id#@9g%4RiMyZiLjdhz@/HF@!l6|E>[SZD8mlF&+gmP$&[');
define('LOGGED_IN_SALT',   '-M&b&%Vqv[%H/9ud^2z);o-[Ztvt[D99))8/Z.Efr3<I,%^os?1R,|==k+QVz!R;');
define('NONCE_SALT',       'OM/t]?Y5p=5{n:dMH ~q78i8poWJJr(P ;;b$_Jh=~v%83cIN.w,Ku{`P.Zpb!wi');

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
