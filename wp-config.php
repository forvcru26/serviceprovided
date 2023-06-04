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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'serviceprovided' );

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
define( 'AUTH_KEY',         ' nq63Ef+`$9e?hj5Shy 4D7`q&82^I*yC7LM{rtW:^acDC$agFCV59Eb_F_NFIU/' );
define( 'SECURE_AUTH_KEY',  '8`Mz(OKZXYq(v79hG%?.;WcF0HY>{JC)c}8G2{H;w;fu.=l3{r.Mid6t=Rfo?.+&' );
define( 'LOGGED_IN_KEY',    '@$=F&29?iP-QSZ@v>j,C@d[NOSwe4#er`fl;)gUQ:`!K=-5UF80(kzT@qamOFEIv' );
define( 'NONCE_KEY',        'mnM^28n<F]&Ta9wM(mFmzm,:W{:}fBtU:]rQpA4$AiJnx7(<]JlOg;+sg9PvN*rr' );
define( 'AUTH_SALT',        'V;|@eEg><#eJ9jHK3^?2e&BjHaN8VyKs?eo.rab%$$gu{e=f!c8Ff1a?$)cQ:EO,' );
define( 'SECURE_AUTH_SALT', ',rM =Tj{_dy-H@P9f{riz6+H5]X~)ksJZ>+X~X7#HPoBQ{{aA+@Eu7=AXx!%HQ@7' );
define( 'LOGGED_IN_SALT',   'X&M4(IlLK{|JyH CFj2rETe:a3SuJHF~FScy^4jNp<p~de%=D 3-@KRRMl!gpZj!' );
define( 'NONCE_SALT',       'VE S(,Kozmbe&qVGilQ^pMyt0Le{bzg-K#>ykZ12NEt4Zyky?b4x:{?>${GO-?E5' );

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
