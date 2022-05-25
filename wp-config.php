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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\diasdedi\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'diasdedi' );

/** Database username */
define( 'DB_USER', 'dasaaf' );

/** Database password */
define( 'DB_PASSWORD', 'mkrWIsAIRCQsT4mY' );

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
define( 'AUTH_KEY',         '`=K/@_E,6*%{7,NU):yLoJ0[Vd]A.eN4XzX[Jd8Wkx{jv+nDHGgEN:6(TgT%66u-' );
define( 'SECURE_AUTH_KEY',  'c?8 :<2rIwb{9#b<G-gMO{3{-?!([O0t4/{1>Lb6?5tB7ww9BgkGE]F(;.2KkA;A' );
define( 'LOGGED_IN_KEY',    'wpv2ezc1mZgRgIr8%Q0j}!EgZBPlrdk5LaxHI >0 C(EN*R^>)x|=LsZ~=*23?Pz' );
define( 'NONCE_KEY',        'X%9(^ M%u**`TgSH&^0AnuFC^ IN,`WFmmcLqbXfoe!?e[W0PIPtv`,;-B[[~&Yg' );
define( 'AUTH_SALT',        'By}K{C#z*ZfiK7*pOCmxSRvVgwZXy}[POG!RjX 3?}/s:crPC)e{LmMl14a2_1p`' );
define( 'SECURE_AUTH_SALT', 'rmeW> M[MjVUJP]dG#h2E@/`7&aKG7QIKZ6j| L=EmDB}?PcLBF:b>=N2L%AissQ' );
define( 'LOGGED_IN_SALT',   'pxjy~NB;2=>?R@Bd4{$BzD61T%U]P<IiEibu6^bt3-t%Q@dI0t6JHvtYdtMDn2s.' );
define( 'NONCE_SALT',       'YL(?S!K}93>d3%,MQZv0[VK5T0?qfoM6oj-ajy0]Vx|X-yKZc2qUUAeFentwPD-L' );

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
