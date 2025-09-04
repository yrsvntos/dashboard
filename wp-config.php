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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dashboard' );

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
define( 'AUTH_KEY',         'Aq34+q_*k[WY_iP63wkFbB6*]@g4%;o(q17%S~Mohd`0z6l?a?e>&c85*B+.!3[B' );
define( 'SECURE_AUTH_KEY',  'gc<mZN{OhsWZFHK.el[x00%x:sgwz~KA4g;::a@[)(ZrWgiTIPc#/lCFUj2qt(e_' );
define( 'LOGGED_IN_KEY',    '1kCdh.Nh`<$O#%7imJdX<Gl)MC-.[BEq^;3X RG9f~GYaN-9k?1pz/p{$mg]NL[V' );
define( 'NONCE_KEY',        '50qlI9>Mu(p|lxTH<dO v;4$m3&oAF02!6QYn^0TN]}?KyJH*]Y_3z+(aTdW5O.`' );
define( 'AUTH_SALT',        'ODeE*v^N=S0FHG<ZNxwnA/i%I1~$amD&e~*KR~7muF:)|/PRgViwwYq0D-q^C,5o' );
define( 'SECURE_AUTH_SALT', '`!`v-xqZA;N8H[a}i_}GN_m&Ug#R8dquZuxD&Tt!YCZm!r]%#7HH|2o@N.p>k0I9' );
define( 'LOGGED_IN_SALT',   ';UTrFq8A}1bS|Ph%.2jH@kpag3&oWIc1:21ZQ]Ki>|^N%#Hgw$TI&Vx0iW^2aNT}' );
define( 'NONCE_SALT',       '__6o:[/{j`6FxFfQIV|CUb2XnjogAzL$r24bP=(MY>5p$.Ck:SX`F.]/JL+_gpy4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
