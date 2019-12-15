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
define( 'DB_NAME', 'ryanpmil_unitedworship_db' );

/** MySQL database username */
define( 'DB_USER', 'ryanpmil_myuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '@ugusT272011' );

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
define( 'AUTH_KEY',         '`J`A*iTA~-X8NS0^hk_M4On-/D.dgLs?6K;2n=;&%kZX,>xWUA?P+/@O.>N#H+w7' );
define( 'SECURE_AUTH_KEY',  'R*5N]$7W;Ef=I~C.eEN-vWuE+k@)Z<!5Gq4V{%Pm~aqy}Cy}BdlVz.}1O(WQ2o{C' );
define( 'LOGGED_IN_KEY',    '$U;in5-pZM&qoC?5&mA2?&j+pIFH?N4V/x)9s4 SNWPg@2LXo|]X%9^}{&#zES|h' );
define( 'NONCE_KEY',        'Gp[%Taj,;reJ7Ib))}(5ov&LN$$?ZsLFtTevOe}$:N.=~|XV5WHGnYU8d#oJK`MI' );
define( 'AUTH_SALT',        'ycP@VK0fR4))G9<m#%cUs]j=HGk_+p-G-E}-o6bhkX~RmUV`==SN.)bP7DuLXe[`' );
define( 'SECURE_AUTH_SALT', 'zNq[6Tje~slnKADIhn0h$SA_cl3?,%HYYx!z7h`DTa.`9KM1X8Bu+(qU3eQITd2j' );
define( 'LOGGED_IN_SALT',   ',um@6`k}W}as]%Ww:H:wC}LPb)NH#=F3KW@*3*zo@/Pj5u0}zsT3o)`^1#!OwOHe' );
define( 'NONCE_SALT',       '{}n:Ar]}/&tC[7%yeQv6.i+xXM]ZRlg*Oh+8_XQv=]|=ESly0>I_y>L|mJ)al,0K' );

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
