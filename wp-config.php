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
define( 'DB_NAME', 'simpletheme' );

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
define( 'AUTH_KEY',         ':olNG8~opOCod0LgLd[m]SSWXXbJ,xQ4HZUd/<lj9^x5!Z2{&&Y?q!$l&3ucDVE}' );
define( 'SECURE_AUTH_KEY',  'D$MT4VknC]!o3qhi7y0Aj8aSV+.WA7p,5)7c6D+]#Q~eh<|M[gfWuX];*@XaU$Vx' );
define( 'LOGGED_IN_KEY',    '(w@d?ZT*d*>v=w~Mna|uKi^(Zxx}jEk]L$`y#X9*^7BJc9mGJwH(tjyxb0!pCBI^' );
define( 'NONCE_KEY',        '!h!9Su?T*dOe/WIr/zna&GNt%MZ[wIBEZMl%5XMiUqd5Gg*y)oK(=e8a6Ww#CHU}' );
define( 'AUTH_SALT',        '.{QhKbO92Hem_j=UCmY:MHSS4Cje -qbc7DUAZX>ER<,</[x&xCaJIycD,X%jF@o' );
define( 'SECURE_AUTH_SALT', 'z[7j`8zjvLKI,o/~pO7vw1jc.lYw$M<X{P0E3bWWpu/8GQ`9A2Ps}|](J0s-fpr<' );
define( 'LOGGED_IN_SALT',   '5@>#ZVRGE>V18$O~k4raA+$fcDBDXmp2iqzj+UR9LC-&)n,KF[<)QLW/|;)r!Q7@' );
define( 'NONCE_SALT',       'U~KHR.f<[p>vC!&T]4pyQcl&@~8#b:N])`ZOUHU<P`U_@0vEkhMOJ_Z$!Sx/GbUe' );

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
