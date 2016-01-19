<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress1');

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
define('AUTH_KEY',         '|4)p@)y4%L+,5Jc;|-p!5iVFQ~ S}5n--A&:Ev=.}[JSFr=d2|rpd83B!20vNyZ7');
define('SECURE_AUTH_KEY',  '94i-|L*9V!Y. g5sQ2~F*$Y?J|?UjW^kX=V{WE6gbE$TK@HbU~l&JK~HVJ>o/t_E');
define('LOGGED_IN_KEY',    'qGUTM2S]F,y*plkG~jnL%][NaX6>JMqL(YFjV*..:XnJ9@8 R*4cWf+e6iG1)i~9');
define('NONCE_KEY',        '!G+4]mf)Nx`$#fOD|1h4r8]sC5g{?-T=c(:`VsCQ`$Lk ?(^{,);Sw;o$*;I^fuZ');
define('AUTH_SALT',        'j)JP;U4__[i`dREyzp;(qWn!Eq4INwM+-_wylU/vjn9;Z=`e1R(JD4pLEPtzDS%|');
define('SECURE_AUTH_SALT', '0r,%-=xj%B3{m*hV--qZ8~XxQ**#+#6EZ;{|,I,|3mW3|Ztvb8;mJIiD*6rdkxD5');
define('LOGGED_IN_SALT',   '2x(z(~J~MLXwjhQNb6Fvls$ymEKp(k:wV5,DAeErGm0B.kR`2!-K$^0O$dE;i{eB');
define('NONCE_SALT',       'ox`@+_2t7/;,!Iblih-|EkO.-.jB|9IfAymIw:Nzw8s}?)[ tQ7`KOX4FX~N}> [');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
