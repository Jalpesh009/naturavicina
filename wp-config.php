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
define( 'DB_NAME', 'naturavicina' );

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
define( 'AUTH_KEY',         'l*h<+<GCB?2I]Eu/o!UwpR<oRtG|Oa|HlX|#^aqxE7r?j2STU_iohd,`LvB&=A|$' );
define( 'SECURE_AUTH_KEY',  '^*qhl+`v8S#b<P29sz%Pf.5c:H-)O*2OgYW3I-zmdK]zv4lH1(o+7a3^w!q UuYs' );
define( 'LOGGED_IN_KEY',    '{^}k&tJx *!-`!!{pBAMdQ_::|ffMq<7kHydxRw5~!mQ@r;,tZ_X@ItLNc>*s:&w' );
define( 'NONCE_KEY',        'P(yguWG{k:[Y@TB=FR/**1s3O&YEoGjKhLms&}0UwWl/~`Tn)to@NYK&;/2I/uA|' );
define( 'AUTH_SALT',        'F:x^hv]w>:,QA*;l$//=CdLj;R1zE$Fq>6 4]:VvBO{3d?qavD`&bVS7AP&<ymPS' );
define( 'SECURE_AUTH_SALT', '9^tv3&u=>j7Qpl_1$c>w3qN}/04+56cl2;ca*Fi0P=/MUJ_|.*:6eld!YJL|(HUf' );
define( 'LOGGED_IN_SALT',   ']3RTwacy/fehP,2x*ic[+>|fiszf}B)4Mfgybph a]qh>YNuQ=s;;[{6T9;FnKYI' );
define( 'NONCE_SALT',       '~,5:#?i+,`=%r1h1$=NX20T4c.RB~i5BI;qg>^VLQk_tSi&Nl|@rVtjTIeD>sNRP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nat_';

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
