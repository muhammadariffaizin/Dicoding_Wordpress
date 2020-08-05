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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'j:lR4][-)qI4eb7I4MmJY1JR~;&X[Yx^l%;U[E920PZ|4fzR&oZG[qM)2m2DSGO(' );
define( 'SECURE_AUTH_KEY',  '`bqqkr,wvqi%/M8yUDAL)/S8<^v,(]!MG*6=]mwF =L#-C6bkL>E9t!8X|sV~*aS' );
define( 'LOGGED_IN_KEY',    '^z=Kr~](3SLxfbq$+(eMGg^,~/k_*UU#L6nK=p;;@@2~;u^w}&?|&j1!xhtKx^:2' );
define( 'NONCE_KEY',        '!ZrQTx$-vvA.]XpumpeZ!&QI(lYlSHmf(%%L#WJR3qjcGJX,E=NO}X`*=CK`Z#uM' );
define( 'AUTH_SALT',        'B@ft_blY(g^2#h|a^+91iLOWU$ip|xO+MHBhIH87@(F^#J&x}!YE@xZ=;(5#lb0_' );
define( 'SECURE_AUTH_SALT', 'Bv|~Q7S~SBT:1T]:+*SeQVEPffix @/Ub)aydTJ|M3|dQQ/2z_XaFf]POHE-`|2`' );
define( 'LOGGED_IN_SALT',   'S0ke_F70 :+872#(}+rHC^Y[ZLHL_74p=z9k5{MKaUG:SK%C5#+UYv!@@y#QLLPb' );
define( 'NONCE_SALT',       'z<z#s` ~|dZ6=:[YPMxcbFP92RF;F.z_D?%gj!%NNW827BYN8Og$WbcCS,.u`MNn' );

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
