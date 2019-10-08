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
define( 'DB_NAME', 'purrfect' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',Z0[@1(vm@r84Se43c]UPsbBK..|Jw)wD) 9=Er+Nx]8Zx&%U^2m@%L,m|O3MSF]' );
define( 'SECURE_AUTH_KEY',  'E5EV_:i!w-A$TX*3^Q,3lC0A|e<zu~zdU7iG79iC^mN;N%=e}OU ,vNdF#:PCP;q' );
define( 'LOGGED_IN_KEY',    ';{HA6@sv9]U;vMnv0i9Ns8o.EfAxl%o^Uc2O<Xs*3wU2xjCn_.4o`zs>}(W4,^//' );
define( 'NONCE_KEY',        'gpQ/*Zch)v@|`@<9U07L|!],hCJ{HR|W2 ,LX^L4)k#jp,>yyFuxDvJ67@=4LEsE' );
define( 'AUTH_SALT',        'aVQ<T57>wdiqG99ep{1a3KJdq0V~W) ikkf!i6QP(6l9~/qdM?1INANsySIqg$~K' );
define( 'SECURE_AUTH_SALT', 'e,=5gKEyQs[@Z#p~m#kUP[7l&Sk|Zkt5}=GdcM$0ST:?SmncX,QRXAEi5K9 HBW}' );
define( 'LOGGED_IN_SALT',   'hFRpcGX$q{j=g%y:_A0o|UF-^VPnU(>[(=8q<2z+XZT<(MdX+g`n*ZVM+8g0ptC{' );
define( 'NONCE_SALT',       'Y;v@gR[|_0a^,`=&:s5+x(voE$5R{:K>-6Smoi0/q*h`S(>rO1*`zZj4_/.vu`l)' );

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
