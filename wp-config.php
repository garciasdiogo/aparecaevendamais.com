<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sottop40_wp521' );

/** Database username */
define( 'DB_USER', 'sottop40_wp521' );

/** Database password */
define( 'DB_PASSWORD', 'S5S!38]pwJ' );

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
define( 'AUTH_KEY',         '62bc1iipyo1hohxqmbiypquz3ru7f7bznnbdyyiuctx6lw29amoxsuxuqhg0psb0' );
define( 'SECURE_AUTH_KEY',  'rtgtyriixe6lccqg6ldy1qkp9psp2ezjmdmaztlrae14nxzvcbez7qxotnk29afy' );
define( 'LOGGED_IN_KEY',    'jgpudcphtfq6ie4rtw3udhvi0qojtjkrq2zwazidjvwj9bw8cpcihayeq4ixt0ry' );
define( 'NONCE_KEY',        'ufiuncmzvpntqias2t2smj8kpbxzlbjcuwcuwgurs2youq0fs0q94eawndqkcowb' );
define( 'AUTH_SALT',        'q3xyz06uckcydxzmuy5caqno1uqt1jcry5pyuuqbbaxim6mgfjz9x7gkfhrlitzl' );
define( 'SECURE_AUTH_SALT', 'ukwzve7klwlvunrovcvycvl8p4j1yont4ev5jamejsiaa31kvqrhc2haddkrvg7f' );
define( 'LOGGED_IN_SALT',   'b2tuwjvajj9uedaqg8uzllw99o1ohgz60wbirkhgela8vkufqbrxdrdb6ijidtfe' );
define( 'NONCE_SALT',       'wfa2yaqnlqo1l1mhwgsxq1ehgrt70kyolrp2khzomea88btxqhfsclcdnswws3ie' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdu_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
