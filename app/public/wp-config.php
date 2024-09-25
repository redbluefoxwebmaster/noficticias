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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'HHk:z{ZD72Wos[>OYhO8zWZK((WH7t#=,20IR?tu@8byF{/QA~~+-X7:J/2[B`[^' );
define( 'SECURE_AUTH_KEY',   '`mbcn>?8$ew/wtq1mj(.k<Dio=4oyOznpjiy1,3-r:jQIkq7of5su(75ODt,c|I*' );
define( 'LOGGED_IN_KEY',     '}d91>?M7`@b#6fP&m2%(Z#j$z)x^/@myd_*e:8=i=qT/)-.IGDJabYUEYJ)u,cj-' );
define( 'NONCE_KEY',         '<r.I$veKf+IkJ3P~J)W~ u-7:PD^IE6tKbQp+aa-p1SDjCkpMULYlqH`W<|*m9oC' );
define( 'AUTH_SALT',         'L(R$-/uke/NchCUo1w3lbT!f3kLVztp#XQ*YI )OZ8#a<*Asd|A9V5b~q(IWQlD]' );
define( 'SECURE_AUTH_SALT',  '$jrl.+[^9ddbc6~YN+g~8o4#&9K:{hbp[Wl7Ye>3> esUJl^!Pe_=5_}BD#,Ma}%' );
define( 'LOGGED_IN_SALT',    'wxsppw<8ZNq5mcD0xP[t0*un|^RiF8uK>P^lXXL4[0SAKdzLYYTC0v]dh-``nD0)' );
define( 'NONCE_SALT',        'n:)hEVwQlw.K)9C&(A5lLCNiIC(V,X}X!/j~#k.Ih22E[3ottf,mJ3.A;QTJmU.z' );
define( 'WP_CACHE_KEY_SALT', 'P9wzQL$%U(Bm1Wp*#J{+c&!<ADG+(r66*==3/LYO27IbTjLPD=S|WEos7p*>r*@q' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
