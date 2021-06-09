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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bébé' );

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
define( 'AUTH_KEY',         '9t&^Db0on{YY.`]n3<h`FCj)yOI;bl=cHm~[..[.R<!yX7XzFNwjz}3[xz9i&!Di' );
define( 'SECURE_AUTH_KEY',  'BU}s]*7r1)(+[[N_R}chNOTh.?J>Y=rpCT+0q# f/nQPs[kd%2tSHKZSp=$Yl0-R' );
define( 'LOGGED_IN_KEY',    'T{gbjO:l8O#of|0,_3Hr$q!:B#t#T|4g8<E yOP!xE.MH4z6:w4e<nrppIG_jM51' );
define( 'NONCE_KEY',        'QzV`DU4IL..+OZ(9[SuqcY.IV`D`PfVsI^AiLZoQp7!n?$h|Lz/{g*}z u(&sgDi' );
define( 'AUTH_SALT',        '7vJ_MWfr6J}8n:?}$&LL DgPhZy/]-XN!=pQGk+i~ E%9!HtwwE{]acUA]GaMc_p' );
define( 'SECURE_AUTH_SALT', 'm@NK@A*zj~K)Pg VJD.leN*x-i:d5TjTzGmPw:A/|7D<t/g/*<aR%cB*eb$m{1&7' );
define( 'LOGGED_IN_SALT',   'bK*c)EBNpbV(0yy)}g*CsTIw/dY++x0+wRi&1[(JxSTFw}1&K9,jH<Pq7<IVo7+A' );
define( 'NONCE_SALT',       '0nX*1IU:Nd?[1~e8(M<WCofZS#)|PIgBnE.?t&-~2v)($NUs5q$<5^jPe#jANzSu' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD','direct');
