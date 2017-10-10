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
define('DB_NAME', 'myjobs');

/** MySQL database username */
define('DB_USER', 'ricardofrance');

/** MySQL database password */
define('DB_PASSWORD', 'rjo@3016');

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
define('AUTH_KEY',         ']#yy81i}sgjv:#lUfH qoP9lR|C,q[Rl9MjZDpbZ|H=u7MM%!OyO-#H@pPCv1yRm');
define('SECURE_AUTH_KEY',  'eDJn>8&hh-yNHJs?(D1xCR>JN(2FVj1}UZmi0RM{&PohW1wm~.S+iP}2%NZ-!,T,');
define('LOGGED_IN_KEY',    'C:)b< dP^,Zde:aS!cJXjJXGi=zrWt5T!DDXsQ&h$@T2Q,qr5F;0OB7`[a?K atU');
define('NONCE_KEY',        'POT%AzH9F5]3|~._h9&qU2ksMCZ|Y}10:lu03@*buI%1P:k]Y6NtV>guGNz`kfU/');
define('AUTH_SALT',        'CB<([)OqO%=IQ !A(Pp<`c+6@`pYuSo?WuZZ2oNucg/00{+;n1(!?q#!4:) t~}<');
define('SECURE_AUTH_SALT', 'xC1yXn8yJ+F8;QdK()aa]Zp-T`|C7oS~R4$NE-9?<8x>[qn)M`Rm5/.fAhC.T.gs');
define('LOGGED_IN_SALT',   '?AGsRb<ZELcwk<Wy203rE:,fCgN2GLP;Hu&`WH/LV/hz1o P(euC;;8>/blPy,H8');
define('NONCE_SALT',       '>#!D>0I?VjpuGb6WP`p@^Zb]_D/O<*-gu4T$=/7tFZJUY<sZ(Y/(nd>!gDs-]:Ru');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rfjobs_';

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
