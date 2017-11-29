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
define('DB_NAME', 'litmanovich');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')UrZ5cpehCWN4cdg&h]N}hm{HffB`{`uIZP?og#E!0{a#Wy(U/2PH*JQx$IZ]@!d');
define('SECURE_AUTH_KEY',  '6v|#RD3Yvo}7D 0l}F!xzpY71j#g-|8Fl_H/p;c|_akr_#%)hLtX!,ouaDlJd1iJ');
define('LOGGED_IN_KEY',    't=kz&#T/.$6;0-cov,lBUW[??8sD19:VAfx/@T(OKYEs2tF@~SndIGGz>ho$bF*|');
define('NONCE_KEY',        'CIAG4TpEv7n6Yn({ZL:DJYn[7;N2N4uS,d2hvST`9hPwqaNe=Abjy<H-oO^?GMe.');
define('AUTH_SALT',        'rU$:kN#:R0vk|1,Bp&O@oM!PcJhlX1#U)pGi~-6p[$28V/dWgv075Eu|]!+Twi9D');
define('SECURE_AUTH_SALT', 'f}*BZeHzXN)FxLWD,7z/&?{:<<$`0 s2`tH)4GbLX$s9kUgglP*Wh%HQCn{MyYkt');
define('LOGGED_IN_SALT',   'e6ox<DJ~eZX{O%7VZMwult_`6HUzY:46yr<xCye_tgUV8_1!fKO+Ey[sx9DBRsC{');
define('NONCE_SALT',       'w`w[8dNu$r^pN,sG@)u*7.(6T>M8$h9x%rcWSpOer-gjV*gml>`<KalUVLh%&U[V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
