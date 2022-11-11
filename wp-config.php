<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'o@i?}d-/=P>L~,hf),{NN$447;KN#F}EGfDozr Vg9oNuNV)m9dvM#S.4qBny6q/' );
define( 'SECURE_AUTH_KEY',  'LN!ac7VwCTdo$M9g|vTCY;3!M2`]c]@$k25pvK#gP g?f9/DQqVha@fAJI?x/;B<' );
define( 'LOGGED_IN_KEY',    'b?>11BbJ7Sc0OGlsAGyv >~9[vU5v X.`>Qd/2($MMLr20qkF0<tx+z;AR)?8[1e' );
define( 'NONCE_KEY',        'Uaj2q2X`MN}4/<9;fQGWVm`zC$qW3D?zA:T$qg_GT;]S:q8E8~%PkkHAK4eLI!Hn' );
define( 'AUTH_SALT',        '-i&QcN)AY$+8o&dx.4N&RrO(l;@^YMDI[-%DrF3BlSJRlna_k=W>Woy8XuVE[3lZ' );
define( 'SECURE_AUTH_SALT', 'kSv!H$35ySywmFvd2z@^lKt~h#wH4t*Lz<~%o#OrW]Cyq2R^-+T8~[&,5&_a{G^B' );
define( 'LOGGED_IN_SALT',   'cM4 ]u#KOU.Gmo*2I)Zz=T|q)%BR>{GH8!EN]0n3f32D5WbxUpp[4@k:nT81/EPS' );
define( 'NONCE_SALT',       '<uEC#>0>o^_^>1B+-m-ghzM6hA>_mZ]~<7b/k`%>}KuJBF{E$gb!?83R=uJwCU=Z' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
