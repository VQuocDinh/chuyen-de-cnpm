<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hancoffee' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}b!i_3v3F]O;=Ee;2}bTGo*{GKpxWA~f:1>5 8a6~IMzF^GpQ`t,qHuvT~T 7,Ns' );
define( 'SECURE_AUTH_KEY',  'J]R]}SV{iHqa@(!u|zB%LG3r@ D.u4`12:)ppuc*qVmVFv(x 6GDhHrs*f4!GzN8' );
define( 'LOGGED_IN_KEY',    '-~PBTElG|?M[l(h)J3rjxh_9=7C!WX0LH3A%2Dqnkz_bQ>GIeyynON_jxw6]`{;B' );
define( 'NONCE_KEY',        'h0tw00#SMqS[l<0=z1YGWl0fEP^8ebT68f|}Q_vjl3<H@)3FNH3A6h|V=uxi`=B/' );
define( 'AUTH_SALT',        '?B@tH`Zvz,#U|VGq* -^kdJ _jM=mQhUE|Fo1N(_TMDNta#h$<p?G77d^(>(H{|a' );
define( 'SECURE_AUTH_SALT', 'HF/,P8n/Fq/g6B~sU)r`R^*A0J8Th{im_QJ]vd!Z6%3M|65HK_.Qi}T%OJeqVRAe' );
define( 'LOGGED_IN_SALT',   '4x>^Px`!OZ%ntbJIB=isE/k0+^<6at^C8Rko1:p@V7}#3uN<Cs><-M]ZzCuEx1D(' );
define( 'NONCE_SALT',       'G$799Nv(|8{}?+KyZ!8(~8b$h*Re,gn:y~-6G:8hm0_I-&$TW61]t&=U>H|:WD<$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
