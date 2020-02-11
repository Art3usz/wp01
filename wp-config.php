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
define( 'DB_NAME', 'wordpressdev' );

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
define( 'AUTH_KEY',         'i3;D*c.V8e?oIj>EaGoo)mSK@LP2hA,BFGG,gaK~ISLn*LS1]ErSO{up|B!STeeH' );
define( 'SECURE_AUTH_KEY',  'CV|3Q<tyB_`%.^I#Ep}4}FQh&,z$+/$%HPgswEa wvWH3#5ceWC0^<G8dO-Oe>cK' );
define( 'LOGGED_IN_KEY',    '@uD!aA5 <z(KpM&Pps[Q[s.?v,e4gj5Qx@.=rusX;[qTt1*^I`BBOqyGtp>6KA=a' );
define( 'NONCE_KEY',        '*8$QI+HQ(}U+]|3$ZIMQdS?P]IwUoCH `8Hy`^)VlQA}|o6?UOLyN/#>2Adq/bzx' );
define( 'AUTH_SALT',        'csgs;As#Yxd;K/s-7W@GGG5/zu$&eC.DJ JFQ7PSc**=`B82+sC+QK`m_30cpFOZ' );
define( 'SECURE_AUTH_SALT', 'Vr>ggp.I*w! fFR-f,s8j>UzxAOW9q11<qy UnA(9X&>SqEd0W/0nlQ)bPzL#3Hx' );
define( 'LOGGED_IN_SALT',   'X&O$tasYr&0r=#ADYx%e:F{stuEHU-O<aPaiA Ix{(XPgp))`Bm>kXSaNUJM.ZE+' );
define( 'NONCE_SALT',       'HR0gA/n4X9lqHDmi?M}RWbFpY^uQ{(|rn9a0+aY-#skVAvu.w*+_+${.3ho}@K*e' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdev_';

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
