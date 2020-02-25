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
define( 'DB_NAME', 'eshop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`t!JKi$n1+[aw]@1H39qa}n#meHP:*J`z*_6<fN$I<{`+n{Q~qOR#S[p~;W/(&:&' );
define( 'SECURE_AUTH_KEY',  '*kl,)AV@a4Gm/ lCZ|l#wMGR}9!!.AQWuz4]Rw^?!(FNOw3x]#>z{`U@C a]U&eW' );
define( 'LOGGED_IN_KEY',    '$LpH8%RGOW*duAfr-Nnc>z&)}^EY&N{zu!-D(KZZ?Kz(~^`u9e)w(w2=k&N|4#*=' );
define( 'NONCE_KEY',        '.89MsL;%Z{P}AG_4Quf7UtV.Z;gO=e^b=~w=Q(fOv`l81@<]&Coz0=mA[JvjX?qo' );
define( 'AUTH_SALT',        '3ZUypKYy|Q$kf3@ze>K6iCl|jen@QW,0~)m{0B%5}y!tqJcS` xb{k#h*K 0eu>`' );
define( 'SECURE_AUTH_SALT', ')[[i|t <|0{TV(!xHv:g>!hEUD-C2rEYf g.3;4>}d3PIFVzTTt;5{GO` 1B$$N&' );
define( 'LOGGED_IN_SALT',   'sI.RKqG0`n4~Bbm^Ek|Q7[Tg2DDh<P1uSFffFv72U)~BqWI{SV B?[ZGuIOpCEsz' );
define( 'NONCE_SALT',       'mwGYW@u{wuN*q *lfmU$=w$U{;A,hQW,X-y[sr6y+BIVc-CQ>b3CT.N&X2?^b4M+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
