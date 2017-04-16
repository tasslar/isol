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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/inysol/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'inysol_inyso');

/** MySQL database username */
define('DB_USER', 'inysol_user1');

/** MySQL database password */
define('DB_PASSWORD', 'g4uFf0h)M7F)');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3vtBZSJcji1YKrEqglg2xZoFc7OMG6rw7sZXj37MJHfTUAVYtzOpDmnwumP97KV4');
define('SECURE_AUTH_KEY',  '3UXdQzVfFsBpPzBuJgQzdtCj9puWedyhoHi8Lrq8mmg2vL4utxuUOKRii6Mh5IbZ');
define('LOGGED_IN_KEY',    '6D0FpCi49SKOlNPq0oTY3lG8AO7mQfq0VaNrKOciMv6xkSQaJEW3AYXQ2ZLUYeJo');
define('NONCE_KEY',        'YCWswPGMMJKFHM9QpoyHYhjBzpOdg3movHx2FUk8Ue03tueZ56C6eZik9NbiVxUt');
define('AUTH_SALT',        'ShfHLuIP5CFLiqqdNvdcOc8TbuZkXwNJGLviww6ydSyEPrEsLAi4bbs2W1vaa3o1');
define('SECURE_AUTH_SALT', 'XMXavfX4oa3zRkGwyNFjuk27iYvM7dezz2wzHkQuAuOo8WQYZto8gQJQqsX17grh');
define('LOGGED_IN_SALT',   'LhIuxliid0hXRoRWip5g09FZtUZDWOeyr6Hl2P39SDZu5pnD91S5OiyNROB9V969');
define('NONCE_SALT',       'hJReGvgG15eIOoFLN4MR1SCPknhWTHtDxOQ2T2kSfrsMMLJJ3PvwxfYnp8NAzlaY');

/**
 * Other customizations.
 */

define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR','/home/inysol/public_html/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
