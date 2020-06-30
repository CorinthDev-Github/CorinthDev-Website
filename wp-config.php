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
define( 'DB_NAME', 'corinthwebdev' );

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
define( 'AUTH_KEY',         '6Vq>}9{5d?m,sr?)okZSnsVzP+B G</Z^}aI9KBh597u;yx]3+]qX4q[b-+>:;T?' );
define( 'SECURE_AUTH_KEY',  'YG*:5NI[%mfDpUHrL^{}~BNf;^=|F$|ffo9,ie).X7K;F9p&IL+-b {JX=81{^O0' );
define( 'LOGGED_IN_KEY',    'CFM+#Vp7?sNQ1-S?>!Zlc$g{wjV01VCzS%AcI|n<X.iLf,qr0SGo*:PkL8.</b0G' );
define( 'NONCE_KEY',        '+P7&YqYzd.]uy(hvU-O1su[j&lV3(?X]yRv8mu;o4SA]VV)>H?#fOc!` Gb?KWz$' );
define( 'AUTH_SALT',        '}j:H[SQ/_kXn$Q5;1gQf%2FRo2%-doz[,$wX{h$l5OiI)WQ+S9Na;cuQP3$-6|Wg' );
define( 'SECURE_AUTH_SALT', '}2oaK?bZ3R;6}]8xQ!,UC^*V&/el1Yo_@p[V(3(Fj`7Nmn(f&R#c0GN47+^}R[iv' );
define( 'LOGGED_IN_SALT',   'U>;Xf:0>U_@9>pdx?t>syB-Kw4w+3&y@[(Bz^lvLneR~@KeoG3R8[Lp>?FtLXd-&' );
define( 'NONCE_SALT',       '[&aE8j~RnZ29WNsow*)bD`]QpzyO}**J @.$Mi-Ntajr9XK^9c~_a{#G*t)Bn6r=' );

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
