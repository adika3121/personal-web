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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'personal-web-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u62SltB7cmlSJk6aNf8lvKlpyATMqHHvvEAQiHyBh8GL98K0kAha9zY6U8n721nk' );
define( 'SECURE_AUTH_KEY',  'mNOhFafcT6mmqgeOukijA7gR7tQAI7SjXXcRTpP4OmKSoCCoFBjcOZMFFO40lk1U' );
define( 'LOGGED_IN_KEY',    '0ZAtMVmErRc3OxGBOcNbeQpK9YtEDT3W0Pckijw9lxggpOShb5oOKjwcFcSPCutC' );
define( 'NONCE_KEY',        'dkd4MCZcAyhh5NFTtLoSflnwIN4waYhIIEAZdQuT8esDak9JaJzjqHyWr1JuXyvi' );
define( 'AUTH_SALT',        'tCT4adH25aJ7Xn3WPMjMa5RrhrjRpgwQKpcJw1BnV5MrrqDVLuDEzhJNHokSqXRK' );
define( 'SECURE_AUTH_SALT', 'kAcTBFrm9gu8b6UUTtk4tuRPkWs9grJkciEg2T3rCPFxX7JIa2vCHxUITk3IZQPV' );
define( 'LOGGED_IN_SALT',   'n6uocJfHehbLF9EA7Dmml8eJJCgqkjjnlEQpyuN6oalliR74dP3Dszg7qGhzEbtY' );
define( 'NONCE_SALT',       'fMiNwqSNW2cem4OeMIxlqt0chwdeCItbMXrq0c5wWpprylZjyQ5F9Y5HbnXDZv7z' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
