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
define( 'DB_NAME', 'myresto' );

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
define( 'AUTH_KEY',         'e.-nsiwgix2?=pSTG8I0_BwqWlE(~+L#d8U~_1WZk$%yCLe]?H/Sf[;XXh8lg;)0' );
define( 'SECURE_AUTH_KEY',  'X*Wm+i9ze<GNX?mBfhT7r_cbx:Cps226cWQoZB5[3(q3M-Kp1sHh9+SK#bs&taDy' );
define( 'LOGGED_IN_KEY',    '$7.=9xrZ@sO`;Pt(wg8bz~c]si)DVM/S39^A)AbuJp>`{q+qmQ[z~EEdAu-H,HdD' );
define( 'NONCE_KEY',        '*:!@exqKoKeqi[30g4ue-Amh[XSTUi4<Oi#Pw}W/:[gLhSK|OR1VM5e^t 4e3/G/' );
define( 'AUTH_SALT',        'Vb#0M#0R93VF~=Mzce`b([Cf,zYn{Wa@/TZ[g*cTZD6g=)h$2+R:p Oa*J6RG`)b' );
define( 'SECURE_AUTH_SALT', 'A8j{DrO6*QQ1x>_5`80Nc4riHrLq?,E/_K&%r.#r`f{ZWoU|.Q>:/Em{DP|@<;H~' );
define( 'LOGGED_IN_SALT',   'hZZq[DZZ22^_6lwzEHW6vD !ehP(M:ob1V5?B3A(VR?7z|/YF+U8:N5J.jh;tr3:' );
define( 'NONCE_SALT',       'AWNwHA7`OVKf*/:0umoWiy tIT:25dm2}k:&(K>t]:2Mq$#A]S=0u).l^5:[c*ET' );

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
